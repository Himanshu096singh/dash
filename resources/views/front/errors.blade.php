@extends('layouts.front')
@section('css')
@endsection
@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
            <div class="error mb-4">
                <div class="error_title blog_title mb-5">
                    <h1 class="text-center text-dark pb-3 text-uppercase">{{$brandserror->name}} ERRORS</h1>
                </div>
                <div class="brand_error mb-5">
                    <div class="row">
                        <div class="col-12">
                            <input class="myfilterinp" type="text" id="filterInp" onkeyup="issueSearch()" placeholder="Search for issues..">
                        </div>
                        @if(count($brandserror->error)>0)
                        @foreach($brandserror->error as $index=>$list)
                        <div class="col-md-12 errors">
                            <div class="errror_single mb-3">
                                <div class="error_title p-3">
                                    <h3 class="h5 fw-bold p-3 bg-{{$brandserror->slug}} text-white"> Issue {{$index+1}}: {{$list->name}} </h3>
                                    <p>{!! $list->description !!}</p>
                                    <div class="row brand_blog_info">
                                        <div class="col-6 text-start">
                                            <a href="{{route('support')}}" class="btn btn-success p-2 h-100 d-flex justify-content-center align-items-center">
                                                <span class="text-light">
                                                    Chat Live Support Team &nbsp;<i class="fas fa-comment text-white"></i>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="btn btn-info h-100 p-2 d-flex justify-content-center align-items-center openMyForm222">
                                                <span class="text-light">
                                                    Fix Your Issue &nbsp;<i class="fas fa-tools text-white"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                    <span><i class="fas fa-user"></i> 3K Customer Satisfied</span>
                                </div> 
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-12">
                            <h3> Not Found </h3>     
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
    @include('front.include.sidebar')
    </div>
</div>
@endsection

@section('js')
<script>
    const issueSearch = () => {
  const filter = document.getElementById("filterInp").value.toUpperCase();
  const errors = document.getElementsByClassName("errors");

  Array.from(errors).forEach((error) => {
    const issueTitle = error.querySelector("h3");
    if (issueTitle) {
      const txtValue = issueTitle.textContent || issueTitle.innerText;
      error.style.display = txtValue.toUpperCase().includes(filter) ? "" : "none";
    }
  });
};
</script>
@endsection


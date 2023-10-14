@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Testimonial
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Testimonial</h4>
                            <a href="{{ route('testimonial.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View All Testimonial</a>
                        </div>
                        @php
                            $eid = Crypt::encrypt($testimonial->id);
                        @endphp
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('testimonial.update', $eid) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">User Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="User Name" value="{{$testimonial->name}}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image">User Image (image should be 200x200px)</label>
                                               
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image') is-invalid @enderror  name="image">
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                                <img src="{{ asset($testimonial->image) }}" class="img-fluid rounded-top" width="100">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <label for="alt">Status</label>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-success @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="active" value="1" {{ $testimonial->status == 1 ? 'checked':'' }}>
                                                    <label for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="inactive"  value="0" {{ $testimonial->status == 0 ? 'checked':'' }}>
                                                    <label for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="alt">Testimonial Type</label>
                                            
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('type') is-invalid @enderror">
                                                    <input type="radio" name="type" id="video"  onchange="handleChange(this)" value="1" {{ $testimonial->type == 1 ? 'checked':'' }} >
                                                    <label for="video">Video</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-success @error('type') is-invalid @enderror">
                                                    <input type="radio" name="type" id="text" onchange="handleChange(this);" value="0" {{ $testimonial->type == 0 ? 'checked':'' }} >
                                                    <label for="text">Text</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div  id="review"  class="form-group mb-2 {{$testimonial->type==0 ? 'd-block' : 'd-none' }}">
                                        <label for="review">Review</label>
                                        <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review" rows="4" placeholder="Review">{{ $testimonial->review }}</textarea>
                                        @error('review')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div id="youtube" class="form-group mb-2 {{$testimonial->type==1 ? 'd-block' : 'd-none' }} ">
                                        <label for="video">Youtube Video Id</label>
                                        <input type="text" class="form-control @error('youtube') is-invalid @enderror mb-3" id="youtube" name="youtube" placeholder="youtube" value="{{ $testimonial->youtube }}">
                                        @error('youtube')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <iframe width="260" height="140" src="https://www.youtube.com/embed/{{ $testimonial->youtube }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                      
                                    <button class="btn btn-success mr-2" type="submit">
                                        <i class="ft-check-square mr-1"></i>Update
                                    </button>
                                    <a href="{{ URL::previous() }}">
                                        <button class="btn btn-secondary" type="button">
                                            <i class="ft-x mr-1"></i>Back
                                        </button>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
@section('js')
    <script>
        const review =  document.querySelector("#review")
        const youtube =  document.querySelector("#youtube")
        
        function handleChange(type){
            console.log(type.value)
            if(type.value == 1){
                review.classList.remove("d-block");
                review.classList.add("d-none");
                youtube.classList.remove("d-none");
            } else {
                youtube.classList.remove("d-block");
                review.classList.remove("d-none");
                youtube.classList.add("d-none");
            }

        }
    </script>
@endsection

@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Media
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Media</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('media.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            
                                            <div class="form-group">
                                                <label for="image">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input   @error('image') is-invalid @enderror"  id="image" name="image[]" value="{{ old('image') }}" multiple>
                                                    @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success mr-2" type="submit">
                                        <i class="ft-check-square mr-1"></i>Save
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
        @if(count($media) > 0)
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height my-5">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Media List</h4>
                            <button class="btn btn-danger float-right" type="button" onclick="DeleteAll();">Delete All</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" name="selectAll" id="selectAll"/></th>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($media as $key => $item)
                                        <tr>
                                            <td><input type="checkbox" id="id_checkbox{{$key}}" class="id_checkbox items" name="deleteAll[]" value="{{ $item->id }}"/></td>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" width="100">
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            @php
                                                $eid = Crypt::encrypt($item->id);
                                            @endphp
                                            <td>
                                                <a class="btn btn-warning" onclick="setClipboard('{{ asset($item->image) }}')">Copy URL</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    </div>
</div>
@endsection
@section('js')
<script>
    function setClipboard(value) {
        var tempInput = document.createElement("input");
        tempInput.style = "position: absolute; left: -1000px; top: -1000px";
        tempInput.value = value;
        document.body.appendChild(tempInput);
        tempInput.select();
        document.execCommand("copy");
        document.body.removeChild(tempInput);
    }
    $(document).on('click', '#selectAll', function() {           
        $(".id_checkbox").prop("checked", this.checked);
        $("#select_count").html($("input.id_checkbox:checked").length+" Selected");
    }); 
    $(document).on('click', '.id_checkbox', function() {   
        if ($('.id_checkbox:checked').length == $('.id_checkbox').length) {
          $('#selectAll').prop('checked', true);
        } else {
          $('#selectAll').prop('checked', false);
        }
        $("#select_count").html($("input.id_checkbox:checked").length+" Selected");
    });
    
    function DeleteAll() {
        let checkedValue = document.querySelectorAll('.items:checked');
         //console.log(checkedValue);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let arrayValue = [];
        
        for (let i = 0; i < checkedValue.length; i++) {
            arrayValue.push(checkedValue[i].value);
        }
        $.ajax({
            url:"{{ route('media.deletemultiple') }}",
            type:'post',
            data:{
                id:arrayValue 
            },
            success:function(res)
            {
                if(res==1){
                    window.location.reload();
                }else{
                    console.log(res);
                }
            }
        });
    } 
</script>
@endsection

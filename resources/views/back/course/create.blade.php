@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Course
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Course</h4>
                            <a href="{{ route('course.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Course List</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Course Name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="slug">Slug</label>
                                                <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Course Slug" value="{{ old('slug') }}">
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="duration">Course Duration (Day)</label>
                                                <input class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" type="text" placeholder="15 Days" value="{{ old('duration') }}">
                                                @error('duration')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="hour">Course Hour</label>
                                                <input class="form-control @error('hour') is-invalid @enderror" id="hour" name="hour" type="text" placeholder="200 Hr" value="{{ old('hour') }}">
                                                @error('hour')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="form-group mb-2">
                                                <label for="certificate">Certificate</label>
                                                <input class="form-control @error('certificate') is-invalid @enderror" id="certificate" name="certificate" type="text" placeholder="Course certificate" value="{{ old('certificate') }}">
                                                @error('certificate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="privateroom">Private Room Fees(in USD)</label>
                                                <input class="form-control @error('privateroom') is-invalid @enderror" id="privateroom" name="privateroom" type="number" min="0" placeholder="299" value="{{ old('privateroom') }}">
                                                @error('privateroom')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="shared2room">2 Shared Room Fees(in USD)</label>
                                                <input class="form-control @error('shared2room') is-invalid @enderror" id="shared2room" name="shared2room" type="number" min="0" placeholder="399" value="{{ old('shared2room') }}">
                                                @error('certificate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="shared3room">3 Shared Room Fees(in USD)</label>
                                                <input class="form-control @error('shared3room') is-invalid @enderror" id="shared3room" name="shared3room" type="number" min="0" placeholder="599" value="{{ old('shared3room') }}">
                                                @error('certificate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="shared6room">6 Shared Room Fees(in USD)</label>
                                                <input class="form-control @error('shared6room') is-invalid @enderror" id="shared6room" name="shared6room" type="number" min="0" placeholder="899" value="{{ old('shared6room') }}">
                                                @error('certificate')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image">Course Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image') is-invalid @enderror name="image">
                                                        @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="alt">Alt</label>
                                                <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="Alt" value="{{ old('alt') }}">
                                                @error('alt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-12">
                                            <label for="alt">Status</label>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-success @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="active" value="1" {{ old('status') == 1 ? 'checked':'' }}>
                                                    <label for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="inactive"  value="0" {{ old('status') == 0 ? 'checked':'' }}>
                                                    <label for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colo-md-12 col-lg-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="description">Course Overview</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="my-3">
                                        <h4 class="card-title">SEO (Meta Details)</h4>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="metatitle">Meta Title</label>
                                                <input class="form-control @error('metatitle') is-invalid @enderror" id="metatitle" name="metatitle" type="text" placeholder="Meta Title" value="{{ old('metatitle') }}">
                                                @error('metatitle')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="metakeyword">Meta Keyword</label>
                                                <input class="form-control @error('metakeyword') is-invalid @enderror" id="metakeyword" name="metakeyword" type="text" placeholder="Meta Keyword" value="{{ old('metakeyword') }}">
                                                @error('metakeyword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="metadescription">Meta Description</label>
                                                <textarea class="form-control @error('metadescription') is-invalid @enderror" id="metadescription" name="metadescription" rows="4" placeholder="Meta Description">{{ old('metadescription') }}</textarea>
                                                @error('metadescription')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
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
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $(".select2").select2({
                theme: "classic",
            });
            $('body').on('change', '#categoryId', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var catId = $('#categoryId').val();
                $.ajax({
                    url: "{{ route('blog.ajax') }}",
                    type: "POST",
                    data: {catId:catId},
                    success:function (response) {
                        if(response){
                            $('#subcategoryId').html(response);
                        }else{
                            $('#subcategoryId').html('<option>No Record Found</option>');
                        }
                    },
                });
            });
        });
    </script>
@endsection

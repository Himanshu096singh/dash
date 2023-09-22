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
                            <h4 class="card-title">Add Testimonial</h4>
                            <a href="{{ route('testimonial.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View All Testimonial</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('seo.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">User Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="User Name" value="{{ old('name') }}">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Select Cources</label>
                                                <select name="name" id="name" class="select2 form-control @error('name') is-invalid @enderror">
                                                    <option value="home" {{ old('name') == 'home' ? 'selected':'' }}>Cource 1</option>
                                                    <<option value="home" {{ old('name') == 'home' ? 'selected':'' }}>Cource 2</option>
                                                </select>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="rating">Rating / Star <i class="fa fa-star"></i></label>
                                                <select name="name" id="name" class="select2 form-control @error('name') is-invalid @enderror">
                                                    <option value="1">Star1</option>
                                                    <option value="2">Star2</option>
                                                    <option value="3">Star3</option>
                                                    <option value="4">Star4</option>
                                                    <option value="5">Star5</option>
                                                    
                                                </select>
                                                @error('rating')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="review">Review</label>
                                        <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review" rows="4" placeholder="Review">{{ old('review') }}</textarea>
                                        @error('review')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

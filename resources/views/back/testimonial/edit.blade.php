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
                                            <div class="form-group mb-2">
                                                <label for="cources">Select Cources</label>
                                                <select name="course" id="cources" class="select2 form-control @error('cources') is-invalid @enderror">
                                                    <option value="course1" {{ $testimonial->course == 'course1' ? 'selected':'' }}>Course 1</option>
                                                    <option value="course2" {{ $testimonial->course == 'course2' ? 'selected':'' }}>Course 2</option>
                                                </select>
                                                @error('name')
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
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="review">Review</label>
                                        <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review" rows="4" placeholder="Review">{{ $testimonial->review }}</textarea>
                                        @error('review')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

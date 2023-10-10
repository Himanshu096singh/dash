@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Founder
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Founder</h4>
                            <a href="{{ route('founders.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View All Founder</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('founders.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="User Name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="position">Position</label>
                                                <input class="form-control @error('position') is-invalid @enderror" id="position" name="position" type="text" placeholder="Yoga Teacher" value="{{ old('position') }}">
                                                
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image">User Image (image should be 400x400px)</label>
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
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="alt">Alt</label>
                                                <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="alt" value="{{ old('alt') }}">
                                                @error('alt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Facebook</label>
                                                <input class="form-control" id="facebook" name="facebook" type="text" placeholder="facebook profile url" value="{{ old('facebook') }}">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="twitter">Twitter</label>
                                                <input class="form-control" id="twitter" name="twitter" type="text" placeholder="twitter" value="{{ old('twitter') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="instagram">Instagram</label>
                                                <input class="form-control" id="instagram" name="instagram" type="text" placeholder="Instagram" value="{{ old('instagram') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-12">
                                            <div class="form-group mb-2">
                                                <label for="position">Gmail Id</label>
                                                <input class="form-control " id="gmail" name="gmail" type="text" placeholder="Yoga Teacher" value="{{ old('gmail') }}">
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

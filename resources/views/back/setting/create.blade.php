@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Setting
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Setting</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('addsetting') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Website Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name', $setting->name) }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="url">Website Url</label>
                                                <input class="form-control @error('url') is-invalid @enderror" id="url" name="url" type="text" placeholder="Url" value="{{ old('url' ,$setting->url) }}">
                                                @error('url')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="email">Contact Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Email" value="{{ old('email', $setting->email) }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="usmobile">Contact No.</label>
                                                <input class="form-control @error('usmobile') is-invalid @enderror" id="usmobile" name="usmobile" type="text" placeholder="US Mobile No." value="{{ old('usmobile', $setting->usmobile) }}">
                                                @error('usmobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image">Logo</label>
                                                <img src="{{ asset($setting->logo) }}" alt="{{ $setting->logoalt }}" style="max-width:150px;">

                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="logo" name="logo" >
                                                    @error('logo')
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
                                                <label for="logoalt">Logo Alt</label>
                                                <input class="form-control @error('logoalt') is-invalid @enderror" id="logoalt" name="logoalt" type="text" placeholder="logoalt" value="{{ old('logoalt', $setting->logoalt) }}">
                                                @error('logoalt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            
                                            <div class="form-group">
                                                <label for="image">Fevicon</label>
                                                <img src="{{ asset($setting->fevicon) }}" alt="{{ $setting->fevalt }}" width="32">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input  @error('fevicon') is-invalid @enderror"  id="fevicon"  name="fevicon" >
                                                    @error('fevicon')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="email">Robots (Website Index) </label>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-success @error('robots') is-invalid @enderror">
                                                    <input type="radio" name="robots" id="robots1" value="1" {{ old('robots', $setting->robots) == 1 ? 'checked':'' }}>
                                                    <label for="robots1">Index</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="robots" id="robots2" value="0" {{ old('robots', $setting->robots) == 0 ? 'checked':'' }}>
                                                    <label for="robots2">No Index</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="disclaimer">Footer Content</label>
                                        <textarea class="form-control" name="disclaimer" id="disclaimer">{{ $setting->disclaimer }}</textarea>
                                        @error('disclaimer')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

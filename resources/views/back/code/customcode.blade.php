@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    CSS And JS
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom CSS And JS</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('add.customcode') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="css">Custom CSS</label>
                                                <textarea name="css" id="css" class="form-control @error('js') is-invalid @enderror" cols="30" rows="10" placeholder="Custom CSS">{{ old('css', $code->css) }}</textarea>
                                                @error('css')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="js">Custom JS</label>
                                                <textarea class="form-control @error('js') is-invalid @enderror" id="js" name="js" cols="30" rows="10" placeholder="Custom JS">{{ old('js' ,$code->js) }}</textarea>
                                                @error('js')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary mr-2" type="submit">
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

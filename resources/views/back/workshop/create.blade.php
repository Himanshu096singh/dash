@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Workshop
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Workshop</h4>
                            <a href="{{ route('workshop.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Workshop List</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('workshop.store') }}" enctype="multipart/form-data">
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

                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="duration">Workshop Duration (Day)</label>
                                                <input class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" type="text" placeholder="15 Days" value="{{ old('duration') }}">
                                                @error('duration')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="session">Workshop Session</label>
                                                <input class="form-control @error('session') is-invalid @enderror" id="session" name="session" type="text" placeholder="15" value="{{ old('session') }}">
                                                @error('session')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="onlineprice">Online Workshop Fees(in USD)</label>
                                                <input class="form-control @error('onlineprice') is-invalid @enderror" id="onlineprice" name="onlineprice" type="number" min="0" placeholder="299" value="{{ old('onlineprice') }}">
                                                @error('onlineprice')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="inpersonprice">Inperson Workshop Fees(in USD)</label>
                                                <input class="form-control @error('inpersonprice') is-invalid @enderror" id="inpersonprice" name="inpersonprice" type="number" min="0" placeholder="399" value="{{ old('inpersonprice') }}">
                                                @error('inpersonprice')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <table class="table table-striped table-bordered">
                                                
                                                <tr>
                                                    <td>
                                                        1.
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="image d-block">Workshop Image (600x450px)</label> 
                                                            <br/>
                                                            <div class="custom-file" @error('image') is-invalid @enderror >
                                                               <input type="file" class="custom-file-input" id="inputGroupFile01"  name="image">
                                                               
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                            
                                                         </div>
                                                            @error('image')
                                                                <span class="invalid" role="alert">
                                                                    <strong class="text-danger">{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                    </td>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <label for="alt">Alt</label>
                                                            <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="Alt" value="{{ old('alt') }}">
                                                            @error('alt')
                                                            <span class="invalid" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2.
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="image d-block">Workshop Image (400x300px)</label> 
                                                            <br/>
                                                            <div class="custom-file">
                                                               <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image2') is-invalid @enderror name="image2">
                                                               @error('image2')
                                                               <span class="invalid" role="alert">
                                                               <strong class="text-danger">{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                         </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <label for="alt2">Alt</label>
                                                            <input class="form-control @error('alt2') is-invalid @enderror" id="alt2" name="alt2" type="text" placeholder="Alt" value="{{ old('alt2') }}">
                                                            @error('alt2')
                                                            <span class="invalid" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3.
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="image d-block">Workshop Image(400x300px)</label> 
                                                            <br/>
                                                            <div class="custom-file">
                                                               <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image3') is-invalid @enderror  name="image3">
                                                               @error('image3')
                                                               <span class="invalid" role="alert">
                                                               <strong class="text-danger">{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                         </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <label for="alt3">Alt</label>
                                                            <input class="form-control @error('alt3') is-invalid @enderror" id="alt3" name="alt3" type="text" placeholder="Alt" value="{{ old('alt3') }}">
                                                            @error('alt3')
                                                            <span class="invalid" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4.
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <label for="image d-block">Workshop Image (400x350px)</label> 
                                                            <br/>
                                                            <div class="custom-file">
                                                               <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image4') is-invalid @enderror name="image4">
                                                               @error('image4')
                                                               <span class="invalid" role="alert">
                                                               <strong class="text-danger">{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                         </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <label for="alt">Alt</label>
                                                            <input class="form-control @error('alt4') is-invalid @enderror" id="alt4" name="alt4" type="text" placeholder="Alt" value="{{ old('alt4') }}">
                                                            @error('alt4')
                                                            <span class="invalid" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        5.
                                                    </td>
                                                   <td>
                                                        <div class="form-group">
                                                            <label for="image d-block">Workshop Image (400x350px)</label> 
                                                            <br/>
                                                            <div class="custom-file">
                                                               <input type="file" class="custom-file-input" id="inputGroupFile01" @error('image5') is-invalid @enderror name="image5">
                                                               @error('image5')
                                                               <span class="invalid-feedback" role="alert">
                                                               <strong>{{ $message }}</strong>
                                                               </span>
                                                               @enderror
                                                               <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                         </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group mb-2">
                                                            <label for="alt">Alt</label>
                                                            <input class="form-control @error('alt5') is-invalid @enderror" id="alt5" name="alt5" type="text" placeholder="Alt" value="{{ old('alt5') }}">
                                                            @error('alt5')
                                                            <span class="invalid-feedback" role="alert">
                                                            <strong class="text-danger">{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>

                                        <div class="colo-md-12 col-lg-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="about">About Workshop</label>
                                                <textarea class="form-control @error('about') is-invalid @enderror" id="description" name="about" rows="4">{{ old('about') }}</textarea>
                                                @error('about')
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
@endsection

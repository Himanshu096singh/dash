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
                            <h4 class="card-title">Edit Workshop</h4>
                            <a href="{{ route('workshop.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Workshop</a>
                        </div>
                        @php
                            $eid = Crypt::encrypt($workshop->id);
                        @endphp
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('workshop.update', $eid) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name', $workshop->name) }}">
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
                                                <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Slug" value="{{ old('slug', $workshop->slug) }}">
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
                                                <input class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" type="text" placeholder="15 Days" value="{{ old('duration',$workshop->duration) }}">
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
                                                <input class="form-control @error('session') is-invalid @enderror" id="session" name="session" type="text" placeholder="200 Hr" value="{{ old('session',$workshop->session) }}">
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
                                                <input class="form-control @error('onlineprice') is-invalid @enderror" id="onlineprice" name="onlineprice" type="number" min="0" placeholder="299" value="{{ old('onlineprice',$workshop->onlineprice) }}">
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
                                                <input class="form-control @error('inpersonprice') is-invalid @enderror" id="inpersonprice" name="inpersonprice" type="number" min="0" placeholder="399" value="{{ old('inpersonprice',$workshop->inpersonprice) }}">
                                                @error('inpersonprice')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
 
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image d-block">Workshop Image</label> 
                                                <br/>
                                                <img src="{{ asset($workshop->image) }}" class="img-fluid rounded-top" alt="{{ $workshop->item }}" width="100">

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
                                                <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="Alt" value="{{ old('alt', $workshop->alt ) }}">
                                                @error('alt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="colo-md-12 col-lg-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="about">About</label>
                                                <textarea class="form-control @error('about') is-invalid @enderror" id="description" name="about" rows="4">{{ old('about', $workshop->about) }}</textarea>
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
                                                <input class="form-control @error('metatitle') is-invalid @enderror" id="metatitle" name="metatitle" type="text" placeholder="Meta Title" value="{{ old('metatitle', $workshop->metatitle) }}">
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
                                                <input class="form-control @error('metakeyword') is-invalid @enderror" id="metakeyword" name="metakeyword" type="text" placeholder="Meta Keyword" value="{{ old('metakeyword', $workshop->metakeywords) }}">
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
                                                <textarea class="form-control @error('metadescription') is-invalid @enderror" id="metadescription" name="metadescription" rows="4" placeholder="Meta Description">{{ old('metadescription', $workshop->metadescription) }}</textarea>
                                                @error('metadescription')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
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
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Modules</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('workshop.modules') }}">
                                    @csrf
                                    <input type="hidden" name="workshopid" value="{{ $eid }}">
                                    @foreach($workshop->modules as $modules)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="heading">Heading</label>
                                                    <input class="form-control" id="heading" name="heading[]" placeholder="Heading" required="" type="text" value="{{ $modules->question }}">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="comment">Description</label>
                                                    <textarea class="form-control summernote" id="comment" name="comment[]" placeholder="Description" required="">{{ $modules->answer }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger mt-4" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newccRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="addccRow" class="btn btn-primary mr-2" value="Add Modules">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{--    
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Inclusion</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.inclusion') }}">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    @foreach($course->inclusion as $inclusion)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="mb-2">
                                                    <input class="form-control" id="inclusion" name="inclusion[]" placeholder="Inclusion" required="" type="text" value="{{ $inclusion->inclusion}}">
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newincRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="addincRow" class="btn btn-primary mr-2" value="+ Add Inclusion">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Course Dates</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.dates') }}">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    @foreach($course->dates as $date)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label col-form-label" for="time">Dates</label>
                                                        <input class="form-control" id="date" name="date[]" placeholder="01 Jan - 25 Jan" required="" type="text" value="{{ $date->date }}">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-label col-form-label" for="seat">Available Seat</label>
                                                        <input class="form-control" id="seat" name="seat[]" placeholder="5 Seat" required="" type="text" value="{{ $date->seats }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger mt-4" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newdateRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="adddateRow" class="btn btn-primary mr-2" value="+ Add Date">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Time Schedule</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.schedule') }}">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    @foreach($course->schdule as $schdule)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label class="form-label col-form-label" for="time">Time</label>
                                                        <input class="form-control" id="time" name="time[]" placeholder="06:00 - 07:30" required="" type="text" value="{{ $schdule->time }}">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label class="form-label col-form-label" for="task">Task</label>
                                                        <input class="form-control" id="task" name="task[]" placeholder="Task" required="" type="text" value="{{ $schdule->task }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger mt-4" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newtimeRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="addtimeRow" class="btn btn-primary mr-2" value="+ Add Task">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Testimonial</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.testimonial') }}">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    @foreach($course->Testimonial as $testimonial)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="name">Name</label>
                                                    <input class="form-control" id="name" name="name[]" placeholder="name" required="" type="text" value="{{ $testimonial->name }}">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="review">Review</label>
                                                    <textarea class="form-control" id="review" name="review[]" placeholder="Review" required="">{{ $testimonial->review }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger mt-4" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newtestimonialRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="addtestimonialRow" class="btn btn-primary mr-2" value="+ Add Testimonial">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Faqs</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('course.faq') }}">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    @foreach($course->faqs as $faqs)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="question">Question.</label>
                                                    <input class="form-control" id="question" name="question[]" placeholder="Question" required="" type="text" value="{{ $faqs->question }}">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="answer">Answer.</label>
                                                    <textarea class="form-control" id="answer" name="answer[]" placeholder="Answer" required="">{{ $faqs->answer }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <div class="form-check">
                                                    <input class="btn btn-danger mt-4" id="removeRow" type="button" value="x">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     @endforeach
                                    <div id="newRow"></div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <input type="button" id="addRow" class="btn btn-primary mr-2" value="+ Add Faqs">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header alert alert-warning pb-2">
                            <h4 class="card-title">Add Top Media Images</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-center m-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Alt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($course->media as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" width="100">
                                                </td>
                                                <td>{{ $item->alt }}</td>
                                                @php
                                                    $mid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td class="inlinebtn">
                                                    <a href="{{ route('course.media.edit', $mid) }}" class="btn btn-info btn ml-1"><i class="ft-edit"></i></a>
                                                    @if(Auth::check() && Auth::user()->role_id == 1)
                                                    <form action="{{ route('course.media.destroy',$mid) }}" method="post" class="ml-1">
                                                        @csrf
                                                        <input type="hidden" value="{{$mid}}" name="id">
                                                       <button class="btn btn-danger" type="submit" onclick="return DeleteConfirmation();"><i class="ft-trash-2"></i></button>
                                                    </form>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <form method="post" action="{{ route('course.media') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="courseId" value="{{ $eid }}">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01" @error('media') is-invalid @enderror  name="media[]" multiple>
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">
                                                <i class="ft-check-square mr-1"></i>Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    --}}
    </div>
</div>
@endsection
@section('js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        })
    </script>
    <script type="text/javascript">
        $("#addincRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="mb-2"><input class="form-control" id="inclusion" name="inclusion[]" placeholder="Inclusion" required="" type="text"></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newincRow').append(html);
        });

        $("#addtimeRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="row"><div class="col-md-4"><label class="form-label col-form-label" for="time">Time</label><input class="form-control" id="time" name="time[]" placeholder="06-07:30" required="" type="text"></div><div class="col-md-8"><label class="form-label col-form-label" for="task">Task.</label><input class="form-control" id="task" name="task[]" placeholder="Task" type="text" required=""></div></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newtimeRow').append(html);
        });

        $("#adddateRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="row"><div class="col-md-4"><label class="form-label col-form-label" for="date">Date</label><input class="form-control" id="date" name="date[]" placeholder="01 Jan - 25 Jan" required="" type="text"></div><div class="col-md-8"><label class="form-label col-form-label" for="seat">Seat</label><input class="form-control" id="seat" name="seat[]" placeholder="5 Seat" type="text" required=""></div></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newdateRow').append(html);
        });

        $("#addRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="mb-2"><label class="form-label col-form-label" for="question">Question.</label><input class="form-control" id="question" name="question[]" placeholder="Question" required="" type="text"></div><div class="mb-2"><label class="form-label col-form-label" for="answer">Answer.</label><textarea class="form-control" id="answer" name="answer[]" placeholder="Answer" required=""></textarea></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newRow').append(html);
            $('.summernote').summernote();
        });

        $("#addccRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="mb-2"><label class="form-label col-form-label" for="heading">Heading</label><input class="form-control" id="heading" name="heading[]" placeholder="Heading" required="" type="text"></div><div class="mb-2"><label class="form-label col-form-label" for="comment">Description.</label><textarea class="form-control summernote" id="comment" name="comment[]" placeholder="" required=""></textarea></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newccRow').append(html);
            $('.summernote').summernote();
        });


        $("#addtestimonialRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="mb-2"><label class="form-label col-form-label" for="name">Name</label><input class="form-control" id="name" name="name[]" placeholder="Name" required="" type="text"></div><div class="mb-2"><label class="form-label col-form-label" for="review">Review</label><textarea class="form-control" id="review" name="review[]" placeholder="" required=""></textarea></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newtestimonialRow').append(html);
            $('.summernote').summernote();
        });


        
        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('.repeatable').remove();
        });
    </script>
@endsection

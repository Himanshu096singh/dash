@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Subcategory
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Subcategory</h4>
                            <a href="{{ route('subcategory.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Subcategory</a>
                        </div>
                        @php
                            $eid = Crypt::encrypt($subcategory->id);
                        @endphp
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('subcategory.update', $eid) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name' , $subcategory->name) }}">
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
                                                <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Slug" value="{{ old('slug', $subcategory->slug) }}">
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group my-3">
                                                <img src="{{ asset($subcategory->image) }}" alt="{{ $subcategory->alt }}" width="100">
                                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01" name="image">
                                                @error('image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="alt">Alt</label>
                                                <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="Alt" value="{{ old('alt', $subcategory->alt) }}">
                                                @error('alt')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div  class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="alt">Category</label>
                                                <select class="select2 form-control select2-hidden-accessible" name="category">
                                                    @foreach ($category as $item)
                                                    <option value={{ $item->id }} {{ $subcategory->category_id== $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="alt">Status</label>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-success @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="active" value="1" {{ $subcategory->status == 1 ? 'checked':'' }}>
                                                    <label for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="inactive"  value="0" {{ $subcategory->status == 0 ? 'checked':'' }}>
                                                    <label for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $subcategory->description) }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="metatitle">Meta Title</label>
                                                <input class="form-control @error('metatitle') is-invalid @enderror" id="metatitle" name="metatitle" type="text" placeholder="Meta Title" value="{{ old('metatitle', $subcategory->metatitle) }}">
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
                                                <input class="form-control @error('metakeyword') is-invalid @enderror" id="metakeyword" name="metakeyword" type="text" placeholder="Meta Keyword" value="{{ old('metakeyword', $subcategory->metakeyword) }}">
                                                @error('metakeyword')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="metadescription">Meta Description</label>
                                        <textarea class="form-control @error('metadescription') is-invalid @enderror" id="metadescription" name="metadescription" rows="4" placeholder="Meta Description">{{ old('metadescription', $subcategory->metadescription) }}</textarea>
                                        @error('metadescription')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary mr-2" type="submit">
                                        <i class="ft-check-square mr-1"></i>Save
                                    </button> 
                                    <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                        <i class="ft-x mr-1"></i>Back
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height my-5">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Faqs</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('subcategory.faq') }}">
                                    @csrf
                                    <input type="hidden" name="subcategory_id" value="{{ $eid }}">
                                    @foreach($subcategory->faq as $key => $item)
                                    <div class="repeatable mb-3">
                                		<div class="row">
                                			<div class="col-md-11">
                                				<div class="mb-2">
                                					<label class="form-label col-form-label" for="question">Question.</label>
                                					<input class="form-control" id="question" name="question[]" placeholder="Question" required="" type="text" value="{{ $item->question }}">
                                				</div>
                                				<div class="mb-2">
                                					<label class="form-label col-form-label" for="answer">Answer.</label>
                                					<textarea class="form-control summernote" id="answer" name="answer[]" placeholder="Answer" required="">{{ $item->answer }}</textarea>
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
                                            <input type="button" id="addRow" class="btn btn-info mr-2" value="Add Faqs">
                                            <button class="btn btn-primary" type="submit">
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
        $("#addRow").click(function () {
            var html = '';
            html += '<div class="repeatable mb-3"><div class="row"><div class="col-md-11"><div class="mb-2"><label class="form-label col-form-label" for="question">Question.</label><input class="form-control" id="question" name="question[]" placeholder="Question" required="" type="text"></div><div class="mb-2"><label class="form-label col-form-label" for="answer">Answer.</label><textarea class="form-control summernote" id="answer" name="answer[]" placeholder="Answer" required=""></textarea></div></div><div class="col-md-1"><div class="form-check"><input class="btn btn-danger mt-4" id="removeRow" type="button" value="x"></div></div></div></div>';
            $('#newRow').append(html);
            $('.summernote').summernote();
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('.repeatable').remove();
        });
    </script>
@stop

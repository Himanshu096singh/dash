@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Blog
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Blog</h4>
                            <a href="{{ route('blog.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Blog</a>
                        </div>
                        @php
                            $eid = Crypt::encrypt($blog->id);
                        @endphp
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('blog.update', $eid) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name', $blog->name) }}">
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
                                                <input class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" type="text" placeholder="Slug" value="{{ old('slug', $blog->slug) }}">
                                                @error('slug')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="image d-block">Blog Image</label> 
                                                <br/>
                                                <img src="{{ asset($blog->image) }}" class="img-fluid rounded-top" alt="{{ $blog->item }}" width="100">

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
                                                <input class="form-control @error('alt') is-invalid @enderror" id="alt" name="alt" type="text" placeholder="Alt" value="{{ old('alt', $blog->alt ) }}">
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
                                                    <input type="radio" name="status" id="active" value="1" {{ old('status', $blog->status) == 1 ? 'checked':'' }}>
                                                    <label for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="inactive"  value="0" {{ old('status', $blog->status) == 0 ? 'checked':'' }}>
                                                    <label for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="colo-md-12 col-lg-12 col-12">
                                            <div class="form-group mb-2">
                                                <label for="description">Description</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $blog->description) }}</textarea>
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
                                                <input class="form-control @error('metatitle') is-invalid @enderror" id="metatitle" name="metatitle" type="text" placeholder="Meta Title" value="{{ old('metatitle', $blog->metatitle) }}">
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
                                                <input class="form-control @error('metakeyword') is-invalid @enderror" id="metakeyword" name="metakeyword" type="text" placeholder="Meta Keyword" value="{{ old('metakeyword', $blog->metakeyword) }}">
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
                                                <textarea class="form-control @error('metadescription') is-invalid @enderror" id="metadescription" name="metadescription" rows="4" placeholder="Meta Description">{{ old('metadescription', $blog->metadescription) }}</textarea>
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
        @if(count($blog->comment) > 0)
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height my-5">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Comment List</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Comment</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blog->comment as $key => $list)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->email }}</td>
                                                <td>
                                                    @if($list->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ Str::limit($list->comment, 200) }}
                                                </td>
                                                <td>{{ $list->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($list->id);
                                                @endphp
                                                <td>
                                                    <a href="{{ route('comment.edit', $eid) }}" class="btn btn-info btn"><i class="ft-edit"></i></a>
                                                    <form action="{{ route('comment.destroy',$eid) }}" method="post" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" onclick="return DeleteConfirmation();"><i class="ft-trash-2"></i></button>
                                                    </form>
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
            </div>
        </section>
        @endif
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Faqs</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('blog.faq') }}">
                                    @csrf
                                    <input type="hidden" name="blogId" value="{{ $eid }}">
                                    @foreach($blog->faqs as $faqs)
                                    <div class="repeatable mb-3">
                                        <div class="row">
                                            <div class="col-md-11">
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="question">Question.</label>
                                                    <input class="form-control" id="question" name="question[]" placeholder="Question" required="" type="text" value="{{ $faqs->question }}">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label col-form-label" for="answer">Answer.</label>
                                                    <textarea class="form-control summernote" id="answer" name="answer[]" placeholder="Answer" required="">{{ $faqs->answer }}</textarea>
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
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $(".select2").select2({
                theme: "classic",
            });
            // $('#categoryId').on("change",function () {
            $('body').on('change', '#categoryId', function (e) {
                $('#subcategoryId option').removeAttr("selected");
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                var catId = $('#categoryId').val();
                var blog_Id = '{{ $blog->id }}';
                var subCatId = '{{ $blog->subcategory_id }}';
                // console.log("Test "+blog_Id);
                $.ajax({
                    url: "{{ route('blog.ajax') }}",
                    type: "POST",
                    data: {catId:catId, blog_Id:blog_Id, subCatId:subCatId},
                    success:function (response) {
                        // console.log(response);
                        $('#subcategoryId').html(response);
                    },
                });
            });
        });
    </script>
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
@endsection

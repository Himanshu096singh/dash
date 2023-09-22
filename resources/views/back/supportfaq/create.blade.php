@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Supportfaqs
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Supportfaqs</h4>
                            <a href="{{ route('supportfaq.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-plus-square"></i> View Supportfaq</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('supportfaq.store') }}">
                                    @csrf
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
@endsection

@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Error
                </div>
            </div>
        </div>
        <section id="basic-hidden-label-form-layouts">
            <div class="row match-height">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Error</h4>
                            <a href="{{ route('error.index') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-eye"></i> View Error</a>
                        </div>
                        @php
                            $eid = Crypt::encrypt($error->id);
                        @endphp
                        <div class="card-content">
                            <div class="card-body">
                                <form method="post" action="{{ route('error.update', $eid) }}">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Name" value="{{ old('name', $error->name) }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="name">Category</label>
                                                <select name="category" class="select2 form-control">
                                                    @foreach ($category as $item)
                                                        <option value="{{ $item->id }}" {{ old('category', $error->category_id) == $item->id ? 'selected':'' }}>{{ $item->name }}</option>
                                                    @endforeach
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
                                                <div class="radio radio-success @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="active" value="1" {{ old('status', $error->status) == 1 ? 'checked':'' }}>
                                                    <label for="active">Active</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-2">
                                                <div class="radio radio-danger @error('status') is-invalid @enderror">
                                                    <input type="radio" name="status" id="inactive"  value="0" {{ old('status', $error->status) == 0 ? 'checked':'' }}>
                                                    <label for="inactive">Inactive</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label for="description">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4">{{ old('description', $error->description) }}</textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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

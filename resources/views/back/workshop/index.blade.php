@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Course
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Course List</h4>
                            <a href="{{ route('course.create') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-plus-square"></i> Add New Record</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($course as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    {{ $item->name }}
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->image }}" width="100">
                                                </td>
                                                <td>
                                                    @if($item->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td class="inlinebtn">
                                                    @if($item->status == 1)
                                                    @isset($item->category->slug)
                                                        <a href="{{ url($item->category->slug.'/'.$item->slug) }}" target="_blank" class="btn btn-warning btn"><i class="ft-eye"></i></a>
                                                    @endisset
                                                    @endif
                                                    <a href="{{ route('course.edit', $eid) }}" class="btn btn-info btn ml-1"><i class="ft-edit"></i></a>
                                                    @if(Auth::check() && Auth::user()->role_id == 1)
                                                    <form action="{{ route('course.destroy',$eid) }}" method="post" class="ml-1">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" onclick="return DeleteConfirmation();"><i class="ft-trash-2"></i></button>
                                                    </form>
                                                    @endif
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
    </div>
</div>
@endsection

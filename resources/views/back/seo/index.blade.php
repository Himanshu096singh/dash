@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Seo
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Seo List</h4>
                            <a href="{{ route('seo.create') }}" class="btn gradient-purple-bliss shadow-z-1-hover float-right"><i class="ft-plus-square"></i> Add New Record</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($seo as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>{{ Str::title($item->name) }}</td>
                                                
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td>
                                                    <a href="{{ route('seo.edit', $eid) }}" class="btn btn-info btn"><i class="ft-edit"></i></a>
                                                    <form action="{{ route('seo.destroy',$eid) }}" method="post" class="d-inline">
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
    </div>
</div>
@endsection

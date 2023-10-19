@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Enquiry Forms
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Forms List</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Enquiry Type</th>
                                                <th>Service</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($enquiry as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    <b>Name: </b>{{ $item->name }}
                                                    <br>
                                                    <b>Email: </b>{{ $item->email }}
                                                </td>
                                                <td>
                                                    <b>Country: </b>{{ $item->country }}
                                                    <br>
                                                    <b>Number: </b>{{ $item->phone }}
                                                </td>
                                                <td>
                                                    @if($item->type==0)
                                                        <span class="badge badge-info">Course</span>
                                                    @else
                                                        <span class="badge badge-success">Workshop</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $item->course }}
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td>
                                                    <a href="{{ route('enquiry.show', $eid) }}" class="btn btn-info btn"><i class="ft-eye"></i></a>
                                                    
                                                   <form action="{{ route('enquiry.destroy',$eid) }}" method="post" class="d-inline">
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

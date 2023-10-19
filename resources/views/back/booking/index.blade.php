@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Booking
                </div>
            </div>
        </div>
        <section id="dom">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Booking List</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="myTable" class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Course</th>
                                                <th>Phone</th>
                                                <th>Amount</th>
                                                <th>Payment Mode</th>
                                                <th>Payment Method</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($booking as $key => $item)
                                            <tr>
                                                <td>{{ $key+1 }}</td>
                                                <td>
                                                    {{ ucwords($item->name) }}
                                                <td>
                                                    {{ $item->course->name }}
                                                </td>
                                                <td>
                                                    {{ $item->phone }}
                                                </td>
                                                <td>
                                                    {{ $item->price }}
                                                </td>
                                                <td>
                                                    @if($item->paymentmode == 0)
                                                        <span class="badge badge-info">Full</span>
                                                    @elseif($item->status == 1)
                                                        <span class="badge badge-primary">Partial</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->paymentmode == 0)
                                                        <span class="badge badge-info">Paypal</span>
                                                    @elseif($item->status == 1)
                                                        <span class="badge badge-primary">Razorpay</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($item->status == 0)
                                                        <span class="badge badge-default">Pending</span>
                                                    @elseif($item->status == 1)
                                                        <span class="badge badge-success">Paid</span>
                                                    @elseif($item->status == 2)
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @endif
                                                </td>
                                                <td>{{ $item->created_at }}</td>
                                                @php
                                                    $eid = Crypt::encrypt($item->id);
                                                @endphp
                                                <td class="inlinebtn">
                                                    <a href="{{ route('bookingform.edit', $eid) }}" class="btn btn-info btn ml-1"><i class="ft-edit"></i></a>
                                                    @if(Auth::check() && Auth::user()->role_id == 1)
                                                        <form action="{{ route('bookingform.destroy',$eid) }}" method="post" class="ml-1">
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

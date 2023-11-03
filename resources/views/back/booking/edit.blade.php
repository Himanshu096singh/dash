@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper"><!-- Invoice template starts -->
<div class="row">
<div class="col-12">
<div class="content-header">Invoice</div>
</div>
</div>
<section class="invoice-template">
<div class="row">
<div class="col-12">
<div class="card">
  <div class="card-content p-3">
    <div id="invoice-template" class="card-body pb-0">
      <!-- Invoice Company Details starts -->
      <div id="invoice-company-details" class="row">
        <div class="col-md-6 col-12">
          <div class="media">
            <img src="http://localhost:8000/upload/setting/6525167c68d8blogo.png" alt="logo" width="80">
            <div class="media-body ml-4">
              <ul class="m-0 list-unstyled">
                <li class="text-bold-800">Heart Of Yoga</li>
                <li>Rishikesh, Uttrakhand</li>
                <li>India</li>
              </ul>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-12 text-right">
          <h2 class="primary text-uppercase">Invoice</h2>
          <p class="pb-3"># {{$booking->orders->book_id}}</p>
            @php
                $room = $booking->room;
            @endphp
            @if($booking->paymentmode==1)
              <ul class="px-0 list-unstyled">
                <li>Balance Due</li>
                <li class="font-medium-2 text-bold-700">${{number_format($booking->course->$room - $booking->price,2)}}
                </ul>
            @endif
        </div>
      </div>
      <!-- Invoice Company Details ends -->
      <!-- Invoice Customer Details starts -->
      <div id="invoice-customer-details" class="row">
        <div class="col-12 text-left">
          <p class="text-muted mb-1">Bill To</p>
        </div>
        <div class="col-md-6 col-12">
          <ul class="m-0 list-unstyled">
            <li class="text-bold-800">{{$booking->name}}</li>
            <li>Email: {{$booking->email}}</li>
            <li>Phone: {{$booking->phone}}</li>
            <li>{{$booking->country}}</li>
          </ul>
        </div>
        <div class="col-md-6 col-12 text-right">
          <p><span class="text-muted">Invoice Date :</span> {{ $booking->created_at->format('d/m/Y') }}</p>
<div class=""></div>        </div>
      </div>
      <!-- Invoice Customer Details ends -->
      <!-- Invoice Items Details starts -->
      <div id="invoice-items-details">
        <div class="row">
          <div class="table-responsive col-12">
            <table class="table mt-3">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Course</th>
                  <th>Date</th>
                  <th class="text-right">Price</th>
                  <th class="text-right">Payment Mode</th>
                  <th class="text-right">Amount Paid</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <p>{{$booking->course->name}}</p>
                  </td>
                  <td>
                    <p>{{$booking->date}}</p>
                  </td>
                  <td class="text-right">
                    @php
                        $room = $booking->room;
                    @endphp
                    ${{number_format($booking->course->$room,2)}} USD</td>
                    <td class="text-right">
                        @if($booking->paymentmode == 0)
                            Full Payment
                        @else
                            Advance Payment
                        @endif
                    </td>
                  <td class="text-right">${{number_format($booking->price,2)}} USD</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        <div class="row mt-3 mt-md-0">
          <div class="col-md-6 col-12 text-left">
            <p class="text-bold-700 mb-1 ml-1">Payment Methods:
                 @if($booking->paymentmode == 0)
                    <span class="badge badge-info">Paypal</span>
                @elseif($booking->status == 1)
                    <span class="badge badge-primary">Razorpay</span>
                @endif
            </p>

          </div>
          <div class="col-md-6 col-12">
            <p class="text-bold-700 mb-2 ml-4">Total due</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  
                  <tr>
                    <td class="text-bold-800">Total</td>
                    <td class="text-bold-800 text-right">${{number_format($booking->course->$room,2)}} USD</td>
                  </tr>
                  @if($booking->paymentmode == 1)
                    <tr>
                        <td>Payment Mode (Advance)</td>
                        <td class="danger text-right">(-) ${{number_format($booking->price,2)}} USD</td>
                    </tr>
                    <tr class="text-bold-500">
                        <td>Balance Due</td>
                        <td class="text-right">${{number_format($booking->course->$room - $booking->price,2)}} </td>
                    </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Invoice Items Details ends -->
      <!-- Invoice Footer starts -->
      <div id="invoice-footer">
        <div class="row mt-2 mt-sm-0">
          <div class="col-md-6 col-12 d-flex align-items-center">
            <div class="terms-conditions mb-2">
              <h6>Terms &amp; Condition</h6>
              <p>You know, being a test pilot isn't always the healthiest business in the world. We predict too much for the next year and yet far too little for the next 10.</p>
            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="signature text-center">
              <p>Authorized person</p>
              <h6 class="mt-4">John Doe</h6>
              <p class="text-muted">Managing Director</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center text-sm-right">
            <button type="button" class="btn btn-primary btn-print mt-2 mt-md-1"><i class="ft-printer mr-1"></i>Print Invoice</button>
          </div>
        </div>
      </div>
      <!-- Invoice Footer ends -->
    </div>
  </div>
</div>
</div>
</div>
</section>
<!-- Invoice template ends -->

    </div>
  <div></div></div>
@endsection
@section('js')
  
@endsection

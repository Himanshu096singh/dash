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
            <img src="../app-assets/img/logos/logo-color-big.png" alt="company logo" width="80" height="80">
            <div class="media-body ml-4">
              <ul class="m-0 list-unstyled">
                <li class="text-bold-800">Pixinvent Creative Studio</li>
                <li>4025 Oak Avenue, Melbourne,</li>
                <li>Florida 32940, USA</li>
              </ul>
            </div>
          </div>

        </div>
        <div class="col-md-6 col-12 text-right">
          <h2 class="primary text-uppercase">Invoice</h2>
          <p class="pb-3"># INV-001001</p>
          <ul class="px-0 list-unstyled">
            <li>Balance Due</li>
            <li class="font-medium-2 text-bold-700">$12,000.00</li>
          </ul>
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
            <li class="text-bold-800">Mr. Bret Lezama</li>
            <li>4879 Westfall Avenue,</li>
            <li>Albuquerque,</li>
            <li>New Mexico-87102.</li>
          </ul>
        </div>
        <div class="col-md-6 col-12 text-right">
          <p><span class="text-muted">Invoice Date :</span> 06/05/2016</p>
          <p><span class="text-muted">Terms :</span> Due on Receipt</p>
          <p class="m-0"><span class="text-muted">Due Date :</span> 10/05/2016</p>
        </div>
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
                  <th class="text-right">Price</th>
                  <th class="text-right">Payment Mode</th>
                  <th class="text-right">Amount</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>
                    <p>{{$booking->course->name}}</p>
                  </td>
                  <td class="text-right">
                    @php
                        $room = $booking->room;
                    @endphp
                    $ {{$booking->course->$room}} USD</td>
                    <td class="text-right">
                        @if($booking->paymentmode == 0)
                            Full Payment
                        @else
                            Advance Payment
                        @endif
                    </td>
                  <td class="text-right">$ {{$booking->price}} USD</td>
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
                    <td class="text-bold-800 text-right"> $ {{$booking->course->$room}}</td>
                  </tr>
                  @if($booking->paymentmode == 1)
                    <tr>
                        <td>Payment Mode (Advance)</td>
                        <td class="danger text-right">(-) ${{$booking->price}}</td>
                    </tr>
                    <tr class="text-bold-500">
                        <td>Balance Due</td>
                        <td class="text-right">${{$booking->course->$room - $booking->price}}</td>
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
              <img src="../app-assets/img/pages/signature-scan.png" alt="signature" width="250">
              <h6 class="mt-4">Amanda Orton</h6>
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

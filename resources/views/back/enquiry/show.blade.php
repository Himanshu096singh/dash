@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Enquiry
                </div>
            </div>
        </div>
        <section id="bordered-table">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">{{$enquiry->name}}'s Enquiry : 
                      @if($enquiry->type==0)
                      <span class="badge badge-info">Course</span>
                  @else
                      <span class="badge badge-success">Workshop</span>
                  @endif</h4>
                    <h5 class="badge badge-danger"> Date: {{$enquiry->created_at->format('M, d Y')}} </h5>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-bordered">
                           <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{$enquiry->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{$enquiry->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Country</th>
                                    <td>{{$enquiry->country}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone No.</th>
                                    <td>{{$enquiry->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{$enquiry->type == 0 ? 'Course' : 'Workshop'}}</th>
                                    <td>{{$enquiry->course}}</td>
                                </tr>
                                <tr>

                                    <th scope="row">Gender</th>
                                    <td>{{$enquiry->gender}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">{{$enquiry->type == 0 ? 'Room Type' : 'Attend'}} </th>
                                    <td>{{$enquiry->room}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Message</th>
                                    <td>{{$enquiry->message}}</td>
                                </tr>
                            
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

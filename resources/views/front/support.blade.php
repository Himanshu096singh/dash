@extends('layouts.front')
@section('css')
@endsection

@section('content')

<div class="sp_container sp_container_hp bg-image bg-overlay">
    <div class="row">
        <div class="col-md-7">
            <div class="p-3">
                <div class="mb-4">
                    <h1 class="fs-2 text-light mb-4 font-weight-bold " style="font-weight:500;margin-bottom:10px !important">
                    Ask our Available EXPERTS
                    </h1>
                    <h5 class="text-light">Start Instant Chat 24/7</h5>
                </div>
                <ul class="text-light fs-6">
                    <li class="text-white">
                        Ask any technical questions, No Prepayment Required.
                    </li>
                    <li class="text-white">
                        Get your Issue fixed.
                    </li>
                    <li class="text-white">
                        No Charges unless you purchase services of subscription.
                    </li>
                    <li class="text-white">
                        Online assistance Available 24/7.
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-5 d-none d-md-block">
            <div style="box-shadow: 0px 0px 11px #ffffff;border: 1px solid #ffffff;" class="mt-3">
                <div class="d-flex align-items-center p-3 bg-support-sec" style="border: 1px solid #ffffff;border-bottom: 1px solid #ffffff00;">
                   <img src="https://printertales.com/public/upload/image/644123f7252ae_customer-support.png" alt="Printer Support" width="80px" class="rounded-circle me-4 agentimg" >
                    <div>
                        <p class="mb-0 fs-5 fw-bold text-light">Alex M.</p>
                        <p class="text-light fsize-14">Expert, 8 years of experience helping people like you</p>
                    </div>
                   
                </div>
                <iframe style="border-radius:0px 0px 15px 15px;background: #f3f3f3;padding: 4px 6px;" class="" src="{{$code->tawktourl}}" width="100%" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
                <div class="p-2">
                    <h6 class="text-danger">3 EXPERTS are available to chat</h6>
                    <p><i>Start typing above and press Enter to connect with them.</i></p>
                </div>
            </div>
            <span id="fp_tooltip" class="fp_tooltip">Describe your issue here.</span>
        </div>
    </div>
</div>
<div class="row ">
    <div class="p-3 py-3 d-sm-block d-md-none">
        <div style="box-shadow: 0px 0px 11px #ffffff;border: 1px solid #ffffff;" class="mt-3">
            <div class="d-flex align-items-center p-3 bg-support-sec" style="border: 1px solid #ffffff;border-bottom: 1px solid #ffffff00;">
               <img src="https://printertales.com/public/upload/image/644123f7252ae_customer-support.png" alt="Printer Support" width="80px" class="rounded-circle me-4 agentimg" >
                <div>
                    <p class="mb-0 fs-5 fw-bold text-light">Alex M.</p>
                    <p class="text-light fsize-14">Expert, 8 years of experience helping people like you</p>
                </div>
               
            </div>
            <iframe style="border-radius:0px 0px 15px 15px" class="" src="{{$code->tawktourl}}" width="100%" height="550px" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            <div class="p-2">
                <h6 class="text-danger">3 EXPERTS are available to chat</h6>
                <p><i>Start typing above and press Enter to connect with them.</i></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-7 p-3 py-3 ">
        <div class="row text-center">
            <h2 class="h3 mb-3"> Frequently Asked Questions </h2>
        </div>
        <div class="accordion" id="accordionExample">
            @foreach($supportfaq as $index=>$list)
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading{{$index}}">
                <button class="accordion-button {{ $index==0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$index}}"
                  aria-expanded="{{ $index==0 ? 'true' : 'false' }}" aria-controls="collapse{{$index}}">
                  {{ $list->question }}
                </button>
              </h2>
              <div id="collapse{{$index}}" class="accordion-collapse collapse {{ $index==0 ? 'show' : '' }}" aria-labelledby="heading{{$index}}"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  {!! $list->answer !!}
                </div>
              </div>
            </div>
            @endforeach
           
          </div>
    </div>
    
</div>

@endsection

@section('js')
@endsection


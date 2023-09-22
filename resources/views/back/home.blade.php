@extends('layouts.back')
@section('content')
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="content-header">
                    Dashboard
                </div>
            </div>
        </div>
        <section id="dom">
    		<div class="row">
    			<div class="col-12">
    				<div class="card">
    					<div class="card-header"></div>
    					<div class="card-content">
    						<div class="card-body">
    							<div class="col-xl-3 col-lg-6 col-12">
    								<div class="card card-inverse bg-success">
    									<div class="card-header">
    										<h4 class="text-white">Fix Issue</h4>
    									</div>
    									<div class="card-content">
    										<div class="card-body">
    											<div class="media">
    												<div class="media-body text-left">
    													<h3 class="card-text">{{ $fixissue }}</h3><a href="{{ route('fixissue') }}"><span>View</span></a>
    												</div>
    												<div class="media-right align-self-center">
    													<i class="ft-user font-large-2 float-right"></i>
    												</div>
    											</div>
    										</div>
    									</div>
    								</div>
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

<div class="sidebar p-md-5 p-3 ps-md-0">
    <div class="side_advertisment mb-4 text-center">
        <a href="{{route('support')}}" title="Download Printer Driver">
            <img src="{{asset('assets/images/download-driver.png')}}" alt="download printer driver" class="img-fluid">
        </a>
    </div>
    
    <div class="recent_block">
      <div class="sidebar_head mb-4">
        <h3 class="h5 text-center"> Top Blogs</h3>
      </div>
        <ul class="list-unstyled">
            @foreach($latestblog as $list)
                <li> 
                  <a class="text-decoration-none" href="{{url($list->category->slug.'/'.$list->slug)}}" title="{{$list->name}}">  {{$list->name}}  </a>
                </li>
            @endforeach
         </ul>
    </div>

    <div class="brand_block">
      <div class="sidebar_head mb-4">
        <h3 class="h5 text-center"> Top Brands</h3>
      </div>
      <ul class="list-unstyled list-inline">
            @foreach($categories as $list)
                <li class="list-inline-item"> 
                  <a class="text-decoration-none fs-6 badge rounded-pill bg-{{$list->slug}}" href="{{url($list->slug)}}">  {{$list->name}} </a>
                </li>
            @endforeach
      </ul>
    </div>

    <div class="disclaimer_block">
      <hr>
      <p class="fs-14">{{$setting->disclaimer}}</p>
    </div>

</div>
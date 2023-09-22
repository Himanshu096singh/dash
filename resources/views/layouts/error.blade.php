<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="{{asset($setting->fevicon)}}">
        <title>Page Not Found</title>
      
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow"/>
        <meta name="bingbot" content="noindex, nofollow"/>
  
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link  rel="stylesheet" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" >
        <meta name="csrf-token" content="{{ csrf_token() }}">
    @section('css')
    @show
    <style>
        .cancel_search{margin: 0px 10px;background: #d30000;width: 23px;height: 23px;border-radius: 50% !important;;color: white;position: absolute;right: -36px;z-index: 99;top: -18px;}
    </style>
    
   </head>
   <body class="custom-background">

        <div class="bg-light container">
            <div class="row p-3 px-5">
                <div class="col-md-10">
                    <a href="{{route('home')}}">
                        <img src="{{asset($setting->logo)}}" alt="{{$setting->logoalt}}" />
                    </a>
                </div>
                <div class="col-md-2 text-end">
                    <i class="searchbtn fas fa-search p-3 bg-hp text-light rounded"></i>
                </div>
                
            </div>
            <div class="search d-none">
                <div class="text-center p-4 pb-2 px-5 mx-3">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control p-3" placeholder="Search Here..." aria-label="search" aria-describedby="button-addon2">
                      <button class="btn btn-primary btn-outline-secondary px-5 text-white" type="button" id="button-addon2">Search</button>
                      <span class="cancel_search">x</span>
                    </div>
                </div>
            </div>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5" >
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link text-white" href="{{route('home')}}"><i class="fas fa-home text-white"></i> <span class="d-block d-sm-none"> HOME </span> </a>
                        </li>
                        @foreach($mainCategory as $list)
                            <li class="nav-item active text-uppercase">
                              <a class="nav-link {{Route::is('single') ? 'active':''}}" href="{{url($list->slug)}}">{{$list->name}} </a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link {{Route::is('support') ? 'active':''}} text-uppercase" href="{{route('support')}}">Support </a>
                        </li>
                      </ul>
                    </div>
                </nav>
            </header>
        @yield('content')
        <footer>
            <div class="row">
               <div class="col-md-12 pt-5 text-center">
                  <div class="footer_menu ">
                     <ul class="list-inline">
                        @foreach($staticpage as $list)
                            <li class="list-inline-item"><a class="text-decoration-none" href="{{url($list->slug)}}">{{$list->name}}</a></li>
                        @endforeach
                     </ul>
                     <hr/>
                  </div>
                  <p> Copyright © {{date('Y')}}. Powered by <a href="{{route('home')}}" class="text-decoration-none">{{$setting->name}}</a>  </p>
               </div>
            </div>
         </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="assets/js/script.js" async defer></script>
    @section('js')
    @show
    <script>
        const search = document.getElementsByClassName("search")[0]
        const searchbtn = document.getElementsByClassName("searchbtn")[0]
        const cancel = document.getElementsByClassName("cancel_search")[0]
        
        searchbtn.onclick = function(){
            search.classList.remove("d-none")
            search.classList.add("d-block")
        } 
        cancel.onclick = function(){
            search.classList.add("d-none")
        } 
        console.log(cancel)
    </script>
   </body>
   

</html>

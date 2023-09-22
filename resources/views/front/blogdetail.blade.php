@extends('layouts.front')
@section('css')
    <style>
        div#toc li a:hover {color: black !important;}
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-md-9">
          <div class="main-content p-3 p-md-5 pb-md-2 m-md-1">
             <div class="blog_single mb-4">
                <div class="blog_title mb-5">
                    <div class="blog_breadcrumb text-center">
                        <ul class="list-inline" vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li class="list-inline-item text-dark" property="itemListElement" typeof="ListItem">
                                <a href="{{route('home')}}" class="text-decoration-none" property="item" typeof="WebPage"> <span property="name">Home</span> </a>
                                <meta property="position" content="1">
                            </li>
                            <li class="list-inline-item" property="itemListElement" typeof="ListItem">
                                <a href="{{url($category->slug)}}" class="text-decoration-none" property="item" typeof="WebPage"><span property="name"> {{$category->name}} </span></a>
                                <meta property="position" content="2">
                            </li>
                            <li class="list-inline-item" property="itemListElement" typeof="ListItem">
                                 <a href="#" property="item" class="text-decoration-none" typeof="WebPage">  <span property="name">  {{$blog->name}} </span> </a>
                                <meta property="position" content="3">
                            </li>
                        </ul>
                    </div>
                   <h1 class=" text-center text-dark pb-3">{{$blog->name}}</h1>
                </div>
                <div class="blog_description">
                    <div class="blog_img">
                        <img class="img-fluid pb-3 w-100" src="{{asset($blog->image)}}" alt="{{$blog->alt}}">
                    </div>
                    <div class="toc m-3 p-3 mx-0 rounded shadow-sm" >
                      <div class="toc-head mb-3"> 
                         <h5 class="h6"> Table Of Content</h5>
                      </div>
                      <div id="toc" class="toc-body">
                        <ul></ul>
                        </div>
                      <div class="toc-head mb-3"> 
                         <h5 class="h6"> Other Section </h5>
                      </div>
                      <div id="toc" class="toc-body">
                        <ol class="list-unstyled">
                            <li><i class="fas fa-question-circle ps-2"></i> <a class="text-decoration-none text-muted" href="#question-answer"> Question & Answer</a></li>
                            <li><i class="fas fa-comment-dots ps-2"></i><a class="text-decoration-none text-muted" href="#comment-section"> Comment Section</a></li>
                            <li><i class="fas fa-blog ps-2"></i> <a class="text-decoration-none text-muted" href="#next-prevous-posts">Next Previous Posts</a></li>
                        </ol>
                      </div>
                       </div>   
                        <div class="gif_img">
                            <a href="{{route('support')}}">
                                <img class="img-fluid pb-3 cgif" src="{{asset('assets/images/printer-offline-gif-2.gif')}}" alt="Fix your pritner now">
                            </a>
                        </div>
                        <div id="blogDesciption" class="mb-5">
                            {!! $blog->description !!}
                        </div>
                        <div class="gif_img">
                            <a href="{{route('support')}}">
                                <img class="img-fluid pb-3 cgif" src="{{asset('assets/images/printer-offline-gif.gif')}}" alt="Fix your pritner now">
                            </a>
                        </div>
                        @if(count($blog->faqs)>0)
                            <div id="question-answer" class="brand_faqs">
                                <h2> Frequently Asked Questions </h2> 
                                <hr>
                                <div class="">
                                    @foreach($blog->faqs as $list)
                                    <div class="brand_faqs_qa bg-white">
                                        <div class="faqs_question mb-3">
                                            <h6><span class="badge bg-{{$category->slug}}"> Question </span></h6>
                                            <h3>{{$list->question}}</h3>
                                        </div>
                                        <div class="faqs_answer">
                                            {!! $list->answer !!}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                </div>
                <div id="comment-section" class="blog_comments my-5">
                    @if(count($blog->comment)>0)
                        
                            <div class="be-comment-block mt-5">
                        <h3 class="comments-title">Comments ({{count($blog->comment)}})</h3>
                        @foreach($blog->comment as $list)
                        <div class="be-comment">
                            <div class="bg-{{$category->slug}} rounded-circle be-img-comment d-flex justify-content-center align-items-center">	
                                <i class="fas fa-user text-white h6"></i>
                            </div>
                            <div class="be-comment-content">
                                
                                    <span class="be-comment-name">
                                        <a>{{$list->name}}</a>
                                        </span>
                                    <span class="be-comment-time">
                                        <i class="fa fa-clock-o"></i>
                                       {{$list->created_at->format('M d,Y H:i a')}}
                                    </span>
                    
                                <p class="be-comment-text">
                                    {{$list->comment}}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                        
                    @endif
                    <div class="blog-comment-form">
                        @if ($result = Session::get('result'))
                            
                            <div class="alert {{$result['type'] == 'success' ? 'alert-success' : 'alert-danger' }} alert-dismissible fade show" role="alert">
                                <strong class="text-capitalize">{{ $result['type'] }}!</strong> {{ $result['message'] }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <h5>Enter your Comments Here:</h5>
                        <form class="form-block" action="{{route('comment')}}" method="Post">
                            @csrf
                            <input type="hidden" name="blogid" value="{{$blog->id}}">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group pb-2">
                                        <input class="form-input" name="name" value="{{old('name')}}" type="text" placeholder="Your name" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div class="form-group pb-2">
                                        <input class="form-input" name="email" value="{{old('email')}}" type="email" placeholder="Your email" required>
                                    </div>
                                </div>
                                <div class="col-xs-12">									
                                    <div class="form-group pb-2">
                                        <textarea class="form-input" name="comment" placeholder="Your text" required="" >{{old('comment')}}</textarea>
                                    </div>
                                    <div class="form-group pb-2">
                                        <input type="submit" class="btn btn-primary" value="submit">
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div id="next-prevous-posts" class="blog_next_previous ">
                    <div class="row">
                        <div class="col-md-6 py-2 bnp_box">
                            @if($prevblog)
                                <a href="{{url($prevblog->category->slug.'/'.$prevblog->slug)}}" class="text-decoration-none">
                                    <div class="blog_prev text-center p-3">
                                        <h4 class="text-uppercase pb-2"> Previous </h4>
                                        <h5 class="h6">{{$prevblog->name}}</h5>
                                    </div>
                                </a>
                            @endif
                        </div>
                        <div class="col-md-6 py-2 bnp_box">
                            @if($nextblog)
                                <a href="{{url($nextblog->category->slug.'/'.$nextblog->slug)}}" class="text-decoration-none">
                                    <div class="blog_next text-center p-3">
                                        <h4 class="text-uppercase pb-2"> Next </h4>
                                        <h5 class="h6">{{$nextblog->name}}</h5>
                                    </div>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
             </div>
          </div>
        </div>
        <div class="col-md-3">
            @include('front.include.sidebar')
        </div>
    </div>

@endsection

@section('js')
    <script>
        const slugify = (str) => {
          str = str.replace(/^\s+|\s+$/g, ''); // trim leading/trailing white space
          str = str.toLowerCase(); // convert string to lowercase
          str = str.replace(/[^a-z0-9 -]/g, '') // remove any non-alphanumeric characters
                   .replace(/\s+/g, '-') // replace spaces with hyphens
                   .replace(/-+/g, '-'); // remove consecutive hyphens
          return str;
        }
        const desc = document.getElementById('blogDesciption')
        const toc = document.getElementById('toc')
        const tocclass = document.getElementsByClassName('toc')[0]
        const h2 = desc.querySelectorAll('h2')
        
        if(h2.length > 0){
            h2.forEach((item, index)=> {
                let h2_heading = h2[index].innerHTML
                let h2_slug = slugify((h2_heading.trim()))
                console.log(h2_heading)
                console.log()
                h2[index].setAttribute('id',`${h2_slug}`);
                toc.firstElementChild.insertAdjacentHTML('beforeend',`<li><a href="#${h2_slug}" class="text-decoration-none text-muted">${h2_heading.replace(/(<([^>]+)>)/gi, "")}</a></li>`)
            })
        } else {
            tocclass.classList.add('d-none');
        }
        
    
    </script>
@endsection


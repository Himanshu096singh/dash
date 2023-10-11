<div class="sidebar p-3">
   <div class="widget ">
      <h5 class="widget_title">Courses</h5>
      <div class="ccourse border_bottom_dash">
         @foreach($courselist as $clist)
            <div class="ccourse_list p-3 pb-3 mb-3">
               <h6><a href="{{url($clist->slug)}}">{{$clist->name}}</a></h6>
               <div class="c_img mb-2 ">
                  <a href="{{url($clist->slug)}}"><img src="{{asset($clist->image)}}" alt="{{$clist->alt}}" class="overflow-hidden" style="width:100%;border-radius:5px"></a>
               </div>
               <div class="c_course_info d-flex justify-content-between mb-2 px-1">
                  <div>
                     <i class="fa fa-calendar"></i> {{$clist->duration}}
                  </div>
                  <div>
                     <i class="fas fa-dollar-sign"></i> {{$clist->privateroom}}
                  </div>
               </div>
               <a class="btn btn-default rounded-3 d-block p-1" href="{{url($clist->slug)}}" >Course Details</a>
            </div>
         @endforeach
      </div>
   </div>
  <div class="widget widget_recent_post">
      <h5 class="widget_title">Recent Post</h5>
      <ul class="recent_post border_bottom_dash list_none">
         @foreach($recentblog as $list)
            <li>
               <div class="post_footer">
               <div class="post_img">
                     <a href="{{url('blog/'.$list->slug)}}"><img src="{{asset($list->image)}}" alt="{{$list->alt}}"></a>
               </div>
               <div class="post_content">
                     <h6><a href="{{url('blog/'.$list->slug)}}">{{$list->name}}</a></h6>
                     <span class="post_date">{{ $list->created_at->format('M, d Y') }}</span>
               </div>
               </div>
            </li>
         @endforeach
      </ul>
  </div>
</div>
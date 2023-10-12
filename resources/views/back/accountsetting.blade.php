@extends('layouts.back')
@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="row">
           <div class="col-12">
              <div class="content-header">Account Settings</div>
              <p class="content-sub-header mb-1">Configure account settings to your needs.</p>
           </div>
        </div>
        <!-- Account Settings starts -->
        <div class="row">
           <div class="col-md-3 mt-3">
              <!-- Nav tabs -->
              <ul class="nav flex-column nav-pills" id="myTab" role="tablist">
                 <li class="nav-item">
                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general"
                       aria-selected="true">
                    <i class="ft-settings mr-1 align-middle"></i>
                    <span class="align-middle">General</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" id="change-password-tab" data-toggle="tab" href="#change-password" role="tab"
                       aria-controls="change-password" aria-selected="false">
                    <i class="ft-lock mr-1 align-middle"></i>
                    <span class="align-middle">Change Password</span>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" id="social-links-tab" data-toggle="tab" href="#social-links" role="tab"
                       aria-controls="social-links" aria-selected="false">
                    <i class="ft-twitter mr-1 align-middle"></i>
                    <span class="align-middle">Social Links</span>
                    </a>
                 </li>
              </ul>
           </div>
           <div class="col-md-9">
              <!-- Tab panes -->
              <div class="card">
                 <div class="card-content">
                    <div class="card-body">
                       <div class="tab-content">
                          <!-- General Tab -->
                          @if (session('message'))
                              <h5 class="alert alert-success mb-2">{{ session('message') }}</h5>
                           @endif

                           @if ($errors->any())
                           <ul class="alert alert-danger">
                              @foreach ($errors->all() as $error)
                                 <li class="text-light">{{ $error }}</li>
                              @endforeach
                           </ul>
                           @endif
                          <div class="tab-pane active" id="general" role="tabpanel" aria-labelledby="general-tab">
                             <div class="media">
                                <img src="../app-assets/img/portrait/small/avatar-s-8.png" alt="profile-img" class="rounded mr-3"
                                   height="64" width="64">
                                <div class="media-body">
                                   <div class="col-12 d-flex flex-sm-row flex-column justify-content-start px-0 mb-sm-2">
                                      <label class="btn btn-sm bg-light-primary mb-sm-0" for="select-files">Upload Photo</label>
                                      <input type="file" id="select-files" hidden>
                                      <button class="btn btn-sm bg-light-secondary ml-sm-2">Reset</button>
                                   </div>
                                   <p class="text-muted mb-0 mt-1 mt-sm-0">
                                      <small>Allowed JPG, GIF or PNG. Max size of 800kB</small>
                                   </p>
                                </div>
                             </div>
                             <hr class="mt-1 mt-sm-2">
                             <form novalidate>
                                <div class="row">
                                   <div class="col-12 form-group">
                                      <label for="username">Username</label>
                                      <div class="controls">
                                         <input type="text" id="username" class="form-control" placeholder="Username" value="hermione007"
                                            required>
                                      </div>
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="name">Name</label>
                                      <div class="controls">
                                         <input type="text" id="name" class="form-control" placeholder="Name" value="Hermione Granger"
                                            required>
                                      </div>
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="email">E-mail</label>
                                      <div class="controls">
                                         <input type="text" id="email" class="form-control" placeholder="E-mail"
                                            value="granger007@hogward.com" required>
                                      </div>
                                   </div>
                                   <div class="col-12">
                                      <div class="alert bg-light-warning alert-dismissible mb-2">
                                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                         <span aria-hidden="true"><i class="ft-x font-medium-2 text-bold-700"></i></span>
                                         </button>
                                         <p class="mb-0">Your email is not confirmed. Please check your inbox.</p>
                                         <a href="javascript:;" class="alert-link">Resend confirmation</a>
                                      </div>
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="company">Company</label>
                                      <div class="controls">
                                         <input type="text" id="company" class="form-control" placeholder="Company Name"
                                            aria-invalid="false" required>
                                      </div>
                                   </div>
                                   <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                      <button type="submit" class="btn btn-primary mr-sm-2 mb-1">Save Changes</button>
                                      <button type="reset" class="btn btn-secondary mb-1">Cancel</button>
                                   </div>
                                </div>
                             </form>
                          </div>
                          <!-- Change Password Tab -->
                          <div class="tab-pane" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
                             <form method="post" action="{{route('passwordupdate')}}"  novalidate>
                                @csrf
                                <div class="form-group">
                                   <label for="old-password">Old Password</label>
                                   <div class="controls">
                                      <input type="password" id="old-password" class="form-control" name="current_password" placeholder="Old Password" required>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label for="new-password">New Password</label>
                                   <div class="controls">
                                      <input type="password" name="password" id="new-password" class="form-control" placeholder="New Password" required>
                                   </div>
                                </div>
                                <div class="form-group">
                                   <label for="retype-new-password">Retype New Password</label>
                                   <div class="controls">
                                      <input type="password" name="password_confirmation" id="retype-new-password" class="form-control" placeholder="New Password"
                                         required>
                                   </div>
                                </div>
                                <div class="d-flex flex-sm-row flex-column justify-content-end">
                                   <button type="submit" class="btn btn-primary mr-sm-2 mb-1">Save Changes</button>
                                   <button type="reset" class="btn btn-secondary mb-1">Cancel</button>
                                </div>
                             </form>
                          </div>
                          <!-- Social Links Tab -->
                          <div class="tab-pane" id="social-links" role="tabpanel" aria-labelledby="social-links-tab">
                             <form novalidate>
                                <div class="row">
                                   <div class="col-12 form-group">
                                      <label for="twitter">Twitter</label>
                                      <input id="twitter" type="text" class="form-control" placeholder="Add link"
                                         value="https://www.twitter.com/">
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="facebook">Facebook</label>
                                      <input id="facebook" type="text" class="form-control" placeholder="Add link">
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="google+">Google+</label>
                                      <input id="google+" type="text" class="form-control" placeholder="Add link">
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="linkedin">Linkedin</label>
                                      <input id="linkedin" type="text" class="form-control" placeholder="Add link"
                                         value="https://www.linkedin.com/">
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="instagram">Instagram</label>
                                      <input id="instagram" type="text" class="form-control" placeholder="Add link">
                                   </div>
                                   <div class="col-12 form-group">
                                      <label for="quora">Quora</label>
                                      <input id="quora" type="text" class="form-control" placeholder="Add link">
                                   </div>
                                   <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                      <button type="button" class="btn btn-primary mr-sm-2 mb-1">Save Changes</button>
                                      <button type="button" class="btn btn-secondary mb-1">Cancel</button>
                                   </div>
                                </div>
                             </form>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- Account Settings ends -->
     </div>
     
</div>
@endsection

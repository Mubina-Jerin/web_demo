@extends('layouts.default')

@include('includes.adminNav')

{{-- @include('includes.adminNav') --}}
@section('content')

<div class="userHome">
  
  <!-- Services -->
<div id="services" class="cards-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title"> <h2>Admin Services</h2></div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
        <div class="row">
            <div class="col-lg-12">
                
                <!-- Card -->
                <div class="card">
                    
                    <div class="card-body">
                        <h3 class="card-title">Role Management</h3>
                        
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">                               
                                <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Add Role</a></div>
                            </li>
                            <li class="media">
                              <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Edit Role</a></div>
                            </li>
                            <li class="media">
                              <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Delete Role</a></div>
                            </li>
                          </ul>
                        {{-- <p class="price">শুরু <span>৳ ৫০০</span> থেকে</p> --}}
                    </div>
                    {{-- <div class="button-container">
                        <a class="btn-solid-reg page-scroll" href="#callMe">Add Role</a>
                    </div> <!-- end of button-container --> --}}
                </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    
                    <div class="card-body">
                        <h3 class="card-title">User Management</h3>
                        
                        <ul class="list-unstyled li-space-lg">
                          <li class="media">                               
                              <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Add User</a></div>
                          </li>
                          <li class="media">
                            <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Edit User</a></div>
                          </li>
                          <li class="media">
                            <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Delete User</a></div>
                          </li>
                        </ul>
                </div>
              </div>
                <!-- end of card -->

                <!-- Card -->
                <div class="card">
                    
                    <div class="card-body">
                        <h3 class="card-title">Nursery Catelog Creation</h3>
                      
                        <ul class="list-unstyled li-space-lg">
                          <li class="media">                               
                              <div class="media-body">  <a class="btn-solid-reg page-scroll" data-toggle="modal" data-target="#exampleModal" href="#callMe">Add Cateloge</a></div>
                                          <!-- Modal -->
                                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                          </div>
                                          <div class="modal-body">
                                            <form method="POST">
                                              @csrf
                                              <div class="form-group">
                                                   <label>Name:</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" required="">
                                            </div>
                                             <div class="form-group">
                                             <label>Password:</label>
                                               <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                            </div>
                                          <div class="form-group">
                                                  <strong>Email:</strong>
                                                  <input type="email" name="email" class="form-control" placeholder="Email" required="">
                                              </div>
                                          </form>
                                          </div>
                                          <div class="modal-footer">
                                            <div class="form-group">
                                              <button class="btn btn-success btn-submit">Submit</button>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                                          </div>
                          </li>
                          <li class="media">
                            <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Edit Cateloge</a></div>
                          </li>
                          <li class="media">
                            <div class="media-body">  <a class="btn-solid-reg page-scroll" href="#callMe">Delete Cateloge</a></div>
                          </li>
                        </ul>
                    </div>
                    
                </div>
                <!-- end of card -->

            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of services -->
</div>

</div>


@endsection
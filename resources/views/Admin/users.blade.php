@extends('Admin/navbarAdmin')
@section('title')
users
@endsection
@section('content')
<!-- Header Starts -->
<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
<div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Users</h4>
                    
                  </div>
               </div>
            </div>
            <!-- Header end -->
             <!-- Row start -->
             <div class="row">
               <div class="col-sm-12">
                  <!-- Basic Table starts -->
                  <div class="card">
                     <div class="card-header">
                        <h5 class="card-header-text">Users List</h5>
                        
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                              <table class="table">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>first name</th>
                                       <th>Last name</th>
                                       <th>email</th>
                                       <th>Adresse</th>
                                       <th>Created at</th>
                                       
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                       <td>{{$user->id}}</td>
                                       <td>{{$user->first_name}}</td>
                                       <td>{{$user->last_name}}</td>
                                       <td>{{$user->adresse}}</td>
                                       <td>{{$user->email}}</td>
                                       <td>{{$user->created_at}}</td>
                                    </tr>
                                   @endforeach

                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
                  <!-- Basic Table ends -->
                  </div>
                  </div>
            @endsection

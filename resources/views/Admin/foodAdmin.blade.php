@extends('Admin/navbarAdmin')
@section('title')
Foods | Admin
@endsection
@section('content')
<!-- Header Starts -->
<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <div class="container-fluid">
<div class="row">
               <div class="col-sm-12 p-0">
                  <div class="main-header">
                     <h4>Foods</h4>
                     
                     <!-- Trigger the modal with a button -->

<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal" style="display: inline-block; float:right ;margin-right:20px">
                     Add food
                    </button>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
       
      </div>
      <div class="modal-body">
                         <form name="add-blog-Category-form" id="add-blog-Category-form" method="post" action="{{route('addCategory')}}">
                         @csrf
                         <div class="form-group row">
                                 <label for="h-email" class="col-md-2 col-form-label form-control-label">Name</label>
                                 <div class="col-md-10">
                                    <input type="text" id="name" name="name" class="form-control" required="" placeholder="name">
                                 </div>
                              </div>
                            
                              
                           
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Add</button>
             </form>        
      </div>
    </div>
  </div>
</div>
               
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
                     
                        <h5 class="card-header-text">food</h5>
                        <!-- Button trigger modal -->
                  
                     </div>
                     <div class="card-block">
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                             <!-- ?? card -->
                                                        <ul class="filters_menu">
                                    <li class="active" data-filter="*">All</li>
                                                    
                                    
                                    
                                    @foreach(  $category as $categorys)
                                    <li data-filter=".{{$categorys->name}}">{{$categorys->name}}</li>
                                @endforeach
                                </ul>

                                <div class="filters-content">
                                    <div class="row grid">
                                       
                                  
            <!--  -->
                             
                                @foreach($foods as $food)
                                <div class="col-sm-6 col-lg-4 all {{$food->Category->name}}">
                                <div class="card">
                                <img src="images/f1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$food->name}}</h5>
                                    <p class="card-text">{{$food->description}}</p><br>
                                    <button type="button" class="btn btn-danger waves-effect waves-light" style="display:inline-block"><i class="fa-solid fa-trash"></i></button> <button type="button" class="btn btn-primary waves-effect waves-light" style="display:inline-block"><i class="fa-solid fa-pen"></i></button><h6 style="display:inline-block">&nbsp;&nbsp;&nbsp;{{$food->price}}&nbsp;DH</h6>
                                </div>
                                </div>
                            </div>
                            @endforeach
                            
                            

                            </div>
                         <!-- ?? -->
                         
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
                  </div>
                  <!-- Basic Table ends -->
         @endsection

        i
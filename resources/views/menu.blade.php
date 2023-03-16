@extends('navbar')
@section('title')
Menu
@endsection
@section('body')
class="sub_page"
@endsection
@section('div')
</div>
@endsection
@section('content')

  <!-- food section -->

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>
   
      <ul class="filters_menu">
      @foreach( $category as $categorys)
        <li data-filter=".{{$categorys->name}}">{{$categorys->name}}</li>
      @endforeach
      </ul>

      <div class="filters-content">
        <div class="row grid">
            @foreach($food as $foods)
          <div class="col-sm-6 col-lg-4 all {{$foods->category->name}}">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/{{$foods->image}}" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  {{$foods->name}}
                  </h5>
                  <p>
                  {{$foods->description}}
                  </p>
                  <div class="options">
                    <h6>
                    {{$foods->price}} DH    @if($foods->reduction>0)  <h6>
                  <span>{{$foods->reduction}}%</span> Off
                </h6> @endif
                    </h6>
                    @if($user!=null)
                      <button style="background-color: transparent; border-radius: 70px;" type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal" style="display: inline-block; float:right ;margin-right:20px">
                     <a href="#">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                           c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                           C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                           c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                           C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                           c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>
                      </a>
                    </button>
@endif
@if($user==null)
<a href="{{ route('login') }}">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                           c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                           C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                           c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                           C457.728,97.71,450.56,86.958,439.296,84.91z" />
                            </g>
                          </g>
                          <g>
                            <g>
                              <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                           c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                            </g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                          <g>
                          </g>
                        </svg>
                      </a> @endif
                      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="justify-content: center;   align-items: center;">
  <div class="modal-dialog" style="justify-content: center;   align-items: center;background-color: rgb(50, 50, 50);;border-radius: 30px;">
    <div class="modal-content" style="justify-content: center;   align-items: center;background-color: rgb(50, 50, 50);;border-radius: 30px;">
     
       
      <div class="modal-body" style="justify-content: center;   align-items: center;background-color: rgb(50, 50, 50);;border-radius: 30px;">
                         <form name="add-blog-Category-form" id="add-blog-Category-form" method="post" action="{{route('addReservation')}}" style="justify-content: center;   align-items: center;background-color: #0c0c0c;">
                         @csrf
                         <div class="form-group row" style="justify-content: center;   align-items: center;background-color: rgb(50, 50, 50);;">
                               
                                 <div class="col-md-10" style="justify-content: center;   align-items: center;">
                                    <input type="text" style="justify-content: center;   class="form-control" name="address_reservation" class="form-control" required="" placeholder="votre address">
                                 </div><br><br>
                                 
                                
                                 <div class="col-md-10">
                                  
                                    <input type="tel" pattern="[0-9]{10}" class="form-control" id="name" name="numero_de_telephone" class="form-control" required="" placeholder="numero de telephone">
                                 </div><br><br>
                                 <div class="col-md-10">
                                  
                                  <input type="number" class="form-control" id="name" name=" nb" min="1" class="form-control" required="" placeholder="nombre de commande">
                               </div>
                                
                                <input type="text" id="name"  name="food_id" class="form-control" value="{{$foods->id}}"  style="display:none;" placeholder="name">
                                 
                              </div>
                            
                              
                           
      </div>
      <div class="modal-footer">
      <button type="button" style="color: white" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" style="color: white" class="btn btn-warning">comfimer</button>
             </form>        
      </div>
    </div>
  </div>
</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @endforeach
      </div>
    </div>
  </section>
  @endsection
  <!-- end food section -->

  
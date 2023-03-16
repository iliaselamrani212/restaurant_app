@extends('navbar')


    <!-- header section strats -->

@section('title')
Home
@endsection
@section('image')
 <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    @endsection

@section('content')
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="{{ route('foodmenu') }}" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Fast Food Restaurant
                    </h1>
                    <p>
                      Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos nihil ducimus libero ipsam.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        @foreach( $category as $categorys)
        <li data-filter=".{{$categorys->name}}">{{$categorys->name}}</li>
      @endforeach
      </ul>

      <div class="filters-content">
        <div class="row grid">
            @for($i=0;$i<3;$i++) 
          <div class="col-sm-6 col-lg-4 all {{$food[$i]->name}}">      <!--  ll -->
            
            <div class="box">
                <div>
                  <div class="img-box">
                    <img src="images/{{$food[$i]->image}}"   alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      {{$food[$i]->name}}
                    </h5>
                    <p>
                      {{$food[$i]->description}}
                    </p>
                    <div class="options">
                      <h6>
                        {{$food[$i]->price}} DH  
                        @if($food[$i]->reduction>0)  <h6>
                  <span>{{$food[$i]->reduction}}%</span> Off
                </h6> @endif
                      </h6>
                      @if($user!=null)
                      <button style="background-color: transparent; border-radius: 70px;" type="button" data-toggle="modal" data-target="#myModal" style="display: inline-block; float:right ;margin-right:20px">
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
                                    <input type="text" style="justify-content: center;  id="name" class="form-control" name="address_reservation" class="form-control" required="" placeholder="votre address">
                                 </div><br><br>
                                 
                                
                                 <div class="col-md-10">
                                  
                                    <input type="tel" pattern="[0-9]{10}" class="form-control" id="name" name="numero_de_telephone" class="form-control" required="" placeholder="numero de telephone">
                                 </div><br><br>
                                 <div class="col-md-10">
                                  
                                  <input type="number" min="1" class="form-control" id="name" name=" nb" class="form-control" required="" placeholder="nombre de commande">
                               </div>
                                
                                <input type="text" id="name"  name="food_id" class="form-control" value="{{$food[$i]->id}}"  style="display:none;" placeholder="name">
                                 
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
                  </div></div>
                </div>
           <!--  ll --> </div>@endfor
          </div>
        
               
          
        
      </div>
      <div class="btn-box">
        <a href="{{ route('foodmenu') }}">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->

  
  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                We Are Feane
              </h2>
            </div>
            <p>
            Bienvenue sur la page de livraison d'Ilias Food, le site de référence pour les amateurs de cuisine et de gastronomie ! Nous sommes heureux de vous proposer un service de livraison rapide et pratique pour que vous puissiez profiter de vos plats préférés sans avoir à quitter votre domicile.

Notre service de livraison est disponible dans de nombreuses villes et régions, avec des options pour tous les goûts et toutes les préférences alimentaires. Nous travaillons en partenariat avec les meilleurs restaurants locaux pour vous proposer une sélection variée de plats savoureux, allant des pizzas et des burgers aux plats ethniques et aux repas santé.

Pour commander, il vous suffit de naviguer sur notre site et de choisir le restaurant et le plat de votre choix. Vous pouvez également utiliser notre système de recherche pour trouver des plats spécifiques ou des options adaptées à votre régime alimentaire. Une fois votre commande passée, nous vous tiendrons informé de l'état de la livraison et de l'heure approximative à laquelle vous recevrez votre repas.

Nous sommes fiers de vous offrir un service de livraison rapide, fiable et convivial pour que vous puissiez profiter de vos repas préférés sans tracas. Merci de nous faire confiance pour votre prochain repas !
            </p>
            <a >
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Book A Table
        </h2>
      </div>
     <div class="row">
        
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          What Says Our Customers
        </h2>
      </div>
      <form name="add-blog-Category-form" id="add-blog-Category-form" method="post" action="{{route('addCommentaires')}}" >
    @csrf
    <div>
      <textarea name="cmnt" id="" cols="30" rows="10" class="form-control" placeholder="ajouter un commentaire"></textarea>
   
        <button type="submit" class="btn btn-primary" style="background-color:  #ffbe33 ;  color: white;" >Add</button>
    </div>
</form>

      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          @foreach($commentaire as $comm)
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                  {{$comm->cmnt}}
                </p>
               
              </div>
              <div class="img-box">
                <img src="images/client1.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          @endforeach
          
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection

  <!-- end client section -->

@extends('layout')
@section('title') MamaScout @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>

    .checked {
      color: orange;
    }
    </style>

<div id="slide_show_in_desktop_mode"  >
  @include('components.desktopslideshow')
</div>
<div id="slide_show_in_mobile_mode">
  @include('components.mobileslideshow')
</div>
<!-- About Starts Here -->
<script>
    $( document ).ready(function() {
  new WOW().init();
  $( ".wow" ).addClass( "fadeInLeft" );
});
</script>
 <div id="About" class="container-fluid" style="background:white;">
    <br>
      <div class="row ">
        <div class="col-md-4 wow animated zoomIn slow">
        <img src="{{asset('Img/4.jpg')}}" alt="" class="img-fluid" >
        </div>
        <div  align="center" class="col-md-8 wow animated flash slow">
            <h1 class="black-text" style="font-weight:bold;">Values of  Mama Scout Shop</h1>
            <div class="col-md-3" style=" border-bottom: 2px solid #003399;"></div>
            <div class="row my-5" style="font-size:30px; font-family: 'Balsamiq Sans', cursive;">
              <div class="col-md-6" >
                    <ul align="left" style="list-style:none;">
                        <li><i class="fab fa-pagelines"></i> Respect for tradition and craftsmanship</li><br>
                        <li><i class="fab fa-pagelines"></i> Eco Friendly Products</li>
                    </ul>
              </div>
              <div class="col-md-6">
                    <ul align="left" style="list-style:none;">
                    <li><i class="fab fa-pagelines"></i> Promoting diversity</li><br>
                    <li><i class="fab fa-pagelines"></i> Highly Climate Resilent</li>
                  </ul>
              </div>
            </div>
            <p  align="left" class="mx-5" style="margin-top:-30px; font-family: 'Balsamiq Sans', cursive;">
              <a href="{{url('about')}}"  target="_blank" class="btn btn-dark">Know More</a>
              </p>

        </div>
      </div>

</div>

<!-- About completed Here -->

@php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp
<!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">

    <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1>
    <div align="center">
        <p  class="col-md-2" style=" border-bottom: 2px solid #e712ee;"></p>
    </div>
    <div  class="row my-4 px-4 "  style="width:100%;" >
      @foreach($Products as $item)
      <div class="col-md-3 px-4 my-5"  >
          <a href="{{url('Shop/'.$item->url)}}">
              <img src=" {{asset('Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid"  >
              </a>
          <div class="py-2" style="background:white;">
            <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{$item->name}}</span>
            <br>
            Price : {{$item->price}} TND <br>
              @if($item->rating==1)
                            <span class="fa fa-star checked" style="color: gold"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          @elseif($item->rating==2)
                          <span class="fa fa-star checked" style="color: gold"></span>
                              <span class="fa fa-star checked" style="color: gold"></span>
                              <span class="fa fa-star " ></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            @elseif($item->rating==3)
                            <span class="fa fa-star checked" style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>

                            @elseif($item->rating==4)
                            <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star"></span>

                            @else
                            <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                              <span class="fa fa-star checked"style="color: gold"></span>
                            @endif

                            <br>

                            <a href="Shop/{{$item->url}}" class="btn  btn-primary" style="background-color: #e712ee !important"> Shop Now</a>

          </div>
      </div>
     @endforeach

    </div>

    <hr class="col-md-6">
</section>
<!-- Products Ends Here -->

<!--Team Ends Here-->
<!-- ======= Contact Section Starts Here ======= -->

  <section id="contact" class="contact" style="background:white;">
          <div class="container ">

            <div class="section-title">

              <h2>Contact</h2>
              <p style=" font-family: 'Balsamiq Sans', cursive;">  </p>
            </div>

            <div class="row wow animated zoomIn slow">

              <div class="col-lg-5 d-flex align-items-stretch">
                <div align="left" class="info">
                  <div class="address" >
                  <i class="fas fa-map-marker-alt"></i>
                    <h4>Location:</h4>
                    <p>  Av. Jugurtha, Tunis</p>
                  </div>

                  <div class="email">
                  <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>mamascoutshop@gmail.com</p>
                  </div>

                  <div class="phone">
                  <i class="fas fa-phone"></i>
                    <h4>Call:</h4>
                    <p>Assistant : +216 53 150 309<br></p>
                  </div>

                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d204394.21730187588!2d9.8845063!3d36.826675!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd33624e33d731%3A0x66a451def9a7119d!2sscout%20tunisien!5e0!3m2!1sfr!2stn!4v1704156957263!5m2!1sfr!2stn" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                </div>

              </div>

              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="send-email" method="post" role="form" class="php-email-form">
                    @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <label for="name">Message</label>
                    <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                  </div>

                  <div class="text-center"><button type="submit" style="background-color: #e712ee">Send Message</button></div>
                </form>
              </div>

            </div>

          </div>
  </section>

<!-- ======= Contact Section Ends Here ======= -->
<p align="center" class="py-2"><br>
   <button class="btn btn-dark" data-toggle="modal" data-target="#modalSocial" >Subscribe to Our News Letter</button>
   </p>


<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
        <h4 class="title"><i class="fas fa-users"></i> Subscribe to Our Newsletter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="subscribe-news-letter">
                @csrf
                <input type="text" class="form-control"  name="name" placeholder="Your Name" required><br>
                <input type="email"  class="form-control"  name="email" placeholder="Your Email Id" required>
                <button class="btn" style="background-color:#40BFD6;">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->


   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif


@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif



 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Success</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->

 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Form Not Submitted </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">

           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">Close</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->

@endsection

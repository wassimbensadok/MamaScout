@extends('layout')
@section('title') @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
        jQuery(document).ready(function($){
            $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            });
        })
        </script>
        
        <style>
            body {
        overflow-x: hidden;
        }

        #sidebar-wrapper {
        min-height: 100vh;
        margin-left: -15rem;
        -webkit-transition: margin .25s ease-out;
        -moz-transition: margin .25s ease-out;
        -o-transition: margin .25s ease-out;
        transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
        width: 15rem;
        }

        #page-content-wrapper {
        min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
        }

        @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
        }
        </style>  
        <style>
            /* Customize the navbar brand color */
            .navbar-brand {
                color: purple;
            }

            /* Customize the navbar links color */
            .navbar-nav .nav-link {
                color: purple;
            }

            /* Customize the dropdown menu background and text color */
            .dropdown-menu {
                background-color: white;
            }

            .dropdown-menu .dropdown-item {
                color: purple;
            }
            .navbar {
                        margin-top: -71px; /* You can adjust the value as needed */
                    }

        </style>  
        <style>
            .toggle > div {
  position: relative;
  padding: 10px;
  width: 110px;
  height: 70px;
  border-radius: 50px;
  box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, .5), 0px 1px 1px 0 rgba(255, 255, 255, 1);
  background: rgb(189, 191, 193);
  background: linear-gradient(to bottom, rgba(189, 191, 193, 1) 0%, rgba(249, 251, 254, 1) 100%);
}

.toggle > div > input[type=checkbox] {
  position: absolute;
  opacity: 0;
  top: -3px;
  left: 17px;
  width: 90px;
  height: 40px;
  z-index: 5;
}

.toggle > div > input[type=checkbox] ~ div {
  width: 90px;
  height: 40px;
  border-radius: 50px;
  border: 1px solid #979797;
  box-shadow: inset 5px 0 0 0 rgba(0, 0, 0, .1), inset -5px 0 0 0 rgba(0, 0, 0, .1), inset -6px 0 0 0 rgba(255, 255, 255, .5), inset -4px 6px 11px -5px rgba(0, 0, 0, .2), inset 1px 1px 0 0 rgba(255, 255, 255, 1), -6px 4px 11px -7px rgba(0, 0, 0, .5);
  background: rgb(253, 252, 251);
  background: linear-gradient(to right, rgba(253, 252, 251, 1) 37%, rgba(229, 229, 229, 1) 61%);
}

.toggle > div > input[type=checkbox]:checked ~ div {
  box-shadow: inset -5px 0 0 0 rgba(0, 0, 0, .1), inset 5px 0 0 0 rgba(0, 0, 0, .1), inset 6px 0 0 0 rgba(255, 255, 255, .5), inset -4px 6px 11px -5px rgba(0, 0, 0, .2), inset 1px 1px 0 0 rgba(255, 255, 255, 1), -6px 4px 11px -7px rgba(0, 0, 0, .5);
  background: rgb(229, 229, 229);
  background: linear-gradient(to right, rgba(229, 229, 229, 1) 39%, rgba(253, 252, 251, 1) 63%);
}

.toggle > div > input[type=checkbox] ~ div:before {
  content: attr(data-unchecked);
  display: block;
  position: absolute;
  border-radius: 10px;
  top: 20px;
  left: 35px;
}

.toggle > div > input[type=checkbox] ~ div:after {
  content: attr(data-checked);
  color: #df0000;
  text-shadow: 0 1px 0 #fff, 0px 0 7px #df0000;
  filter: dropshadow(color=#df0000, offx=0, offy=0);
  display: block;
  position: absolute;
  border-radius: 10px;
  top: 20px;
  left: 65px;
}

.toggle > div > input[type=checkbox]:checked ~ div:before {
  color: #119400;
  text-shadow: 0 1px 0 #fff, 0px 0 7px #007a08;
  filter: dropshadow(color=#007a08, offx=0, offy=0);
}

.toggle > div > input[type=checkbox]:checked ~ div:after {
  color: #000;
  text-shadow: none;
  filter: dropshadow(none);
}

 </style>  
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 <!-- Bootstrap JS and jQuery (required for dropdowns and toggling) -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <div class="sidebar-heading" style="font-size: 140%" style="margin-left: 50px"><a href="/products" ><b>CAMPING GEAR</b></a> </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-purple" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Scouting Clothes
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'T-shirts') }}">T-shirts</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Shirts') }}">Shirts</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Pants') }}">Pants</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Shorts') }}">Shorts</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Shoes') }}">Shoes</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Socks') }}">Socks</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Caps') }}">Caps</a>
                            </div>
                        </li>
                        <!-- Add more navbar items or dropdowns as needed -->
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-purple" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Accessories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Neckerchiefs') }}">Neckerchiefs</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Pines') }}">Pines</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Scout scarfs') }}">Scout scarfs</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Scout Broochs') }}">Scout Broochs</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Badges') }}">Badges</a>

                               
                            </div>
                        </li>
                        <!-- Add more navbar items or dropdowns as needed -->
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-purple" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Outdoors
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Tents') }}">Tents</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Sleeping Bags') }}">Sleeping Bags</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Backpacks') }}">Backpacks</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Mattress') }}">Mattress</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Rain Protectors (Tents)') }}">Rain Protectors (Tents)</a>
                                <a class="dropdown-item" href="{{ route('products.subcategory', 'Scouting Accessories') }}">Scouting Accessories</a>
                                
                            </div>
                        </li>
                        <!-- Add more navbar items or dropdowns as needed -->
                    </ul>
                </div>
               
               
                
            </div>
        </nav>
        <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
       
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

         <!-- Products will be displayed here -->
        <div class="container-fluid">
            <!-- Products Starts Here -->
            @php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp

<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">
  
  <h1 class="black-text" style="font-weight:bold;">PRODUCTS: </h1> 
  <div align="center">
      <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
  </div>
  
  <div  class="row my-4 px-4 "  style="width:100%;" >
    @foreach($products as $item)
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
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          @elseif($item->rating==3)
                          <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        
                          @elseif($item->rating==4)
                          <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star"></span>
                        
                          @else
                          <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                            <span class="fa fa-star checked" style="color: gold"></span>
                          @endif
                           
                          <br>
         
             <a href="Shop/{{$item->url}}" class="btn  btn-primary    "> Shop Now</a>
          
        </div>
    </div>  
    @endforeach

  </div>
 
  <hr class="col-md-6"> 
</section>

        </div>
        
        </div>
        <!-- /#page-content-wrapper -->

        </div>
       
       
        <!-- /#wrapper -->
    </body>
</html>
@endsection
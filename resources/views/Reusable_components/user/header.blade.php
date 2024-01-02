<style>
    
@media (min-width: 768px)
{
     #Gainaloe_Logo
    {
        margin-left:-75px;
    }
}

#SearchIcon:hover
{
    cursor:pointer;
}
</style> 
<script>
$(document).ready(function (){
        $('#SearchIcon').click(function (e)
        {
            var searchstring = $('.searchstring').val();
                // window.alert(searchstring);
                if(searchstring=='')
                {
                    window.location.replace("/");
                }
                else
                {
                    window.location.replace("/Shop/"+searchstring);   
                }
                 
 
        });
});
</script>
<!-- ======= Header ======= -->
    <header id="header" class="z-depth-1" style="background-color: blueviolet" style="position:fixed;top:0px;width:100%;font-family: 'Balsamiq Sans', cursive;" >
        <div class="container d-flex" >
    
          <div id="Gainaloe_Logo" class="logo mr-auto"  style="color: aliceblue" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/" style="color: white;"><img src=" {{asset('assets/img/M.png')}}" alt="" class="img-fluid" >Mama Scout Shop</a>
            
          </div>
          <div class="col-md-4"   >
              <div class="input-group md-form form-sm  " style="margin-top:12px " style="width:100%;">
                <input class="form-control my-0 py-1 red-border searchstring" list="plists" name="plist" id="plist" type="text" placeholder="Search" aria-label="Search" style="background-color: aliceblue" >
                <datalist id="plists">
                    @php
                       $Products=App\Models\Products::where('status','=','1')->get();
                    @endphp
                        @foreach($Products as $item)
                                <option value="{{$item->url}}">{{$item->name}} </option>
                        @endforeach
                </datalist>
                
                <div class="input-group-append" id="SearchIcon">
                    <span class="input-group-text  lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
                aria-hidden="true"    ></i></span>
                </div>
            </div>
            </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
              
            <ul style="margin-top:5px;">
                
              <li class="active"><a href="/" style="color: white;" >Home</a></li>
              <li><a href="/about" style="color: white;">About</a></li>
              <li><a href="/products" style="color: white;">Products</a></li>
              
              
              
              <li><a href="{{url('Help')}}" style="color: white;"><i class="fas fa-headset"  ></i> Help</a></li>   
             
                @if (Route::has('login'))

                @auth
                  <li class="drop-down"><a href="#" style="color: white;">  <i class="far fa-user-circle "></i>  My Account  <i class="fas fa-angle-down"></i></a> 
                       <ul>
                            <li><a href="{{url('dashboard')}}" style="color: blueviolet;"><i class="fas fa-tachometer-alt"></i>  Dashboard</a></li>
                            <li><a href="{{url('profile')}}" style="color: blueviolet;"><i class="fas fa-user"></i>  Profile</a></li>
                            <li><a href="{{url('Orders')}}" style="color: blueviolet;"> <i class="fas fa-table"></i> Orders</a></li>
                            <li><a href="{{url('Payments')}}" style="color: blueviolet;"><i class="fas fa-receipt"></i>  Transactions</a></li>
                             <a   href="{{ route('logout') }}" style="color: blueviolet;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="fas fa-sign-in-alt"></i> {{ __('Logout') }}</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                              </form>
                            </li>
                        </ul>
                  </li>

                @else
                <li> <a href="{{ route('login') }}" style="color: white;">Login</a> </li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}" style="color: white;">Register</a> </li>
                    @endif
                @endauth

                @endif


          
             <li><a href="{{url('cart')}}" style="margin-left:15px;" style="color: white;">   <i class="fas fa-shopping-cart fa-2x" style="color: white;"></i>
              <span class="basket-item-count" style="margin-left:-4px;">
                <span class="badge badge-pill red"> {{ count((array) session('cart')) }}  </span>
                </span></a></li>
            
            </ul>
            
          </nav><!-- .nav-menu -->
         
        </div>
      </header><!-- End Header --> 
   <br><br><br>
<!DOCTYPE html>
<html>
<head>
    <title>Products selection</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" integrity="sha512-HXXR0l2yMwHDrDyxJbrMD9eLvPe3z3qL3PPeozNTsiHJEENxx8DH2CxmV05iwG0dwoz5n4gQZQyYLUNt1Wdgfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    

   
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="      background-color: #f6f6f6;">
         <a class="logo" href="/">
         <img src="images/navbarLogo2.png" class="navBarLogo">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler9"
            aria-controls="navbarToggler9" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarToggler9">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#">  |  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="aboutUs"> About</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#"> |  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="services">Services</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#"> | </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="contactUs">Contact</a>
               </li>
               <li>
                  <a class="nav-link bar" href="#"> | </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="community">Community</a>
               </li>
            </ul>
           
         </div>
      </nav>
<div class="container">
    <div class="row">
        
        <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown">
                    <i class="ri-shopping-cart-line"></i> Cart <span class="badge badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-info">R {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('img') }}/{{ $details['photo'] }} "  />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['product_name'] }}</p>
                                    <span class="price text-info"> R {{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   
<br/>
<div class="container">

    <h1>Our products and services</h1>
    <i class="ri-search-line searchBarIcon"></i><input type="text" placeholder="Search by Name/Description/Price" id="productSearch"> 

    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
          
        </div> 
    @endif
   
    @yield('content')
 
  
</div>

   <script>

$(document).ready(function(){
  $("#productSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".productCard").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


    </script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

@yield('scripts')
</body>

</html>
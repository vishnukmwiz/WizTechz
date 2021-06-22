<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.0/examples/sidebars/sidebars.css" rel="stylesheet">
    <style>
        input:focus-visible{
            outline:0;
        }
        select:focus-visible{
            outline:0;
        }
        .accordion-button:focus {
            box-shadow: 0 0 0 0 ;
        }
        .accordion-button:not(.collapsed) {
            box-shadow: 0 0 0 0 ; 
        }
        .breadcrumb{
            margin-bottom:2px;
        }
        .mbtn{
            color:black;
        }
        .mbtn:hover{
            color:#ffc107;
        }
        .dash {
            border: 0;
            background-color: #fff;
            border-top: 1px dashed #8c8c8c;
        }
    </style>
    <title>Wiz Techz : The Complete Tech Store</title>
</head>
<body class="bg-light">
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/Auth/Home" class="navbar-brand text-secondary fs-3 ">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        Wiz Techz
      </a>
      
      <div class="collapse navbar-collapse " id="header">
        <form action="ProductList" method="POST"  class="d-flex">
        {{csrf_field()}}
          <input name="search" type="search" size="40"  class="form-control form-control-dark" placeholder="Search for products, brands and more">
        </form>
        <ul class="navbar-nav ms-auto mb-auto mb-lg-0 ">
          
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="Auth/ProductList?cat=0&sub=0&brand=0">Products</a>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="/User/Cart"><i class="bi-cart "></i>Cart</a>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a href="Auth/Login" type="button" class="btn btn-warning me-5">LOGIN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary shadow">
  <div class=" me-lg-auto ms-lg-auto me-sm-2 ms-sm-2 me-md-auto ms-md-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> Explore Products
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav gap-2">
        <!-- {{$countp=0}}
        @foreach($datacategory as $category)
          @if($countp < 7) -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="Auth/ProductList?cat={{$category->id}}&sub=0&brand=0" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class=" mt-1" width="70" height="70" src="{{ URL::asset('assets/images/'.$category->image) }}" alt="">
            {{$category->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="Auth/ProductList?cat={{$category->id}}&sub=0&brand=0">All {{$category->name}}</a></li>
            @foreach($datasubcategory as $catsub)
            @if($category->id == $catsub->cid)
            <li><a class="dropdown-item" href="Auth/ProductList?cat=0&sub={{$catsub->id}}&brand=0">{{$catsub->name}}</a></li>
            @endif
            @endforeach
          </ul>
        </li>
        <!-- {{$countp++}}
          @else
            break
          @endif
        @endforeach -->
      </ul>
    </div>
  </div>
</nav>

  <section class="mt-2 md-2">
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/images/learn-student-desktop.jpg" class="d-block w-100" alt="...">
          <div style="margin-bottom: 6rem;margin-right: 32rem;" class=" carousel-caption d-none d-md-block ">
            <h1 class="text-dark">Find the Laptop of your choice..</h1>
            <a href="Auth/ProductList?cat=1&sub=0&brand=0" class="btn btn-outline-warning btn-lg">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/images/OMEN-X-2S-desktop.jpg" class="d-block w-100" alt="...">
          <div style="margin-bottom: 6rem;margin-right: 32rem;" class=" carousel-caption d-none d-md-block ">
            <h1 class="text-light">Welcome to world of Gaming Computers</h1>
            <a href="Auth/ProductList?cat=0&sub=9&brand=0" class="btn btn-warning btn-lg">Explore</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../assets/images/the-new-wonderful-acerprimary-large.jpg" class="d-block w-100" alt="...">
          <div style="margin-bottom: 12rem;" class=" carousel-caption d-none d-md-block ">
            <h1 class="text-dark ">Get all accessories for your PC</h1>
            <a href="Auth/ProductList?cat=3&sub=0&brand=0" class="btn btn-dark btn-lg">Shop Now</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section class="m-2">
    <div class="card">
      <div class="bg-dark card-header">
            <a class="text-warning fs-2 navbar-brand" href="#">Trending Products</a>
      </div>
      <div class="card-body bg-dark">
        <div class="row justify-content-center">
        <!-- {{$count=0}}
        @foreach($dataitem as $item)
          @if($count < 4) -->
          <div class="card me-2 ms-2 bg-light mt-2" style="width: 18rem;">
          <a class="text-decoration-none text-dark" href="Auth/ProductDetails/{{$item->id}}">
            <img src="{{ URL::asset('assets/images/'.$item->image) }}" class="card-img-top p-4" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <p class="card-text fs-5">Price: &#8377 {{$item->sprice}}</p>
              <p class="text-warning">View Details</p> 
            </div>
            </a>
          </div>
          <!-- {{$count++}}
          @else
            break
          @endif
        @endforeach -->
        </div>
      </div>
    </div>
  </section>

  <section class="me-5 ms-5 mt-5 text-center">
  <h1 >Available Items</h1>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      
      <!-- {{$countc=0}}
        @foreach($datacategory as $category)
          @if($countc < 4) -->
      <div class="col d-flex align-items-start">
        <div>
          <h4 class="fw-bold mb-0">{{$category->name}}</h4>
          <p>{{$category->desc}}</p>
        </div>
      </div>
      <!-- {{$countc++}}
          @else
            break
          @endif
        @endforeach -->
    </div>
  </section>

  <section class="m-2">
    <div>
      	<img width="100%"  src="../assets/images/homepage-primary-remote-solutions-large.jpg">
    </div>
    <div class="bg-dark row m-auto">
    	<div class="col-12 col-sm-12  col-lg-4 text-center text-white p-2">
    		<h4 class="text-warning">Laptops & Desktops</h4>
    		<p>Choose the best laptop or desktop according to you usage type.</p>
    	</div>
    	<div class="col-12 col-sm-12 col-lg-4 text-center text-white p-2">
    		<h4 class="text-warning">Accessories & Peripherals</h4>
    		<p>Find all accessories and all peripherals for your computer</p>
    	</div>
    	<div class="col-12 col-sm-12 col-lg-4 text-center text-white p-2">
    		<h4 class="text-warning">Brands</h4>
    		<p>Select from wide range of brands available.Choose the best one that suits you.</p>
    	</div>
    </div>
  </section>

  <section class="me-2 ms-2 mt-5 text-center">
  <h1 >Brands Available</h1>
  <div class="row row-cols-4 row-cols-sm-4 row-cols-md-5 row-cols-lg-6 g-4 py-5 me-2 ms-2">
      <!-- {{$countb=0}}
      @foreach($databrand as $brand)
      @if($countb < 12) -->
      <div class="col d-flex align-items-start">
        <div>
          <a href="Auth/ProductList?cat=0&sub=0&brand={{$brand->id}}">
          <img width="80%" src="{{ URL::asset('assets/images/'.$brand->logo) }}" alt="">
          </a>
        </div>
      </div>
      <!-- {{$countb++}}
      @else
        break
      @endif
      @endforeach -->
    </div>
  </section>
  
  <footer class="footer mt-auto p-3 bg-dark text-center ">
  <div class="align-items-center justify-content-center">
      <a href="/Auth/Home" class="align-items-center text-decoration-none">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        <label class="navbar-brand text-warning" for="logo">Wiz Techz</label>
      </a><br>
      <span class="text-warning ">All rights reserved by Wiz Tech Solutions</span>
  </div>
</footer>
    
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 </body>
</html>
@extends('User/Theme')
@section('usercontent')
<header class="p-2 bg-dark text-white sticky-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header" aria-controls="header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>{{ $LoggedUserInfo['name'] }}
      </button>
      <a href="/User/Home" class="navbar-brand text-secondary fs-3 ">
        <img width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        Wiz Techz
      </a>
      
      <div class="align-items-center collapse navbar-collapse " id="header">
        <form action="ProductList" method="POST" class="mt-auto mb-auto" >
        {{csrf_field()}}
          <input name="search" type="search" size="40"  class="form-control form-control-dark" placeholder="Search for products, brands and more">
        </form>
        <ul class="navbar-nav ms-auto mb-auto mb-lg-0 ">
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="ProductList?cat=0&sub=0&brand=0">Products</a>
          </li>
          <li class="nav-item dropdown mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning dropdown-toggle me-5" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ $LoggedUserInfo['name'] }}
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
              <li><a class="dropdown-item" href="MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="../Auth/Logout"><i class="bi bi-power"> </i> Logout</a></li>
            </ul>
          </li>
          <li class="nav-item mt-3 mt-sm-3 mt-md-3 mt-lg-0">
            <a class="text-decoration-none text-warning  me-5" href="Cart"><i class="bi-cart "></i>Cart @if($itemcheck != 0)<sup><span class="badge bg-danger">{{$itemcheck}}</span></sup>@endif</a>
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
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{$category->name}}
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="ProductList?cat={{$category->id}}&sub=0&brand=0">All {{$category->name}}</a></li>
            @foreach($datasubcategory as $catsub)
            @if($category->id == $catsub->cid)
            <li><a class="dropdown-item" href="ProductList?cat=0&sub={{$catsub->id}}&brand=0">{{$catsub->name}}</a></li>
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
<main class="main m-2">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-3 ">
        <div class="d-flex flex-column p-3 text-dark bg-warning shadow" style="width: 100%;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Search By</span>
          </a>
          <hr>
          <div class=" accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class=" accordion-item bg-warning border-0">
              <h2 class=" accordion-header " id="panelsStayOpen-headingOne">
                <button class="m-0 p-0 accordion-button text-dark text-decoration-none bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  BRANDS
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse  " aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body md-2 m-0 p-0">
                  <input class="col-11 border-top-0 border-end-0 border-start-0 bg-warning mb-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for brands.." title="Type in a brand">
                  <ul id="myUL" class="list-unstyled ps-0">
                   @foreach($databrand as $brand)
                    <li>
                      <label class="form-check-label" for="flexCheckDefault">
                        <a class="text-dark text-decoration-none" href="ProductList?cat=0&sub=0&brand={{$brand->id}}">{{$brand->name}}</a>
                      </label>
                    </li>
                    @endforeach
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>     
      </div>
      <div class="col-9 bg-white shadow">
         @if($search != '')
        <div class="row mt-2">
          
            <h5 class="md-2" >Showing results for the Search " {{$search}} "</h5>
          
        </div>
        <hr class="m-0">
        @endif
        <div class="row row-cols-1 row-cols-md-4 g-4 md-auto m-1">
        @foreach($searchlist as $item)
          <a class="text-decoration-none text-dark" href={{"ProductDetails/".$item->id}}>
          <div class="col">
          
            <div class="card h-100 shadow">
              <img  class="p-4" src="{{ URL::asset('assets/images/'.$item->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">{{$item->name}}</p>
                <p style="font-size:10px" class="m-0 p-0 card-text">{{$item->color}}</p>
                <h4 class="card-title">&#8377 {{$item->sprice}}</h4>
                
              </div>
              <div class="card-footer">
                <small class="text-muted">View more details <i class="bi bi-arrow-right"></i> </small>
              </div>
            </div>
          
          </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  </div>  
</main>
@endsection
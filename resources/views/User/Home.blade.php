@extends('User/Theme')
@section('usercontent')
<header class="p-3 bg-dark text-white sticky-top">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/User/Home" class="nav d-flex align-items-center text-decoration-none col-12 col-lg-auto mb-2 mb-md-0 mb-lg-0 me-lg-5">
        <img class="bi me-1" width="40" height="40" src="https://th.bing.com/th/id/R4b30b35f8df3db92caa4c707abdfde9d?rik=P%2bfWnnC7Aun%2fhA&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2009%2f09%2fcomputer-screen-icon_335081.png&ehk=u7FQZrl9ClBzzpR%2bK2WctwlD2wrOu1QEzbisuuxb0Ho%3d&risl=&pid=ImgRaw" alt="logo">
        <label class="navbar-brand nav-link px-1 text-warning" for="logo">Wiz Techz</label>
      </a>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-auto">
        <div class="input-group" >
          <input type="search" size="50" class="form-control form-control-dark" placeholder="Search for products, brands and more">
          <button class="btn btn-outline-secondary" type="button"><i class="bi-search "></i></button>
        </div>
      </form>
      <div class="navbar navbar-expand-lg col-12 col-lg-auto mb-3 mb-lg-0 me-lg-5">
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="navbar-brand text-warning dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ $LoggedUserInfo['name'] }}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="Profile"><i class="bi bi-person-circle"> </i> User Profile</a></li>
                <li><a class="dropdown-item" href="MyOrder"><i class="bi bi-handbag-fill"> </i> Orders</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-heart-fill"> </i> Whishlist</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../Auth/Logout"><i class="bi bi-power"> </i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="text-end">
      <a class="text-decoration-none text-warning fs-5" href=""><i class="bi-cart "></i>Cart<sup><span class="badge bg-danger">0</span></sup></a>
      </div>
    </div>
  </div>
</header>
<nav class="navbar navbar-expand-lg navbar-white bg-white shadow">
  <div class=" me-lg-auto ms-lg-auto">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class=" mt-1" width="70" height="70" src="https://th.bing.com/th/id/Rd05e168594a4adbc13589e963e16388e?rik=38EYuhDfwQHsYQ&riu=http%3a%2f%2fwww.newdesignfile.com%2fpostpic%2f2015%2f02%2fcomputer-icon-desktop_248447.png&ehk=N4kFuxxDfqArW4NXDVb12KgKe6AeoQz8D3L55mcoDTU%3d&risl=&pid=ImgRaw" alt="">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
          </ul>
        </li>
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
          <img src="https://rukminim1.flixcart.com/flap/844/140/image/249048271c5e106d.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://rukminim1.flixcart.com/flap/844/140/image/249048271c5e106d.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://rukminim1.flixcart.com/flap/844/140/image/249048271c5e106d.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
    <div>
      	<img width="100%"  src="../img/banner.jpg">
    </div>
    <div class="bg-dark row m-auto">
    	<div class="col-4 text-center text-white">
    		<h4>Something</h4>
    		<p>Select from wide range of brands available.Choose the best one that suits you.</p>
    	</div>
    	<div class="col-4 text-center text-white">
    		<h4>Something</h4>
    		<p>Select from wide range of brands available.Choose the best one that suits you.</p>
    	</div>
    	<div class="col-4 text-center text-white">
    		<h4>Something</h4>
    		<p>Select from wide range of brands available.Choose the best one that suits you.</p>
    	</div>
    </div>
  </section>

  <section class="m-2">
    <div class="card">
      <div class="bg-dark card-header">
            <a class="text-warning fs-2 navbar-brand" href="#">Active</a>
      </div>
      <div class="card-body bg-dark">
        <div class="row">
        <a href="/User/ProductList">
          <div class="card me-auto ms-auto bg-light" style="width: 18rem;">
            <img src="https://th.bing.com/th/id/Rf8b5ed303c4eb3b3ab9c67b890139bbe?rik=fmz5hMM%2fUUWmJw&riu=http%3a%2f%2f2.bp.blogspot.com%2f_9vgJ1nwu_xA%2fTA4K0LghblI%2fAAAAAAAADnE%2fgFShkPhdra4%2fs640%2fmonitortestscreenshot5.gif&ehk=2zlOEJl3Ffj7nhqnPdJ8YqrdH288vX4xwA67xYNCNWo%3d&risl=&pid=ImgRaw" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> 
            </div>
          </div>
        </a>
        </div>
      </div>
    </div>
  </section>

@endsection
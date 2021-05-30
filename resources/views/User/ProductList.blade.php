@extends('Theme')
@section('content')
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
                <li><a class="dropdown-item" href="Logout"><i class="bi bi-power"> </i> Logout</a></li>
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
<main class="main m-2">
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-3 ">
        <div class="d-flex flex-column p-3 text-dark bg-warning shadow" style="width: 100%;">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Filter</span>
          </a>
          <div class="d-grid gap-2 d-md-block">
            <a class="visually-hidden btn btn-outline-light btn-sm text-dark text-decoration-none" href="">New <i class="bi-x"></i></a>
          </div>
          <hr>
          <h6>CATEGORIES</h6>
          <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="btn btn-toggle align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                Home
              </button>
              <div class="collapse" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <ul class="list-unstyled ps-2">
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse-sub" aria-expanded="false">
                        Home
                      </button>
                      <div class="collapse" id="home-collapse-sub">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">Overview</a></li>
                          <li><a href="#" class="link-dark rounded">Updates</a></li>
                          <li><a href="#" class="link-dark rounded">Reports</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-unstyled ps-2">
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse-sub" aria-expanded="false">
                        Home
                      </button>
                      <div class="collapse" id="home-collapse-sub">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">Overview</a></li>
                          <li><a href="#" class="link-dark rounded">Updates</a></li>
                          <li><a href="#" class="link-dark rounded">Reports</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-unstyled ps-2">
                    <li class="mb-1">
                      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse-sub" aria-expanded="false">
                        Home
                      </button>
                      <div class="collapse" id="home-collapse-sub">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                          <li><a href="#" class="link-dark rounded">Overview</a></li>
                          <li><a href="#" class="link-dark rounded">Updates</a></li>
                          <li><a href="#" class="link-dark rounded">Reports</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </ul>
              </div>
            </li>
          </ul>
          <hr>
          <div class=" accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class=" accordion-item bg-warning border-0">
              <h2 class=" accordion-header " id="panelsStayOpen-headingOne">
                <button class="m-0 p-0 accordion-button text-dark text-decoration-none bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  PRICE
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body md-2 m-0 p-0">
                  <div class="row mt-2">
                    <div class="col-3">
                      <select class="bg-warning">
                        <option value="Min" selected class="">Min</option>
                        <option value="250" class="">₹250</option>
                        <option value="500" class="">₹500</option>
                        <option value="1000" class="">₹1000</option>
                        <option value="2000" class="">₹2000</option>
                        <option value="5000" class="">₹5000</option>
                        <option value="10000" class="">₹10000</option>
                        <option value="20000" class="">₹20000</option>
                        <option value="30000" class="">₹30000</option>
                        <option value="40000" class="">₹40000</option>
                        <option value="50000" class="">₹50000</option>
                        <option value="60000" class="">₹60000</option>
                      </select>
                    </div>
                    <div class="col-3 text-center">to</div>
                    <div class="col-3">
                      <select class="bg-warning">
                        <option value="250" class="">₹250</option>
                        <option value="500" class="">₹500</option>
                        <option value="1000" class="">₹1000</option>
                        <option value="2000" class="">₹2000</option>
                        <option value="5000" class="">₹5000</option>
                        <option value="10000" class="">₹10000</option>
                        <option value="20000" class="">₹20000</option>
                        <option value="30000" class="">₹30000</option>
                        <option value="40000" class="">₹40000</option>
                        <option value="50000" class="">₹50000</option>
                        <option value="60000" class="">₹60000</option>
                        <option value="Max" selected class="">₹60000+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class=" accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class=" accordion-item bg-warning border-0">
              <h2 class=" accordion-header " id="panelsStayOpen-headingOne">
                <button class="m-0 p-0 accordion-button text-dark text-decoration-none bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  BRANDS
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse " aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body md-2 m-0 p-0">
                  <input class="col-11 border-top-0 border-end-0 border-start-0 bg-warning mb-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for brands.." title="Type in a brand">
                  <ul id="myUL" class="list-unstyled ps-0">
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <a class="text-dark text-decoration-none" href="#">Adele</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">renu</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">maya</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">sankar</a>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class=" accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <div class=" accordion-item bg-warning border-0">
              <h2 class=" accordion-header " id="panelsStayOpen-headingOne">
                <button class="m-0 p-0 accordion-button text-dark text-decoration-none bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  CUSTOMER RATINGS
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse mt-2" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body md-2 m-0 p-0">
                  <ul id="myUL" class="list-unstyled ps-0">
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                        <a class="text-dark text-decoration-none" href="#">4<i style="font-size:80%" class="bi-star-fill"></i> & above</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">3<i style="font-size:80%" class="bi-star-fill"></i> & above</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">2<i style="font-size:80%" class="bi-star-fill"></i> & above</a>
                      </label>
                    </li>
                    <li>
                      <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                      <label class="form-check-label" for="flexCheckDefault">
                          <a class="text-dark text-decoration-none" href="#">1<i style="font-size:80%" class="bi-star-fill"></i> & above</a>
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>     
      </div>
      <div class="col-9 bg-white shadow">
        <div class="row mt-2">
          <nav class="m-0 " style="--bs-breadcrumb-divider: '>'; font-size:80%" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
            <h5 class="md-2" >Heading <sub class="text-muted"> (Showing 41 – 80 products of 244 products)</sub></h5>
          </nav>
          <div class="btn-group">
            <h6>Sort By</h6>
            <a href="#" class="me-2 ms-2 active " aria-current="page">Active link</a>
            <a href="#" class="me-2 ms-2">Link</a>
            <a href="#" class="me-2 ms-2">Link</a>
          </div>
        </div>
        <hr class="m-0">
        <div class="row row-cols-1 row-cols-md-4 g-4 md-auto m-1">
          <div class="col">
            <div class="card h-100 shadow">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row m-1">
          <div class="col-2">
            <label for="">Page 1 of 378</label>
          </div>
          <div class="col-10 d-flex justify-content-center">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>  
</main>
@endsection
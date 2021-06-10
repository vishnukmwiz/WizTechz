@extends('Admin/Theme')
@section('admincontent')

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a href="Home" class="text-light fs-4 text-decoration-none me-auto m-2">
    <span>Wiz Techz Admin </span>
  </a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3 d-none d-sm-none d-md-block">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../Auth/Logout">Sign out</a>
    </li>
  </ul>
</header>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" style="top:0" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link fs-6" aria-current="page" href="Home">
              <i class="bi bi-house-door"> Dashboard</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Orders">
             <i class="bi bi-file-earmark"> Orders</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="ProductList">
              <i class="bi bi-cart"> Products</i> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Vendors">
              <i class="bi bi-person-lines-fill"> Vendors</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-6" href="Customers">
              <i class="bi bi-person-circle"> Customers</i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fs-6" href="Reports">
              <i class="bi bi-flag"> Reports</i> 
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link fs-6" href="../Auth/Logout">
              <i class="bi bi-power"> Sign out</i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 m-2">
    <table class="table table-bordered" id="example">

<thead>
  <th>S/N</th>
  <th>Firstname</th>
  <th>Lastname</th>
</thead>

<tbody>
  <tr>
    <td>1</td>
    <td>Saheedb</td>
    <td>Babatunde</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Saheedb</td>
    <td>Babatunde</td>
  </tr>

  <tr>
    <td>3</td>
    <td>Saheedb</td>
    <td>Babatunde</td>
  </tr>
</tbody>

</table>

<center>
<button class="btn btn-success" id="json">JSON</button>

<button class="btn btn-success" id="pdf">PDF</button>

<button class="btn btn-success" id="csv">CSV</button>

</center>


      
    </div>
  </div>
</div>
<script type="text/javascript" src="src/jquery-3.3.1.slim.min.js"></script>

<script type="text/javascript" src="src/jspdf.min.js"></script>

<script type="text/javascript" src="src/jspdf.plugin.autotable.min.js"></script>

<script type="text/javascript" src="src/tableHTMLExport.js"></script>

<script type="text/javascript">
  
  $("#json").on("click",function(){
    $("#example").tableHTMLExport({
      type:'json',
      filename:'sample.json'
    });
  });

  $("#pdf").on("click",function(){
    $("#example").tableHTMLExport({
      type:'pdf',
      filename:'sample.pdf'
    });
  });

  $("#csv").on("click",function(){
    $("#example").tableHTMLExport({
      type:'csv',
      filename:'sample.csv'
    });
  });

</script>

</body>
</html>
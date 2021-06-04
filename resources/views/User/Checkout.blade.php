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
<section class="section m-4">
    <div class="container-fluid ps-4 pe-4 pd-3 pt-3">
        <div class="row">
            <div class="col col-8">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            LOGIN
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body  m-1 ">
                            <div class="row">
                              <table class="col-4 p-2">
                                  <tbody>
                                      <tr >
                                          <td><label for="">Name</label></td>
                                          <td><strong><label for="">&nbsp {{$datauser->name}}</label></strong></td>
                                      </tr>
                                      <tr >
                                          <td><label for="">Number</label></td>
                                          <td><strong><label for="">&nbsp {{$datauser->phone}}</label></strong></td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class="col-8 p-2">
                                  <a class="float-end" href="Logout">Logout and login to another account</a>
                              </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <button class="btn btn-warning btn-lg collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    CONTINUE CHECKOUT
                                    </button>
                                </div>
                            </div>
                            <span class="text-muted">Please note that upon clicking "Logout" you will lose all items in cart and will be redirected to home page.</span>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            DELIVERY ADDRESS
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                          @foreach($dataaddress as $address)
                            <div class="form-check mt-3">
                              <input class="form-check-input" type="radio" name="aid" value="{{$address->id}}" id="{{$address->id}}" checked>
                              <label class="form-check-label" for="{{$address->id}}">
                                <strong>{{$address->name}}</strong><button class="btn btn-light btn-sm me-2 ms-2" disabled>{{$address->type}}</button><strong class="me-5">{{$address->phone}}</strong> <a href="EditAddress/{{$address->id}}" class="btn btn-light btn-sm ms-5">&nbsp Edit &nbsp</a> <br>
                                <address>
                                  <label for="">{{$address->locality}}</label><br>
                                  <label for="">{{$address->address}}</label><br>
                                  <label for="">{{$address->city}}</label><br>
                                  <label for="">{{$address->district}}</label><br>
                                  <label for="">{{$address->state}}</label><br>
                                  <label for="">{{$address->landmark}}</label><br>
                                  <label for="">{{$address->pin}}</label><br>
                                </address>
                              </label>
                            </div>
                          @endforeach
                            <button id="delbtn" class="btn btn-warning collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                DELIVER ON SELECTED ADDRESS
                            </button>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ORDER SUMMARY
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                          @foreach($corder as $child)
                        <div class="unititem">
                            <div class="row d-flex flex-row justify-content-center">
                                <div class="col-2">
                                    <img width="100%" src="{{ URL::asset('assets/images/'.$child->item->image) }}" alt="">
                                </div>
                                <div class="col-6">
                                    <h4 class="md-2" >{{$child->item->name}}</h4>
                                    <tr>
                                        <td><label class="fs-6" for="">Seller</label></td>
                                        <td><label class="fs-6" for="">{{$child->item->vendor->name}}</label></td>
                                    </tr>
                                    <h3>Price: &#8377 @if($child->quantity ==1){{$child->item->sprice}} @else {{$child->item->sprice}} X {{$child->quantity}} = &#8377 {{(int)$child->item->sprice * (int)$child->quantity}}@endif</h3>
                                </div>
                                <div class="col-4">
                                    <tr>
                                        <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                         <td><label class="fs-7 fw-bold" for=""> <!--{{$d= date_add($child->created_at,date_interval_create_from_date_string("5 days"))}}--> {{date_format($d,"d-M-y")}} </label></td> 
                                    </tr>
                                    

                                </div>
                            </div>
                            <div class="mt-2 d-flex flex-row align-items-center justify-content-start gap-3">
                                <form action="/addtoqty/{{$child->id}}" method="POST">
                                {{csrf_field()}}
                                <table>
                                  <tr>
                                    <td><label for="">Quantity</label></td>
                                    <td><input name="quantity" type="number" class="form-control" style="width:70px;"  size="1" min="1" max="5" value="{{$child->quantity}}"></td>
                                    <td><button type="submit" class="btn btn-warning">Save</button></td>
                                  </tr>
                                </table>
                                </form>
                                  
                                <a href="/removecart/{{$child->id}}" class="mbtn ms-2 me-2  fs-5 text-decoration-none">REMOVE</a>
                                @if(Session::get('saved'))
                                    <label for="">{{ Session::get('saved') }}</label>
                                  @endif
                            </div>
                           
                        </div>
                        <hr>
                      @endforeach
                            <div class="row">
                            <div class="col">
                            <button class=" btn btn-warning btn-lg collapsed float-end " type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            CONTINUE
                            </button>
                            </div>
                            
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="accordion-item mt-3">
                        <h2 class="accordion-header" id="headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PAYMENT OPTIONS
                          </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="accordion" id="accordionpay">
                                    <div class="accordion-item ">
                                        <h5 class="accordion-header" id="payheadingOne">
                                          <input class="form-check-input" type="radio" name="checkpay"    id="Checkpay1"     data-bs-toggle="collapse"      data-bs-target="#collapseOnePay" aria-expanded="false"       aria-controls="collapseOnePay">
                                          Credit / Debit / ATM Card
                                        </h5>
                                        <div id="collapseOnePay" class="accordion-collapse collapse "     aria-labelledby="headingOnePay"                                       data-bs-parent="#accordionpay">
                                            <div class="accordion-body">
                                                <div class="form-check mt-3">
                                                    <label class="form-check-label col-6" for="Checkpay1">
                                                        <form action="" class="form">
                                                            <input type="number" class="form-control" pattern="   [0-9]{16}            "       placeholder="Card    Number">
                                                            <div class="row mt-3">
                                                                <div class="col"> Valid thru</div>
                                                                <div class="col">
                                                                    <select class="form-control" name="month"     required=""               tabindex="4">
                                                                        <option disabled="" value="MM">MM</   option>
                                                                        <option value="01">01</option>
                                                                        <option value="02">02</option>
                                                                        <option value="03">03</option>
                                                                        <option value="04">04</option>
                                                                        <option value="05">05</option>
                                                                        <option value="06">06</option>
                                                                        <option value="07">07</option>
                                                                        <option value="08">08</option>
                                                                        <option value="09">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col">
                                                                    <select class="form-control" name="year"      required=""                tabindex="5">
                                                                        <option disabled="" value="YY">YY</   option>
                                                                        <option value="21">21</option>
                                                                        <option value="22">22</option>
                                                                        <option value="23">23</option>
                                                                        <option value="24">24</option>
                                                                        <option value="25">25</option>
                                                                        <option value="26">26</option>
                                                                        <option value="27">27</option>
                                                                        <option value="28">28</option>
                                                                        <option value="29">29</option>
                                                                        <option value="30">30</option>
                                                                        <option value="31">31</option>
                                                                        <option value="32">32</option>
                                                                        <option value="33">33</option>
                                                                        <option value="34">34</option>
                                                                        <option value="35">35</option>
                                                                        <option value="36">36</option>
                                                                        <option value="37">37</option>
                                                                        <option value="38">38</option>
                                                                        <option value="39">39</option>
                                                                        <option value="40">40</option>
                                                                        <option value="41">41</option>
                                                                        <option value="42">42</option>
                                                                        <option value="43">43</option>
                                                                        <option value="44">44</option>
                                                                        <option value="45">45</option>
                                                                        <option value="46">46</option>
                                                                        <option value="47">47</option>
                                                                        <option value="48">48</option>
                                                                        <option value="49">49</option>
                                                                        <option value="50">50</option>
                                                                        <option value="51">51</option>
                                                                        <option value="52">52</option>
                                                                        <option value="53">53</option>
                                                                        <option value="54">54</option>
                                                                        <option value="55">55</option>
                                                                        <option value="56">56</option>
                                                                        <option value="57">57</option>
                                                                        <option value="58">58</option>
                                                                        <option value="59">59</option>
                                                                        <option value="60">60</option>
                                                                    </select>
                                                                </div>  
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-6 d-flex flex-row gap-3">
                                                                    <input type="password"    class="form-control"     pattern=" [0-9]          {3}   "  size="3"   min="000"     max="999" maxlength="3"                 placeholder="CVV">
                                                                    <button class="btn btn-warning">Pay</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mt-3">
                                        <h5 class="accordion-header" id="headingTwoPay">
                                          <input class="form-check-input" type="radio" name="checkpay"    id="Checkpay2"     data-bs-toggle="collapse"      data-bs-target="#collapseTwoPay" aria-expanded="false"       aria-controls="collapseTwoPay">
                                          Cash On Delivery
                                        </h5>
                                        <div id="collapseTwoPay" class="accordion-collapse collapse "     aria-labelledby="headingTwoPay"                                       data-bs-parent="#accordionpay">
                                            <div class="accordion-body">
                                                <div class="form-check">
                                                    <label class="form-check-label col-12" for="Checkpay2">
                                                        <form action="" class="form">
                                                            <div class="row mt-3">
                                                                <div class="col-3">
                                                                <img width="100%" src="https://1001freedownloads.s3.amazonaws.com/vector/thumb/106064/CAPTCHA_001.png" alt="">
                                                                </div>
                                                                <div class="col-6 d-flex flex-row gap-3">
                                                                    <input type="password"    class="form-control"     pattern=" [0-9]          {3}   "  size="3"   min="000"     max="999" maxlength="3"                 placeholder="Enter The Captcha">
                                                                    <button class="btn btn-warning">Confirm Order</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-4">
                <div class="card">
                    <h5 class="card-header">PRICE DETAILS</h5>
                    <div class="card-body me-3 ms-3">
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Price</label></div>
                            <div class="col-6 text-end"><label class=" fs-5" for="">Seller</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Discount</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Seller</label></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6"><label class="text-start fs-5" for="">Delivery Charges</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-5" for="">Seller</label></div>
                        </div>
                        <hr class="dash">
                        <div class="row">
                            <div class="col-6"><label class="text-start fs-4" for="">Total Payable</label></div>
                            <div class="col-6 text-end"><label class="text-end fs-4" for="">Seller</label></div>
                        </div>
                        <hr class="dash">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('Theme')
@section('content')
{{View::make('Header')}}
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
                              <table class="col-3 m-3">
                                  <tbody>
                                      <tr >
                                          <td><label for="">Name</label></td>
                                          <td><strong><label for="">&nbsp Name</label></strong></td>
                                      </tr>
                                      <tr >
                                          <td><label for="">Number</label></td>
                                          <td><strong><label for="">&nbsp Name</label></strong></td>
                                      </tr>
                                  </tbody>
                              </table>
                              <div class="col-8 m-3">
                                  <a class="float-end" href="">Logout and login to another account</a>
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
                            <div class="form-check mt-3">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                              <label class="form-check-label" for="flexRadioDefault1">
                                <strong>Name</strong><button class="btn btn-light btn-sm me-2 ms-2" disabled>Home</button><strong class="me-5">number</strong> <button class="btn btn-light btn-sm ms-5">&nbsp Edit &nbsp</button> <br>
                                <address>this the address</address>
                              </label>
                            </div>
                            <div class="form-check mt-3">
                              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                              <label class="form-check-label" for="flexRadioDefault2">
                                <strong>Name</strong><button class="btn btn-light btn-sm me-2 ms-2" disabled>Home</button><strong class="me-5">number</strong> <button class="btn btn-light btn-sm ms-5">&nbsp Edit &nbsp</button> <br>
                                <address>this the address</address>
                              </label>
                            </div>
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
                            <div class="unititem">
                                <div class="row d-flex flex-row justify-content-center">
                                    <div class="col-2">
                                        <img width="100%" src="https://maxcdn.icons8.com/iOS7/PNG/512/Alphabet/100-512.png" alt="">
                                    </div>
                                    <div class="col-6">
                                        <h4 class="md-2" >Heading</h4>
                                        <tr>
                                            <td><label class="fs-6" for="">Seller</label></td>
                                            <td><label class="fs-6" for="">new</label></td>
                                        </tr>
                                        <h3>Price: &#8377 45346</h3>
                                    </div>
                                    <div class="col-4">
                                        <tr>
                                            <td><label class="fs-7" for="">Delivery Expected by</label></td>
                                            <td><label class="fs-7" for="">new</label></td>
                                        </tr>
                                    </div>
                                </div>
                                <div class="mt-2 d-flex flex-row justify-content-start gap-3">
                                    <button style="border-radius: 50%;" class="btn btn-warning"><</button>
                                    <input type="text" class="" size="1" disabled value="1">
                                    <button style="border-radius: 50%;" class="btn btn-warning">></button>
                                    <a href="" class="mbtn ms-2 me-2  fs-5 text-decoration-none">REMOVE</a>
                                </div>
                            </div>
                            <hr>
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
<header class="header-one py-2">
    <nav>
        <div class="container">
            <div class="row hidden">
                <div class="col-12 navbar nav navbar-expand-lg mt-4">
                    <a href="{{route('home')}}" class="m-0 p-0 nav-link navbar-brand"><img class="img-fluid mx-0 w-50 h-auto" src="{{asset('/')}}assets/front/img/whitelogo.png" alt=""></a>
                    <!-- <button class="navbar-toggler btn-primary border-0" data-bs-target="#menu" data-bs-toggle="collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse menu fw-bolder" id="menu">
                        <ul class="ms-auto  navbar-nav navbar-brand text-uppercase">
                            <li class="nav-item"><a href="{{ route('website.package') }}" class="nav-link fs-5 px-2 text-white menuhover"><small>Tour</small></a></li>
                            <li class="nav-item"><a href="{{ route('website.places') }}" class="nav-link fs-5 px-2 text-white menuhover"><small>Places</small></a></li>
                            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link fs-5 px-2 fontfamily text-white menuhover"><small>Contact us</small></a></li>
                            @if(Session::get('customer_id'))
                                <li class="nav-item dropdown">
                                    <a href="" class="nav-link fs-5 px-2 text-white menuhover dropdown-toggle" data-bs-toggle="dropdown">{{Session::get('customer_name')}}</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('customer.dashboard')}}" class="dropdown-item">My Order</a></li>
                                        <li><a href="{{route('customer.logout')}}" class="dropdown-item">Logout</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item"><a href="{{route('customer.login')}}" class="nav-link fs-5 px-2 fontfamily text-white menuhover">Login</a></li>
                            @endif
                            <li class="nav-item"><a href="{{route('website.package')}}" class="btn btn-outline-primary text-white border-3 fw-bolder ms-3 px-4 me-5"><small>BOOK NOW</small></a></li>
                        </ul>
                    </div>
                </div>
                <form action="{{ route('website.package.search') }}" method="GET" id="">
                    @csrf
                    <div class="row my-travel-search">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Tour Packages</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Custom Tour Pack</button>
                                </li>
                                {{-- <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                                </li> --}}
                              </ul>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    



                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

                            <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        {{-- <label>From</label> --}}
                                        <select class="form-control select2" placeholder="ok">
                                        <option>CITY/HOTEL/RESORT/AREA</option> 
                                        <option>Dhaka, Bangladesh</option> 
                                        <option>Cox's Bazar, Bangladesh</option> 
                                        <option>Jessore, Bangladesh</option> 
                                        <option>Chhittagong, Bangladesh</option> 
                                        <option>Saidpur, Bangladesh</option>
                                        <option>Sylet Osmani, Bangladesh</option> 
                                        <option>London, United Kingdom</option> 
                                        <option>New York, United States</option> 
                                        <option>Chhittagong, Bangladesh</option> 
                                        </select>
                                    </div>

                                    {{-- <div class="col-md-3">
                                         <label>To</label> 
                                        <select class="form-control select2">
                                        <option>TO</option> 
                                        <option>Sylet Osmani, Bangladesh</option> 
                                        <option>London, United Kingdom</option> 
                                        <option>New York, United States</option> 
                                        <option>Chhittagong, Bangladesh</option> 
                                        <option>Saidpur, Bangladesh</option> 
                                        </select>
                                    </div> --}}

                                    <div class="col-sm-6 col-md-2">
                                        <div class="wrapper">
                                            <label for="datepicker">CHECK IN
                                                <input type="date" id="datepicker" autocomplete="off">
                                            </label>	
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        <div class="wrapper">
                                            <label for="datepicker">CHECK OUT
                                                <input type="date" id="datepicker" autocomplete="off">
                                            </label>	
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-2">
                                        {{-- <label>From</label> --}}
                                        <select onchange="enableRooms(this)" class="form-control select2" placeholder="ok">
                                        <option>ADULTS</option> 
                                        <option>01</option> 
                                        <option>02</option> 
                                        <option>03</option> 
                                        <option>04</option> 
                                        <option>05</option> 
                                        <option>06</option> 
                                        <option>07</option> 
                                        <option>08</option> 
                                        <option>09</option> 
                                        <option>10</option> 
                                        <option value="others" >OTHERS</option>
                                       
                                        </select>
                                        <input type="number" class="form-control d-none" id="inpuut_rooms" placeholder="ADULTS">
                                        
                                        <script type="text/javascript">
                                            function enableRooms(answer){
                                                console.log(answer.value);
                                                if(answer.value=="others")
                                                {
                                                    document.getElementById('inpuut_rooms').classList.remove('d-none');
                                                }
                                            };
                                        </script>

                                    </div>
                                    <div class="col-sm-6 col-md-2">
                                        {{-- <label>From</label> --}}
                                        <select onchange="enableinput(this)" class="form-control select2" placeholder="ok">
                                        <option>CHILD</option> 
                                        <option>01</option> 
                                        <option>02</option> 
                                        <option>03</option> 
                                        <option>04</option> 
                                        <option>05</option> 
                                        <option>06</option> 
                                        <option>07</option> 
                                        <option>08</option> 
                                        <option>09</option> 
                                        <option>10</option> 
                                        <option value="others" >OTHERS</option>
                                        <input type="number" class="form-control d-none" id="inpuut_fild" placeholder="CHILD">
                                        
                                        </select>
                                    </div>

                                    <script type="text/javascript">
                                        function enableinput(answer){
                                            console.log(answer.value);
                                            if(answer.value=="others")
                                            {
                                                document.getElementById('inpuut_fild').classList.remove('d-none');
                                            }
                                        };
                                    </script>
                                    <div class="sarch-btn">
                                        <button type="submit" class="btn btn-warning">Search</button>
                                    </div>
                                </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <h1 style="text-align: center;
                            text-transform: uppercase;
                            font-family: sans-serif;
                            color: green;">Coming Soon....</h1>
                            <div class="sarch-btn" style="margin-top: 15px;">
                                <button type="button" class="btn btn-warning" style="background: transparent;
                                border: none;display: block;"></button>
                            </div>
                        </div>
                        
                      </div>






                    <!------
                    <div class="input-group custom-mt300">
                        <<<<<<<< <div class="card rounded-3 w-100">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 my-5 mx-3">
                                        <button class="btn btn-lg btn-primary p-3"><i class="text-warning fa-solid fa-map me-3"></i> Select Location</button>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"></div>
                                </div>
                            </div>
                        </div>
                       <input style="left: 80px; top: 148px; position: absolute; color: white; font-size: 27px; font-weight: 600; word-wrap: break-word" type="text" name="title" id="example-search-input" placeholder="Search Tour Name">
                        <span class="input-group-append">
                            <button class="btn btn-outline-secondary bg-white text-primary ms-2 p-3 border-0 rounded-pill ms-n3" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span> >>>>>>>>>>>>>>
                        <div class="w-100 h-100 position-relative">
                            <div style="width: 1143px; height: 386px; left: 80px; top: 0px; position: absolute">
                                <div style="width: 1143px; height: 234px; left: 0px; top: 46px; position: absolute; background: white; border-radius: 13px"></div>
                           
                                <div style="width: 917.98px; height: 93px; left: 121.47px; top: 0px; position: absolute; background: white; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.20); border-radius: 13px"></div>
                                <<<<<<<<<<<<< <div style="width: 317.61px; height: 93px; left: 54.76px; top: 126px; position: absolute; background: #0B47C5; border-radius: 13px"></div>
                                <div style="width: 317.61px; height: 93px; left: 404.23px; top: 126px; position: absolute; background: #0B47C5; border-radius: 13px"></div> >>>>>>>>>>>
                                <div style="width: 280px; height: 73px; left: 435px; top: 313px; position: absolute; background: #0B47C5; border-radius: 14px"></div>
                            
                                <<<<<<<<<<< <div style="width: 317.61px; height: 93px; left: 753.70px; top: 126px; position: absolute; background: #0B47C5; border-radius: 13px"></div> >>>>>>>>>
                            </div>
                            
                            <div class="d-flex">
                                <input class=" border-5 border-primary rounded-5 px-5 py-2" style="width: 300px; left: 160px; top: 148px; position: absolute; font-size: 27px; font-weight: 600; word-wrap: break-word" type="text" name="title" id="example-search-input" placeholder="Search Tour">
                                <input class=" border-5 border-primary rounded-5 px-5 py-2" style="width: 300px; left: 490px; top: 148px; position: absolute; font-size: 27px; font-weight: 600; word-wrap: break-word" type="text" name="duration" id="example-search-input" placeholder="Days">
                                <input class=" border-5 border-primary rounded-5 px-5 py-2" style="width: 300px; left: 830px; top: 148px; position: absolute; font-size: 27px; font-weight: 600; word-wrap: break-word" type="text" name="duration" id="example-search-input" placeholder="Person">
                            </div>
                            <<<<<<<<<<< <button type="submit" class="btn" style="left: 845px; top: 143px; position: absolute; color: white; font-size: 27px; font-weight: 600; word-wrap: break-word"><i class="fa-regular text-warning fa-user"></i> Person</button> >>>>>>>>>
                            <button type="submit" class="btn" style="left: 584px; top: 315px; position: absolute; color: white; font-size: 35px; font-weight: 600; word-wrap: break-word"> Search</button>
                            
                            
                            <div style="left: 300px; top: 24px; position: absolute; color: #003B94; font-size: 30px; font-weight: 500; word-wrap: break-word">Tour Packages</div>
                            <div style="left: 645px; top: 24px; position: absolute; color: #003B94; font-size: 30px; font-weight: 500; word-wrap: break-word">Custom Tour Pack</div>
                        </div>
                    </div>----->
                    
                </form>
            </div>
        </div>
    </nav>
</header>

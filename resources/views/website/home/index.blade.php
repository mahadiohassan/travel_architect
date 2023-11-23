@extends('website.master')

@section('body')

    <section class="">
        <div class="container py-5">

            <!--amazing places to enjoy section start here-->
            <div class="card px-5 py-4 footer-gradiant mb-5">
                <div class="row">
                        <div class="col-md-6 py-5">
                            <h1 class="amaazing fw-bolder text-uppercase text-white ">Amazing places to <br>enjoy your Travel</h1>
                            <p class="text-white ">Picture yourself wandering through ancient cobblestone streets, surrounded by historical architecture that whispers tales of centuries past. Feel the exhilaration of standing atop majestic mountains, breathing in the crisp, invigorating air as you take in panoramic views that stretch beyond imagination.</p>
                            <a href="{{ route('website.places') }}" class="btn btn-lg btn-outline-warning border-3 fw-bold  mt-2 px-4 me-5">Explore More</a>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-content-end">
                            <img width="400px" class="img-fluid" src="{{asset('/')}}assets/front/img/sittingman.png" alt="">
                        </div>
                
                
                    
                </div>
            </div>

            <!--amazing places to enjoy section End here-->

            <!--beautiful world places section Start here-->
            <div class="row ">
                
                <div class="col-md-6">
                    <h1 class="amaazing fw-bolder text-uppercase">Beautiful places of the world</h1>
                </div>
             
            </div>
            <!--beautiful world places section End here-->
        </div>
    </section>

    <!--country pictures section Start here-->
    <section class="">
        <div class="container">
            <div class="row  justify-content-center">
                <div class="text-end">
                    <a class="btn btn-warning mb-3 mr-1" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-warning mb-3 " href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
                            @foreach ($places->chunk(3) as $chunkPlace)
                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                <div class="row">
                                    @foreach ($chunkPlace as $place)
                                    <div class="col-md-4 mb-3">
                                        <div class="card border-0">
                                            <a class="nav-link " href="">
                                                <video autoplay muted class="img-fluid pb-2 h-100" preload="metadata" src="{{asset($place->place_image)}}" alt="">
                                                {{-- <video muted class="img-fluid pb-2 h-100" preload="metadata" src="{{asset($place->place_image)}}" alt=""> --}}
                                            </a>
                                        </div>
                                        <div class="card-footer border-0 mt-3">
                                            <h5 class="card1 fw-bold text-center card-title ">{{$place->place_name}}</h5>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @php $i++; @endphp☻
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12">
                    <img class="img-fluid" src="{{asset('/')}}assets/front/img/dotbox.png" alt="">
                </div>
            </div>
        </div>
    </section>

    
    <section class="">
        <div class="container">
            <div class="row ">
                <h1 class="amaazing fw-bolder text-uppercase text-center text-uppercase mb-5">Most popular tours for you</h1>
            </div>
            <div class="row  justify-content-center">
                  
                <div class="text-end">
                    <a class="btn btn-warning mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-warning mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
                            @foreach ($tours->chunk(3) as $chunk)
                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                <div class="row">
                                    @foreach ($chunk as $tour)
                                        <div class="col-md-4 mb-3">
                                            <div class="card border-0 shadow">
                                                <img class="img-fluid card-img-top " alt="100%x280" src="{{asset($tour->package_image)}}" >
                                                <div class="card-body">
                                                    <h4 class="card-title fw-bold fs-5">{{ $tour->tour_title }}</h4>
                                                    <p class="card-text">{{ $tour->tour_address }}</p>
                                                </div>
                                                <div class="card-footer d-flex justify-content-center align-items-center">
                                                    <a href="{{route('package-detail', ['id' => $tour->id])}}" class=""> <button type="button" class="btn btn-primary rounded-3">Book Now</button></a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                   
                                  
                                    @endforeach
                                </div>
                            </div>
                            @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
       
               
            </div>
        </div>
    </section>
    <section class="mt-5">
        <div class="container mt-3">
            <div class="row ">
                <h1 class="amaazing fw-bolder text-uppercase text-center text-uppercase mb-5">See What Our Client Says</h1>
            </div>
            <div class="row  justify-content-center">
                  
                <div class="text-end">
                    <a class="btn btn-warning mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-warning mb-3 " href="#carouselExampleIndicators5" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
    
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
                            @foreach ($reviews->chunk(2) as $chunk)
                            <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                <div class="row">
                                    @foreach ($chunk as $review)
                                        <div class="col-md-6 mb-3">
                                            <div class="card border-0 shadow d-flex justify-content-center align-items-center ">
                                                <img class="rounded-circle" style="width: 150px;" alt="100%x280" src="{{asset($review->client_image)}}" >
                                                <div class="card-body">
                                                    <i class="fa-solid fa-quote-left"></i>
                                                    <p class="card-text mx-4 fst-italic fw-light ">{{ $review->client_description }}</p>
                                                    <h4 class="card-title text-end fw-bold fs-5 me-5">- {{ $review->client_name }}</h4>
                                                    <p class="text-end me-5">
                                                        @for($i = 1; $i <= 5; $i++)
                                                        @if($review->client_rating >= $i)
                                                            <i class="fa-solid fa-star text-orange"></i>
                                                        @else
                                                            <i class="fa-regular fa-star text-orange"></i>
                                                        @endif
                                                       @endfor 
                                                    </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @php $i++; @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
       
               
            </div>
        </div>
    </section>



<section class="home-video-slider">
    <div class="container">
        <div class="home-video-slider-top">
            <h1>Beautiful Places of the world</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    @foreach ($places as $place)
                    <div class="post-slide">
                        <div class="post-img">
                            <video autoplay muted class="img-fluid pb-2 h-100" preload="metadata" src="{{asset($place->place_image)}}" alt="">
                        </div>
                        <h3 class="post-title">
                            <a href="#">{{$place->place_name}}</a>
                        </h3>
                        
                    </div>
                    @endforeach
     
                
                </div>
            </div>
        </div>
    </div>
</section>





    <section class="home-pakeg">
        <div class="container">
            <div class="home-pakeg-header">
                <h1>Most populer tour for you</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="single-home-pakeg">
                        <img src="{{asset('front/img/card1.png')}}" alt="" title="" class="img-fluid">
                        <h3>Bhutan</h3>
                        <ul>
                            <li><i class="fa-regular fa-clock"></i><span>3Days</span></li>
                            <li><i class="fa-solid fa-person"></i><span>2Person</span></li>
                            <li><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>500</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-home-pakeg">
                        <img src="{{asset('front/img/card2.png')}}" alt="" title="" class="img-fluid">
                        <h3>Malaysia</h3>
                        <ul>
                            <li><i class="fa-regular fa-clock"></i><span>3Days</span></li>
                            <li><i class="fa-solid fa-person"></i><span>2Person</span></li>
                            <li><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>500</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-home-pakeg">
                        <img src="{{asset('front/img/card3.png')}}" alt="" title="" class="img-fluid">
                        <h3>Vietnam</h3>
                        <ul>
                            <li><i class="fa-regular fa-clock"></i><span>3Days</span></li>
                            <li><i class="fa-solid fa-person"></i><span>2Person</span></li>
                            <li><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>500</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="single-home-pakeg">
                        <img src="{{asset('front/img/card2.png')}}" alt="" title="" class="img-fluid">
                        <h3>Bangladesh</h3>
                        <ul>
                            <li><i class="fa-regular fa-clock"></i><span>3Days</span></li>
                            <li><i class="fa-solid fa-person"></i><span>2Person</span></li>
                            <li><i class="fa-solid fa-bangladeshi-taka-sign"></i><span>500</span></li>
                        </ul>
                        <button type="button" class="btn btn-primary">Book Now</button>
                    </div>
                </div>

            </div>
            <div class="home-pakeg-all">
                <button type="button" class="btn btn-outline-primary">View All</button>
            </div>
        </div>
    </section>


    <div class="demo">
        <h1>Our Client's Thought</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial">
                            
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vehicula nibh. Duis eu interdum dolor. Pellentesque mollis nisl vitae.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="{{asset('front/img/client2.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">-Williamson</h4>
                                    <span class="post">Web Developer</span>
                                    
                                </div>
                            </div>
                        </div>
     
                        <div class="testimonial">
                           
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vehicula nibh. Duis eu interdum dolor. Pellentesque mollis nisl vitae.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="{{asset('front/img/client3.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">-kristiana</h4>
                                    <span class="post">Web Designer</span>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                           
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vehicula nibh. Duis eu interdum dolor. Pellentesque mollis nisl vitae.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="{{asset('front/img/client4.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">-kristiana</h4>
                                    <span class="post">Web Designer</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="testimonial">
                           
                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget vehicula nibh. Duis eu interdum dolor. Pellentesque mollis nisl vitae.
                            </p>
                            <div class="testimonial-content">
                                <div class="pic">
                                    <img src="{{asset('front/img/client5.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="name">-kristiana</h4>
                                    <span class="post">Web Designer</span>
                                    
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="home-blog">
        <div class="container">
            <div class="home-blog-header">
            <h1>Our Latest Blog About Tour</h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="home-single-blog">
                        <img src="{{asset('front/assets/img/01.png')}}" alt="" title="" class="img-fluid">
                        <h1>Tongariro Alpine Crossing</h1>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iste iusto, minima, consectetur ipsa asperiores eum illum odit, dolor reiciendis similique sint! Suscipit aliquid eum odit quisquam quaerat fuga perspiciatis?</h5>
                        <a href=""><p>Read more....</p></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home-single-blog">
                        <img src="{{asset('front/assets/img/02.png')}}" alt="" title="" class="img-fluid">
                        <h1>Milford Sound Cruise</h1>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iste iusto, minima, consectetur ipsa asperiores eum illum odit, dolor reiciendis similique sint! Suscipit aliquid eum odit quisquam quaerat fuga perspiciatis?</h5>
                        <a href=""><p>Read more....</p></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="home-single-blog">
                        <img src="{{asset('front/assets/img/03.png')}}" alt="" title="" class="img-fluid">
                        <h1>Arival in Auckland</h1>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iste iusto, minima, consectetur ipsa asperiores eum illum odit, dolor reiciendis similique sint! Suscipit aliquid eum odit quisquam quaerat fuga perspiciatis?</h5>
                        <a href=""><p>Read more....</p></a>
                    </div>

                </div>
                <div class="home-blog-btn">
                    <button type="button" class="btn btn-primary btn-lg">More Blog</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('website.master')
@section('body')
<section class="all-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="all-blog-hero">
                    <h1>Read Our Blogs</h1>
                </div>
            </div>
        </div>  
    </div>
</section>

<section class="all-blog-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home-single-blog">
                    <img src="{{asset('front/img/slider3.jpeg')}}" alt="" title="" class="img-fluid">
                    <div class="all-blog-text-details">
                        <h1>Tongariro Alpine Crossing</h1>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iste iusto, minima, consectetur ipsa asperiores eum illum odit, dolor reiciendis similique sint! Suscipit aliquid eum odit quisquam quaerat fuga perspiciatis?</h5>
                         <a href=""><p>Read more....</p></a>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-single-blog">
                    <img src="{{asset('front/img/slider4.jpeg')}}" alt="" title="" class="img-fluid">
                    <div class="all-blog-text-details">
                    <h1>Tongariro Alpine Crossing</h1>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iste iusto, minima, consectetur ipsa asperiores eum illum odit, dolor reiciendis similique sint! Suscipit aliquid eum odit quisquam quaerat fuga perspiciatis?</h5>
                    <a href=""><p>Read more....</p></a>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>


@endsection

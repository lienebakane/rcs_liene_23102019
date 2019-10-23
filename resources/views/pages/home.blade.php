@extends('layouts.main')

@section('my_content')

<style>
    .navbar {
        position: absolute;
    }
    </style>

<div id="myCarousel" class="carousel slide carousel-fix" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/carousel_5.jpg" class="img-fluid" alt="Responsive image" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>
                        Cras justo odio, dapibus ac facilisis in, egestas eget quam.
                       <br> Nullam id dolor id nibh ultricies vehicula ut id elit.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_2.jpg" class="img-fluid" alt="Responsive image" />
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>
                        Cras justo odio, dapibus ac facilisis in,<br>
                        egestas eget quam.

                    </p>

                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/img/carousel_6.jpg" class="img-fluid" alt="Responsive image" />
            <div class="container">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<div class="container marketing">


    <div class="row">

        @foreach ($myposts as $post)
        <div class="col-lg-4">
            <img src="{{$post->img}}" class="img-fluid" alt="Responsive image" />
            <h4>{{ $post->title }}</h4>
            <p>{{ $post->price }}</p>
            <a class="btn btn btn-outline-dark btn-sm" href="/products/{{ $post->id }}" role="button">BUY</a>

        </div>

        @endforeach


    </div>
    <!-- /.row -->

    <div class="padding-button text-center">
        <a class="btn btn-dark" href="/products" role="button">View all &raquo;</a>
    </div>


  </div>
  <!-- /.container -->

  <section class="contact-me text-center">
      <div class="container">
        <h1 class="contact-me-heading">Have questions?</h1>
          <a href="/about-us" class="btn btn-outline-dark my-2">CONTACT ME</a>
        </p>
      </div>
    </section>

@endsection

@extends('layouts.main')

@section('my_content')


        <div class="section main-product">
            <div class="container">
        <div class="row big-product">
              <a href="/products/7"><img  src="{{ asset('img/7_800bigpx.jpg') }}"
            class="img-fluid"
            alt="Responsive image" /></a>
        </div></div></div>

<div class="container">
        <div class="container marketing">

          <div class="row row-padding">

                @foreach ($posts as $post)
                <div class="col-lg-4">
                    <img src="{{$post->img}}" class="img-fluid" alt="Responsive image" />
                    <h4>{{ $post->title }}</h4>
                    <p>{{ $post->price }}</p>
                    <a class="btn btn btn-outline-dark btn-sm" href="/products/{{ $post->id }}" role="button">BUY</a>

                </div>

                @endforeach

          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>



    <div class="end">
       </div>
    @endsection

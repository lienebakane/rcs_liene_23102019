@extends('layouts.main')

@section('my_content')

<main>
        <div class="container">
          <div class="row">


            <div class="container">
              <div class="row featurette">
                    <div class="col-lg-6">
                            <img src="{{$my_one_post->img}}" class="img-fluid" alt="Responsive image" />

                                </div>
                <div class="col-lg-6">
                  <h2 class="featurette-heading">
                        {{$my_one_post->title}} <br>
                    <span class="text-muted">It’ll blow your mind.</span>
                  </h2>
                  <p class="lead price">
                       {{$my_one_post->price}}
                  </p>

                  <p class="lead">
                     Size: {{$my_one_post->size}}
                   </p>
                   <p class="lead">
                    Color: {{$my_one_post->color}}
                   </p>

                  <p class="lead">
                        {{$my_one_post->body}}
                   </p>

                  <p>
                </div>
              </div>

              <!-- <hr class="featurette-divider" /> -->
              <div class="container">
              <div class="row featurette">
                <div class="col-lg-12">
                  <h3>
                        Product information:
                  </h3>
                  <p>
                                <ul class="lead">
                                <li>Unisex style</li>
                                <li>100% Soft cotton (Heather colors 52% Cotton, 48% Polyester)</li>
                                <li>Light fabric (142 g/m²)</li>
                                <li>Tear away label</li>
                                <li>Runs true to size</li>
                                </ul>
                                </p>

                                <h3>
                                        Washing and drying instructions:
                                  </h3>
                                <ul class="lead">
                               <li> Machine wash: warm (max 40C or 105F);</li>
                                <li>Non-chlorine: bleach as needed;</li>
                               <li> Tumble dry: low heat;</li>
                               <li> Iron, steam or dry: medium heat;</li>
                              <li>  Do not dry clean.</li>
                            </ul>
                </div>
              </div></div>


            </div>
          </div>
        </div>




        @endsection







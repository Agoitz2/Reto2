
import Otros from "../../img/eventos/Otros.jpg";




@extends('layout.layout')

@section('nav')
  @include('nav.generalNav')
@endsection



@section('content')



  <div class="title h1 text-center">Conciertos</div>
  <!-- Card Start -->
  <div class="card">
    <div class="row ">

      <div class="col-md-7 px-3">
        
          <h4 class="card-title">Horizontal Card with Carousel - Bootstrap 4 </h4>
          <p class="card-text">
            The Carousel code can be replaced with an img src, no problem. The added CSS brings shadow to the card and some adjustments to the prev/next buttons and the indicators is rounded now. As in Bootstrap 3
          </p>
          <p class="card-text">Made for usage, commonly searched for. Fork, like and use it. Just move the carousel div above the col containing the text for left alignment of images</p>
          <br>
          <a href="#" class="mt-auto btn btn-primary  ">Read More</a>
        
      </div>

      <div class="col-sm-5">
        <img class="d-block w-100" src="https://picsum.photos/150?image=380" alt="">
      </div>
  </div>
  <!-- End of card -->




@endsection
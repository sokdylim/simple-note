@extends('components.layout')@section('body')
@include('script')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{asset('images/emoji.jpg')}}" class="d-block w-100" alt="About Me">
      </div>
      <div class="carousel-item">
      <img src="{{asset('images/hobby.jpg')}}" class="d-block w-100" alt="My Hobby">
      </div>
      <div class="carousel-item">
      <img src="{{asset('images/contact.jpg')}}" class="d-block w-100" alt="Contact Me">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
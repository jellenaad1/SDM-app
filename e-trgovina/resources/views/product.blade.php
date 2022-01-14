@extends('master')
@section("content")
<div class=" custom-product">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>

    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>


  </div>
  <div class="carousel-inner">
      @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
      <img src="{{$item['photo']}}" class="slider-img offset-sm-3">
      
      <div class="carousel-caption slider-text text-black">
        <h5 >{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    @endforeach

    
    
  </div>
  <button class="carousel-control-prev btn btn-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next btn btn-dark" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="trending-wrapper">
        <h3>
        <small class="text-muted">Najprodavaniji proizvodi</small>
        </h3>
        @foreach ($products as $item)
        <a href="detail/{{$item['id']}}" class="text-underline-hover">
    <div class="float-start w-25 p-2 border border-5 rounded-circle " >
    

      <img src="{{$item['photo']}}" class="trending-image">
      
      <div class="caption text-black text-center">
        <h5 >{{$item['name']}}</h5>
        
      </div>
   
    </div>
    </a>
    @endforeach
      </div>
</div>



@endsection



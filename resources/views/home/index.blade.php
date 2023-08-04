@extends('layout.main')

@section('container')
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/c1.jpg" class="d-block w-100 carousel-img" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
          ipsum provident excepturi minima molestias repudiandae, assumenda
          delectus tempora consectetur explicabo quod! Quaerat veritatis
          inventore ullam veniam officiis consectetur illo dicta!
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/c2.jpg" class="d-block w-100 carousel-img" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
          ipsum provident excepturi minima molestias repudiandae, assumenda
          delectus tempora consectetur explicabo quod! Quaerat veritatis
          inventore ullam veniam officiis consectetur illo dicta!
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/c3.jpg" class="d-block w-100 carousel-img" alt="..." />
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
          ipsum provident excepturi minima molestias repudiandae, assumenda
          delectus tempora consectetur explicabo quod! Quaerat veritatis
          inventore ullam veniam officiis consectetur illo dicta!
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <!-- end carousel -->

@endsection


  
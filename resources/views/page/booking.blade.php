@extends('layouts.app')

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')

<style type="text/css">
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
  <div class="content">
    <div class="container_12">
        <h3>Reservation</h3>

  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="{{URL('images/anan1.jpg')}}" alt="">
                <div class="banner">
                  <div>Anatara Riverside Bangkok Resort</div>
                  <br>
                  <span>Bangkok</span> </div>
              </li>
              <li><img src="{{URL('images/anan2.jpg')}}" alt=""></li>
              <li><img src="{{URL('images/anan3.jpg')}}" alt=""></li>
              <li><img src="{{URL('images/anan4.jpg')}}" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- MAP -->
<div class="container-fluid">
  <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.2276125948983!2d100.48955891532458!3d13.70465990207536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2988f1adf8723%3A0x6ecf1cb74f8e8f16!2sAnantara+Riverside+Bangkok+Resort!5e0!3m2!1sth!2sth!4v1510828198350" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div></center>
</div>
<div class="clear"></div>
<div class="center">
  <div class="room">
    <form method="post" action="http://localhost:3000/bookingroom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4" style="">Name : <input type="text" name="name" ></div>
          <div class="col-sm-4" style="">Surname : <input type="text" name="surname"></div>
          <div class="col-sm-4" style="">Address : <input type="text" name="address"></div>
        </div><br>
        <div class="row">
          <div class="col-sm-4" style="">E-mail : <input type="text" name="email"></div>
          <div class="col-sm-4" style="">Tel number : <input type="text" name="tel"></div>
        </div><br>
        <input type="submit" value="Submit" name="">
        <a href="{{URL('/rent')}}">
        <button type="button" class="btn-warning">Cancel</button></a>
      </div>
  </div>
</form>


@endsection
@extends('layouts.app')

@section('content')
<center>
<!--google map-->
<div class="row">
  <div class="col-md-3" style="">
    <div class="panel">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.0595245968017!2d98.39552788244742!3d7.870135629790442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30502e00ae85b40b%3A0x239b5b8d2ac46ebc!2z4Lio4Li54LiZ4Lii4LmM4Lin4Li04LiK4Liy4LiB4Liy4Lij4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Liq4LiH4LiC4Lil4Liy4LiZ4LiE4Lij4Li04LiZ4LiX4Lij4LmM!5e0!3m2!1sth!2sth!4v1509417055684" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>


<!-- title -->
<div class="section-margin-top">
            <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">กรอกข้อมูลเพื่อจอง</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>
</div>
</center>
<body>

<center>
<!-- API -->
<form method="post" action="http://localhost:3000/bookingroom">
<div class="row">
  <div class="col-md-6" style="" >Name : <input type="text" name="name" ></div><br>
  <div class="col-md-6" style="">Surname : <input type="text" name="surname"></div><br>
  <div class="col-md-6" style="">Address : <input type="text" name="address"></div><br>
  <div class="col-md-6" style="">E-mail : <input type="text" name="email"></div><br>
  <div class="col-md-6" style="">Tel : <input type="text" name="tel"></div><br>
  <input type="submit" value="Submit" name="">
  <a href="{{URL('/rent')}}">
    <button type="button" class="btn-warning">Cancel</button></a>
</div>
</form>
</center>
@endsection
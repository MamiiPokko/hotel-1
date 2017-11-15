@extends('layouts.app')

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
        <h3>ROOM TYPE</h3>

<div class="center">
<div class="room">
    <div class="room-image-holder">
        <img src="images/hotel1.jpg">
            <div class="room-gallery-link"><i class="ficon ficon-20 ficon-map-attraction"></div>
        <div id="tabs">
          <ul>
            <li><a href="#tabs-1">Deluxe Room</a></li>
          </ul>
        <div class="clear"></div>
            <div class="tab_cont" id="tabs-1"> <img src="images/hotelpic.jpg" alt="">
            <div class="extra_wrapper">
              <div class="text1">Anantara Riverside Bangkok Resort</div>
                <ul class="room-amenities-list">
                        <li class="room-amenitylist-item">
                            <i class="ficon ficon-20 ficon-views"></i>
                            <span>วิว: เมือง</span>
                        </li>
                        <li class="room-amenitylist-item">
                            <i class="ficon ficon-20 ficon-sqm"></i>
                            <span>35 ม²/377 ฟุต²</span>
                        </li>
                            <li class="room-amenitylist-item">
                                <i class="ficon ficon-20 ficon-bed"></i>
                                <span>2 เตียงเดี่ยว หรือ 1 เตียงใหญ่</span>
                            </li>
                        </ul>
                        <a href="{{URL('/booking')}}">
                        <button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Booking</button></a>
            </div>
          </div>
      </div>
</div>




 
@endsection 
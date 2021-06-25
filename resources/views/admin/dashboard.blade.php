@extends('layout.admin')
@section('main')


<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
          
              <h3>{{$date->new}}</h3>

              <p>visit page </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('product.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$sp->count()}}</h3>

              <p>New Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('product.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$bil->count()}}<sup style="font-size: 20px">order</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('ordermanagement.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$kh->count()}}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{route('user.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <h3>{{number_format($total)}}đ</h3>
          

              <p>total money </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="300" version="1.1" width="722.025" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.8px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="49.21875" y="261.375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,261.375H697.025" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="202.28125" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,202.28125H697.025" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="143.1875" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,143.1875H697.025" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="84.09375" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,84.09375H697.025" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="49.21875" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M61.71875,25H697.025" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="580.4621278857837" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2021</tspan></text><text x="297.93225243013364" y="273.875" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,6.8125)"><tspan dy="4.3984375" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2020</tspan></text><path fill="#74a5c2" stroke="none" d="M61.71875,219.36328333333333C79.4733596597813,219.87542916666666,114.98257897934386,222.9374703125,132.73718863912515,221.41186666666667C150.49179829890645,219.88626302083333,186.001017618469,209.42817083333333,203.7556272782503,207.15845416666667C221.31725205042528,204.91340833333334,256.4405015947752,205.1679796875,274.00212636695016,203.35281666666668C291.56375113912515,201.53765364583336,326.68700068347505,195.18290659722226,344.24862545565003,192.63715000000002C362.0032351154313,190.0634180555556,397.5124544349939,182.76750885416666,415.2670640947752,182.8748625C433.0216737545565,182.98221614583335,468.53089307411904,204.4652861111111,486.28550273390033,193.49597916666667C503.8471275060753,182.64590381944444,538.9703770504252,102.06621622928179,556.5320018226003,95.59733333333335C573.9006417071689,89.19953706261512,608.6379214763061,135.31303052884618,626.0065613608748,142.02926250000002C643.7611710206561,148.89474407051284,679.2703903402187,147.95045625,697.025,149.92418750000002L697.025,261.375L61.71875,261.375Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#3c8dbc" d="M61.71875,219.36328333333333C79.4733596597813,219.87542916666666,114.98257897934386,222.9374703125,132.73718863912515,221.41186666666667C150.49179829890645,219.88626302083333,186.001017618469,209.42817083333333,203.7556272782503,207.15845416666667C221.31725205042528,204.91340833333334,256.4405015947752,205.1679796875,274.00212636695016,203.35281666666668C291.56375113912515,201.53765364583336,326.68700068347505,195.18290659722226,344.24862545565003,192.63715000000002C362.0032351154313,190.0634180555556,397.5124544349939,182.76750885416666,415.2670640947752,182.8748625C433.0216737545565,182.98221614583335,468.53089307411904,204.4652861111111,486.28550273390033,193.49597916666667C503.8471275060753,182.64590381944444,538.9703770504252,102.06621622928179,556.5320018226003,95.59733333333335C573.9006417071689,89.19953706261512,608.6379214763061,135.31303052884618,626.0065613608748,142.02926250000002C643.7611710206561,148.89474407051284,679.2703903402187,147.95045625,697.025,149.92418750000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="219.36328333333333" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="132.73718863912515" cy="221.41186666666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="203.7556272782503" cy="207.15845416666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="274.00212636695016" cy="203.35281666666668" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="344.24862545565003" cy="192.63715000000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="415.2670640947752" cy="182.8748625" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="486.28550273390033" cy="193.49597916666667" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="556.5320018226003" cy="95.59733333333335" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="626.0065613608748" cy="142.02926250000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="697.025" cy="149.92418750000002" r="4" fill="#3c8dbc" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#eaf3f6" stroke="none" d="M61.71875,240.36914166666668C79.4733596597813,240.148525,114.98257897934386,241.69875104166667,132.73718863912515,239.486675C150.49179829890645,237.2745989583333,186.001017618469,223.65191805555554,203.7556272782503,222.67253333333332C221.31725205042528,221.70379409722221,256.4405015947752,233.56351145833332,274.00212636695016,231.69417916666666C291.56375113912515,229.824846875,326.68700068347505,209.58188993055555,344.24862545565003,207.717875C362.0032351154313,205.8333763888889,397.5124544349939,214.74018229166668,415.2670640947752,216.700125C433.0216737545565,218.66006770833334,468.53089307411904,232.70899861111113,486.28550273390033,223.3974166666667C503.8471275060753,214.18704756944445,538.9703770504252,148.42262946017496,556.5320018226003,142.61232083333334C573.9006417071689,136.86586175184163,608.6379214763061,170.70152835393773,626.0065613608748,177.17034583333333C643.7611710206561,183.78291481227106,679.2703903402187,190.49598645833333,697.025,194.93786666666665L697.025,261.375L61.71875,261.375Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#a0d0e0" d="M61.71875,240.36914166666668C79.4733596597813,240.148525,114.98257897934386,241.69875104166667,132.73718863912515,239.486675C150.49179829890645,237.2745989583333,186.001017618469,223.65191805555554,203.7556272782503,222.67253333333332C221.31725205042528,221.70379409722221,256.4405015947752,233.56351145833332,274.00212636695016,231.69417916666666C291.56375113912515,229.824846875,326.68700068347505,209.58188993055555,344.24862545565003,207.717875C362.0032351154313,205.8333763888889,397.5124544349939,214.74018229166668,415.2670640947752,216.700125C433.0216737545565,218.66006770833334,468.53089307411904,232.70899861111113,486.28550273390033,223.3974166666667C503.8471275060753,214.18704756944445,538.9703770504252,148.42262946017496,556.5320018226003,142.61232083333334C573.9006417071689,136.86586175184163,608.6379214763061,170.70152835393773,626.0065613608748,177.17034583333333C643.7611710206561,183.78291481227106,679.2703903402187,190.49598645833333,697.025,194.93786666666665" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="61.71875" cy="240.36914166666668" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="132.73718863912515" cy="239.486675" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="203.7556272782503" cy="222.67253333333332" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="274.00212636695016" cy="231.69417916666666" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="344.24862545565003" cy="207.717875" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="415.2670640947752" cy="216.700125" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="486.28550273390033" cy="223.3974166666667" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="556.5320018226003" cy="142.61232083333334" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="626.0065613608748" cy="177.17034583333333" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="697.025" cy="194.93786666666665" r="4" fill="#a0d0e0" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 89.7122px; top: 154px; display: none;"><div class="morris-hover-row-label">2011 Q2</div><div class="morris-hover-point" style="color: #a0d0e0">
  Item 1:
  2,778
</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 2:
  2,294
</div></div></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="752.025" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#3c8dbc" d="M376.0125,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,464.24025519497707,180.44625304313007" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#3c8dbc" stroke="#ffffff" d="M376.0125,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,467.07614732624415,181.4248826052307L503.6276459070204,194.03833029452744A135,135,0,0,1,376.0125,285Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f56954" d="M464.24025519497707,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,292.2973462783141,108.73398312817662" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#f56954" stroke="#ffffff" d="M467.07614732624415,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,289.60650205154565,107.40757544301087L250.43976941747115,88.10097469226493A140,140,0,0,1,508.35413279246563,195.6693795646951Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#00a65a" d="M292.2973462783141,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,375.9831784690488,243.333328727518" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#00a65a" stroke="#ffffff" d="M289.60650205154565,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,375.9822359912682,246.3333285794739L375.9700884998742,284.9999933380171A135,135,0,0,1,254.9245097954186,90.31165416754118Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="376.0125" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">In-Store Sales</tspan></text><text x="376.0125" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(1,0,0,1,0,0)"><tspan dy="160" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30</tspan></text></svg></div>
            </div>
          </div>
          
@stop()
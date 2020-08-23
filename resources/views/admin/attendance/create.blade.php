@extends('layouts.adminlayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Grid Layout</a> </div>
    <h1>Grid Layout (Full width)</h1>
  </div>
  <div class="container-fluid">
    <hr>
    
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>CLICK to Clock in For the day</h5>
          </div>
          <div class="widget-content">  
 <form action="{{ route("attendance.store") }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf          	           
            <button   value="1" class="btn btn-danger btn-large">Punch In</button>

          </form>            
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Number of times clock in</h5>
          </div>
          <div class="widget-content">
          	  <div class="container-fluid">

          	<div class="quick-actions_homepage">
      <ul class="quick-actions">
       
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success"></span><p class="joined-text">{{ $attendanceCounts }}
</p>

 </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
      </ul>
  </div>
    </div> </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
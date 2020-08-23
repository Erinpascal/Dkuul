@extends('layouts.adminlayout.admin_design')
@section('content')
<link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css')}}" />


<div id="content">
<div id="content-header">

</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Register Student</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route("users.store") }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf

            <div class="control-group">
              <label class="control-label"> Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"> Email :</label>
              <div class="controls">
                <input type="text" class="span11" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label"> Phone :</label>
              <div class="controls">
                <input type="text" class="span11" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}" />
              </div>
            </div>
            <div  class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls" name = "gender">
                <select name="gender" >
                  <option>Male</option>
                  <option>Female</option>
                </select>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Date of Birth (dd-mm)*</label>
              <div class="controls">
                <input type="date" name="dob" data-date="01-02-2013" data-date-format="dd-mm-yyyy" value="{{ old('dob', isset($user) ? $user->dob : '') }}" class="datepicker span11">
                <span class="help-block">Date with Formate of  (dd-mm-yy)</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">Picture upload input</label>
              <div class="controls">
                <input type="file" name="image" value="{{ old('image', isset($user) ? $user->image : '') }}" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"> Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" value="{{ old('address', isset($user) ? $user->address : '') }}" />
              </div>
            </div>

               <div class="control-group">
              <label class="control-label">ID Type</label>
              <div class="controls">
                <select name="idtype" >
                  <option>Ghana Card</option>
                  <option>Voter's ID Card</option>
                  <option>Passport</option>
                  <option>Driving Lisence</option>
                  <option>NHIS</option>
                 
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label"> ID No. :</label>
              <div class="controls">
                <input type="text" class="span11" name="idno" value="{{ old('idno', isset($user) ? $user->idno : '') }}" />
              </div>
            </div>


            <div class="control-group">
              <label class="control-label"> session :</label>
              <div class="controls">
                <input type="text" class="span11" name="session" value="{{ old('session', isset($user) ? $user->session : '') }}" />
              </div>
            </div>

           

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>

      
    </div>
    <div class="span6">
     
      
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Student Picture</h5>
        </div>
        <div class="widget-content">
          
          
          
          
          <img width="1000" height="1000" alt="User" src="{{ asset('images/backend_images/demo/pas.jpg') }}"> 
         
         
        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="{{ asset('js/backend_js/bootstrap-datepicker.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.toggle.buttons.js')}}"></script> 
<script src="{{ asset('js/backend_js/masked.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_common.js')}}"></script> 
<script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js')}}"></script>

@endsection
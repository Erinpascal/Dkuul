@extends('layouts.adminlayout.admin_design')
@section('content')

<link rel="stylesheet" href="{{ asset('css/backend_css/datepicker.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/select2.css')}}" />
<link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-wysihtml5.css')}}" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>



<div id="content">
<div id="content-header">

</div>
<div class="container-fluid">
   @if(Session::has('flash_message_success')) 
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{!! session('flash_message_success')!!}</strong>
</div>
        @endif 
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Register Users</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route("users.store") }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf

 
            <div class="control-group">
              <label class="control-label">Full Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder=" name" />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="email" class="span11" name="email" placeholder=" email" />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Tel :</label>
              <div class="controls">
                <input type="name" class="span11" name="phone" placeholder=" 0454*****" />
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address"  />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <select name="gender">
                  <option>Male</option>
                  <option>Female</option>
                
                </select>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Date Of Birth :</label>
              <div class="controls">
                <input type="date" class="span11" name="dob" placeholder=" " />
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Image :</label>
              <div class="controls">
                <input type="file" class="span11" name="image" placeholder=" 0454*****" />
                <img width="100" height="100" alt="User" id="profile-img-tag" src=""> 

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
              <label class="control-label">ID NO :</label>
              <div class="controls">
                <input type="text" class="span11" name="idno"  />
              </div>
            </div>

             <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password" class="span11" name="password" placeholder=" ******" />
              </div>
            </div>
            
        </div>
      </div>



      
    </div>
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Payment and Assignment</h5>
        </div>
        <div class="widget-content nopadding form-horizontal">

          <div class="control-group">
              <label class="control-label">Session</label>
              <div class="controls">
                <select name="session" >
                  <option>Morning Session</option>
                  <option>Afternoon Session</option>
                  <option>Evening Session</option>
                  
                </select>
              </div>
            </div>
          <div  class="control-group">
              <label class="control-label">Role</label>
              <div class="controls" name = "role_id">
                <select name="role_id" >
                  <option value="">-- choose role --</option>
                  @foreach($roles as $roles)
                  <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>


             <div  class="control-group">
              <label class="control-label">Driver</label>
              <div class="controls" name = "user_id">
                <select name="user_id" >
                  <option value="">-- choose driver --</option>
                  @foreach($users as $users)
                  <option value="{{ $users->id }}">{{ $users->name }}</option>
                  @endforeach
                </select>
              </div>
            </div>

              <div class="control-group">
              <label class="control-label">Payment</label>
              <div class="controls">
                <select name="payment" >
                  <option>Full Payment</option>
                  <option>Half Payment</option>

                </select>
              </div>
            </div>
            <div class="control-group">
              <label for="normal" class="control-label">Amount</label>
              <div class="controls">
                <input type="text" name="amount" class="span8 mask text">
                 </div>
            </div>
 
 <div class="form-actions">
              <button type="submit" class="btn btn-success pull-right">Save</button>
            </div>
          </form>
        </div>
      </div>
     
      
    </div>
  </div>
  </div>
  <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#profile-img").change(function(){
        readURL(this);
    });
</script>

  <script src="{{ asset('js/backend_js/bootstrap-datepicker.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.toggle.buttons.js')}}"></script> 
<script src="{{ asset('js/backend_js/masked.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.form_common.js')}}"></script> 
<script src="{{ asset('js/backend_js/wysihtml5-0.3.0.js')}}"></script> 
<script src="{{ asset('js/backend_js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/bootstrap-wysihtml5.js')}}"></script>


@endsection

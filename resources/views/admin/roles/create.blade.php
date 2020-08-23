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
          <h5>Create Roles</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="{{ route("roles.store") }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf

 
            <div class="control-group">
              <label class="control-label">Role :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" placeholder=" name" />
              </div>
            </div>



           

            <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
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
@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="">Students</a> <a href="#" class="current">View Student</a> </div>
    <h1>Students</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <a href="{{ route("users.create") }}"  class="btn btn-xs btn-primary">Create User</a>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Students</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>fullname</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Level</th>
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach($data as $user)
                <tr class="gradeX">
                    <td>@if($user->image)
             <img  src="{{ asset('images/'.$user->image) }}" height="100" width="100" alt="Blog Post Image">
              @endif</td>
                  <td>{{$user->name}}</td>
                  <td class="center">{{$user->gender}}</td>
                  <td class="center">{{$user->dob}}</td>
                  <td class="center">year one</td>
                  <td>

               <a class="btn btn-xs btn-info" href="{{ route('users.edit', $user->id) }}">edit</a>
               <a class="btn btn-xs btn-primary" href="{{ route('users.show', $user->id) }}">view</a>
               <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>

                  </td>
                </tr>
                @endforeach
                


                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

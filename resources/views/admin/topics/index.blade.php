@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="">Topics</a> <a href="#" class="current">View Topics</a> </div>
    <h1>Topics</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Topics</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Title</th>
                  
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                @foreach($topics as $topics)
                <tr class="gradeX">
                  <td>{{$topics->id}}</td>

                  <td>{{$topics->title}}</td>
                
           
            
            </td>
                  
            <td>
            <a href="{{ route('topics.edit', $topics->id) }}" class="btn btn-xs btn-warning" ><i class="material-icons">Edit</i></a>
 <form action="{{ route('topics.destroy', $topics->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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


      <!-- <script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script> -->
    
@endsection
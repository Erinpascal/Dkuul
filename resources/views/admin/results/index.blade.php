@extends('layouts.adminlayout.admin_design')
@section('content')
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="">Questions</a> <a href="#" class="current">View Questions</a> </div>
    <h1>Questions</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Results</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Date</th>                  
                  <th>Results</th>
                  <th></th>

                </tr>
              </thead>
              <tbody>
                                   @if (count($results) > 0)
                        @foreach ($results as $results)

                <tr class="gradeX" data-entry-id="{{ $results->id }}">
                                
                                <td>{{ $results->created_at }}</td>
                                <td>{{ $results->result }}/10</td>
                                <td>
                                    <a href="{{ route('results.show',[$results->id]) }}" class="btn btn-xs btn-primary">view</a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">@lang('quickadmin.no_entries_in_table')</td>
                        </tr>
                    @endif
                


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

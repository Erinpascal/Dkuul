@extends('layouts.adminlayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> results</a> <a href="#" class="current">results
</a> </div>
    <h1>My Results
</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
       
       
         
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>View result
</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content ">

            <table class="table table-bordered table-striped">
                       
                        
                        <tr>
                            <th>Test Result</th>
                            <td>{{ $test->result }}/10</td>
                        </tr>
                    </table>

          
                <?php $i = 1 ?>
                @foreach($results as $result)
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr class="test-option{{ $result->correct ? '-true' : '-false' }}">
                  <th style="width: 10%">Question #{{ $i }}</th>
                  <th>{{ $result->question->question_text}}</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>Options</td>
                        <td>
                                <ul>
                                @foreach($result->question->options as $option)
                                    <li style="@if ($option->correct == 1) font-weight: bold; @endif
                                        @if ($result->option_id == $option->id) text-decoration: underline @endif">{{ $option->option }}
                                        @if ($option->correct == 1) <em>(correct answer)</em> @endif
                                        @if ($result->option_id == $option->id) <em>(your answer)</em> @endif
                                    </li>
                                @endforeach
                                </ul>
                            </td>                
                        </tr>
               
              </tbody>
            </table>
            <?php $i++ ?>
                @endforeach
          </div>
        </div>
        <p>&nbsp;</p>

            <a href="{{ route('tests.index') }}" class="btn btn-default">Take another quiz</a>
            <a href="{{ route('results.index') }}" class="btn btn-default">See all my results</a>
        
      </div>
    </div>
  </div>
</div>




@endsection
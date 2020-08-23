@extends('layouts.adminlayout.admin_design')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>School quiz</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Answer these questions. There's no time limit.</h5>
            <span class="label label-info">Featured</span> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check">
              <thead>
               
              </thead>
              <tbody>
                    @if(count($questions) > 0)

           {!! Form::open(['method' => 'POST', 'route' => ['tests.store']]) !!}
                   <?php $i = 1; ?>
           @foreach($questions as $question)
            @if ($i > 1)  @endif

                <tr>
                  <td><input type="checkbox" /></td>
                  <td>
                    <div class="control-group">
              <label class="control-label">Question {{ $i }}.<br />{!! nl2br($question->question_text) !!}</label>
              <div class="controls">
              
               
<input
                            type="hidden"
                            name="questions[{{ $i }}]"
                            value="{{ $question->id }}">
                    @foreach($question->options as $option)
                        <br>
                        <label class="radio-inline">
                            <input
                                type="radio"
                                name="answers[{{ $question->id }}]"
                                value="{{ $option->id }}">
                            {{ $option->option }}
                        </label>
                    @endforeach


              </div>
            </div>
            
                  </td>
                </tr>
                 <?php $i++; ?>
        @endforeach
        @endif
            
              </tbody>
            </table>
          </div>
        </div>
        {!! Form::submit(trans('submit_quiz'), ['class' => 'btn btn-danger pull -right']) !!}
               {!! Form::close() !!}
        
      </div>
    </div>
  </div>
</div>



@endsection
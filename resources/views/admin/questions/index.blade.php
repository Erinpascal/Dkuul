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
      <div class="span10">
      <a href="{{ route('questions.create') }}" class="btn btn-xs btn-primary">Create Question</a>

       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>View Questions</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Topic</th>
                  <th>Question</th>                  
                  <th>Action</th>

                </tr>
              </thead>
              <tbody>
                                   @if (count($questions) > 0)

                @foreach($questions as $question)

                <tr class="gradeX" data-entry-id="{{ $question->id }}">
                  <td></td>

                  <td class="center">{{ $question->topic->title or '' }}</td>
                  <td class="center">{!! $question->question_text !!}</td>
                  <td>

               <a class="btn btn-xs btn-info" href="{{ route('questions.edit', $question->id) }}">edit</a>
               <a class="btn btn-xs btn-primary" href="{{ route('questions.show', $question->id) }}">view</a>
               <form action="{{ route('questions.destroy', $question->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                    </form>

                  </td>
                </tr>
                @endforeach
                


                </tr>
                                @endif

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

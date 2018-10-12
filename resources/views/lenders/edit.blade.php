@extends('layouts.app')

@section('title', '| Edit Lender')

@section('content')
<div class="row">

  <div class="col-md-8 col-md-offset-2">

    <h1>Edit Lender</h1>
    <hr>
    {{ Form::model($lender, array('route' => array('lenders.update', $lender->id), 'method' => 'PUT')) }}
    <div class="form-group">
      {{ Form::label('name', 'Name') }}
      {{ Form::text('name', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('description', 'Description') }}
      {{ Form::textarea('description', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('image', 'Image Url') }}
      {{ Form::text('image', null, array('class' => 'form-control')) }}
      <br>


      {{ Form::label('min_loan', 'Min Loan') }}
      {{ Form::number('min_loan', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('max_loan', 'Max Loan') }}
      {{ Form::number('max_loan', null, array('class' => 'form-control')) }}
      <br>


      {{ Form::label('min_apr', 'Min Apr') }}
      {{ Form::number('min_apr', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('max_apr', 'Max Apr') }}
      {{ Form::number('max_apr', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('min_tol', 'Min Tol') }}
      {{ Form::number('min_tol', null, array('class' => 'form-control')) }}
      <br>


      {{ Form::label('max_tol', 'Max Tol') }}
      {{ Form::number('max_tol', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::label('min_age', 'Min Age') }}
      {{ Form::number('min_age', null, array('class' => 'form-control')) }}
      <br>

      {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

      {{ Form::close() }}
    </div>
  </div>
</div>

@endsection

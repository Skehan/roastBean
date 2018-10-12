@extends('layouts.app')

@section('title', '| Create New Lender')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Create New Lender</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'lenders.store')) }}

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

            {{ Form::submit('Create Lender', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection

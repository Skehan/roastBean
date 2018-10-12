@extends('layouts.app')

@section('title', '| View Lender')

@section('content')

<div class="container">

    <h1>{{ $lender->name }}</h1>
    <hr>
    <p class="lead">{{ $lender->description }} </p>
    <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['lenders.destroy', $lender->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Lender')
    <a href="{{ route('lenders.edit', $lender->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Lender')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection

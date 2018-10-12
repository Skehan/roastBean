@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Lenders</h3></div>
                    <div class="panel-heading">Page {{ $lenders->currentPage() }} of {{ $lenders->lastPage() }}</div>
                    @foreach ($lenders as $lender)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('lenders.show', $lender->id ) }}"><b>{{ $lender->name }}</b><br>
<img src="{{ asset($lender->image) }}" alt="logo" />
                                    <p class="teaser">
                                       {{  str_limit($lender->description, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $lenders->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection

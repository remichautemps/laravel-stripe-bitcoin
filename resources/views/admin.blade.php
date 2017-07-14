@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-md-10">
            <h3>Orders</h3>
            @foreach ($orders as $order)
                <ul class="list-group">
                    <li class="list-group-item">
                        {{ $order->user()->first()->email}} - {{ $order->product()->first()->name }}
                    </li>
                </ul>
            @endforeach
        </div>
    </div>

@endsection
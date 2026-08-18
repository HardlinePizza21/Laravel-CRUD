@extends('layout.app')

@section('content')
    <div class="orders-section w-100">

        <div class="orders-header">
            <p class="eyebrow">History</p>
            <h1>Your Orders</h1>
            <p>Check the status of each of your orders.</p>
        </div>

        <div class="row justify-content-center">
            @forelse ($orders as $order)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a href="{{ route('order.show', ['id' => $order['id']]) }}">
                        <div class="order-card">
                            <img src="https://picsum.photos/seed/{{ $order['id'] }}/400/300" class="img-card"
                                alt="Orden #{{ $order['id'] }}">
                            <div class="card-body text-center">
                                <a href="{{ route('order.show', ['id' => $order['id']]) }}" class="order-status-btn">
                                    {{ $order['status'] }}
                                </a>
                                <p class="order-date">Ordered at: {{ $order['created_at']->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </a>
                </div>

            @empty
                <div class="col-12 text-center">
                    <p class="text-soft">Todavía no tienes órdenes registradas.</p>
                </div>
            @endforelse
        </div>

    </div>
@endsection

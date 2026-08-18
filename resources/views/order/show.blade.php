@extends('layout.app')

@section('content')
    <div class="order-detail-section">

        <div class="order-detail-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://picsum.photos/seed/{{ $order['id'] }}/500/500" class="img-fluid order-detail-img"
                        alt="Orden #{{ $order['id'] }}">
                </div>

                <div class="col-md-8">
                    <div class="card-body order-detail-body">

                        <p class="eyebrow">Orden #{{ $order['id'] }}</p>

                        <div class="order-detail-header">
                            <span class="order-status-btn">{{ $order['status'] }}</span>
                            <span class="order-total">${{ number_format($order['total'], 2) }}</span>
                        </div>

                        <hr class="order-divider">

                        <dl class="order-meta">
                            <div class="order-meta-row">
                                <dt>ID de orden</dt>
                                <dd>{{ $order['id'] }}</dd>
                            </div>
                            <div class="order-meta-row">
                                <dt>Estado</dt>
                                <dd>{{ $order['status'] }}</dd>
                            </div>
                            <div class="order-meta-row">
                                <dt>Total</dt>
                                <dd>${{ number_format($order['total'], 2) }}</dd>
                            </div>
                            <div class="order-meta-row">
                                <dt>Fecha de creación</dt>
                                <dd>{{ $order['created_at']->format('d/m/Y H:i') }}</dd>
                            </div>
                            <div class="order-meta-row">
                                <dt>Última actualización</dt>
                                <dd>{{ $order['updated_at']->format('d/m/Y H:i') }}</dd>
                            </div>
                            <div class="order-meta-row">
                                <dt>Tiempo transcurrido</dt>
                                <dd>{{ $order['created_at']->diffForHumans() }}</dd>
                            </div>
                        </dl>

                        <div class="row align-items-center">
                            <a href="{{ route('order.index') }}" class="order-back-link col-6">← Go back to orders</a>

                            <form method="POST" action="{{ route('order.delete') }}" class="col-6 mt-3 d-flex justify-content-end">
                                @csrf
                                <input type="hidden" name="id" value="{{ $order['id'] }}">
                                <input type="submit" class="btn btn-danger" value="Delete" />
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

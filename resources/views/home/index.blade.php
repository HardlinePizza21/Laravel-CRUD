@extends('layout.app')

@section('title', 'Home')

@section('content')
    <section class="home-hero">
        <p class="eyebrow">software architecture</p>
        <h1>First Workshop </h1>

        <div class="hero-actions">
            <a href="{{ route('order.create') }}" class="hero-btn hero-btn--primary">Create Order</a>
            <a href="{{ route('order.index') }}" class="hero-btn hero-btn--secondary">View Orders</a>
        </div>
    </section>
@endsection
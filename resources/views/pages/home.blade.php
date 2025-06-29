@extends('app')
@section('title', 'Anasayfa | Feliz Beautyland')
@section('description', 'Welcome to Feliz Beautyland, your one-stop destination for all beauty needs.')
@section('keywords', 'beauty, cosmetics, skincare, haircare, Feliz Beautyland')
@section('author', 'Feliz Beautyland Team')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <header class="home-header">
        <h1>Feliz Beautyland'e Hoş Geldiniz</h1>
        <p>Güzelliğinizi Keşfedin</p>
        <button>Randevu Alın</button>
    </header>
@endsection

@section('scripts')

@endsection
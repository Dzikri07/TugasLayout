@extends('layouts.app')

@section('title', 'Dashboard')
@section('header-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
    <div class="bg-white p-4 rounded shadow">Total Cabang: 3</div>
    <div class="bg-white p-4 rounded shadow">Total Transaksi: 125</div>
    <div class="bg-white p-4 rounded shadow">Total Stok: 342</div>
    <div class="bg-white p-4 rounded shadow">Total User: 8</div>
</div>
<div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-2">Selamat Datang di Jayusman Market</h2>
    <p>Ini adalah halaman dashboard. Silakan kelola data melalui menu di samping.</p>
</div>
@endsection
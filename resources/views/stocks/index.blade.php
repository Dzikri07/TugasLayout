@extends('layouts.app')

@section('title', 'Stok Barang')
@section('header-title', 'Stok Barang')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Daftar Stok</h2>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nama Barang</th>
                <th class="py-2 px-4 border-b">Jumlah</th>
                <th class="py-2 px-4 border-b">Cabang</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b">1</td>
                <td class="py-2 px-4 border-b">Beras 5kg</td>
                <td class="py-2 px-4 border-b">50</td>
                <td class="py-2 px-4 border-b">Cabang Pusat</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
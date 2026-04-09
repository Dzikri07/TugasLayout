@extends('layouts.app')

@section('title', 'Stok Barang')
@section('header-title', 'Stok Barang')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Daftar Stok</h2>
    <x-table :headers="['ID', 'Nama Barang', 'Jumlah', 'Cabang']">
        <tr>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">Beras 5kg</td>
            <td class="py-2 px-4 border-b">50</td>
            <td class="py-2 px-4 border-b">Cabang Pusat</td>
        </tr>
    </x-table>
</div>
@endsection
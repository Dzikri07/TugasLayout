@extends('layouts.app')

@section('title', 'Transaksi')
@section('header-title', 'Transaksi')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Daftar Transaksi</h2>
    <x-table :headers="['ID', 'Tanggal', 'Cabang', 'Total']">
        <tr>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">2025-03-31</td>
            <td class="py-2 px-4 border-b">Cabang Pusat</td>
            <td class="py-2 px-4 border-b">Rp 250.000</td>
        </tr>
    </x-table>
</div>
@endsection
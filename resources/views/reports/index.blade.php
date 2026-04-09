@extends('layouts.app')

@section('title', 'Laporan Management')
@section('header-title', 'Laporan Management')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar Laporan</h2>
        <div class="space-x-2">
            <x-button variant="success">Export PDF</x-button>
            <x-button variant="primary">Export Excel</x-button>
        </div>
    </div>
    <x-table :headers="['No', 'Jenis Laporan', 'Periode', 'Total', 'Tanggal Dibuat', 'Aksi']">
        <tr>
            <td class="py-2 px-4 border-b text-center">1</td>
            <td class="py-2 px-4 border-b">Laporan Penjualan</td>
            <td class="py-2 px-4 border-b">Maret 2026</td>
            <td class="py-2 px-4 border-b">Rp 45.000.000</td>
            <td class="py-2 px-4 border-b">2026-04-01</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Lihat</x-button>
                <x-button variant="success-text" class="ml-2">Download</x-button>
            </td>
        </tr>
        <tr>
            <td class="py-2 px-4 border-b text-center">2</td>
            <td class="py-2 px-4 border-b">Laporan Stok</td>
            <td class="py-2 px-4 border-b">Maret 2026</td>
            <td class="py-2 px-4 border-b">342 Item</td>
            <td class="py-2 px-4 border-b">2026-04-01</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Lihat</x-button>
                <x-button variant="success-text" class="ml-2">Download</x-button>
            </td>
        </tr>
        <tr>
            <td class="py-2 px-4 border-b text-center">3</td>
            <td class="py-2 px-4 border-b">Laporan Transaksi</td>
            <td class="py-2 px-4 border-b">Maret 2026</td>
            <td class="py-2 px-4 border-b">125 Transaksi</td>
            <td class="py-2 px-4 border-b">2026-04-01</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Lihat</x-button>
                <x-button variant="success-text" class="ml-2">Download</x-button>
            </td>
        </tr>
        <tr>
            <td class="py-2 px-4 border-b text-center">4</td>
            <td class="py-2 px-4 border-b">Laporan Cabang</td>
            <td class="py-2 px-4 border-b">Maret 2026</td>
            <td class="py-2 px-4 border-b">3 Cabang</td>
            <td class="py-2 px-4 border-b">2026-04-01</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Lihat</x-button>
                <x-button variant="success-text" class="ml-2">Download</x-button>
            </td>
        </tr>
        <tr>
            <td class="py-2 px-4 border-b text-center">5</td>
            <td class="py-2 px-4 border-b">Laporan User</td>
            <td class="py-2 px-4 border-b">Maret 2026</td>
            <td class="py-2 px-4 border-b">8 User</td>
            <td class="py-2 px-4 border-b">2026-04-01</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Lihat</x-button>
                <x-button variant="success-text" class="ml-2">Download</x-button>
            </td>
        </tr>
    </x-table>
</div>
@endsection
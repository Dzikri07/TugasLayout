@extends('layouts.app')

@section('title', 'Laporan Management')
@section('header-title', 'Laporan Management')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar Laporan</h2>
        <div class="space-x-2">
            <button class="bg-green-500 text-white px-3 py-1 rounded">Export PDF</button>
            <button class="bg-blue-500 text-white px-3 py-1 rounded">Export Excel</button>
        </div>
    </div>
    
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">No</th>
                <th class="py-2 px-4 border-b">Jenis Laporan</th>
                <th class="py-2 px-4 border-b">Periode</th>
                <th class="py-2 px-4 border-b">Total</th>
                <th class="py-2 px-4 border-b">Tanggal Dibuat</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b text-center">1</td>
                <td class="py-2 px-4 border-b">Laporan Penjualan</td>
                <td class="py-2 px-4 border-b">Maret 2026</td>
                <td class="py-2 px-4 border-b">Rp 45.000.000</td>
                <td class="py-2 px-4 border-b">2026-04-01</td>
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500">Lihat</button>
                    <button class="text-green-500 ml-2">Download</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">2</td>
                <td class="py-2 px-4 border-b">Laporan Stok</td>
                <td class="py-2 px-4 border-b">Maret 2026</td>
                <td class="py-2 px-4 border-b">342 Item</td>
                <td class="py-2 px-4 border-b">2026-04-01</td>
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500">Lihat</button>
                    <button class="text-green-500 ml-2">Download</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">3</td>
                <td class="py-2 px-4 border-b">Laporan Transaksi</td>
                <td class="py-2 px-4 border-b">Maret 2026</td>
                <td class="py-2 px-4 border-b">125 Transaksi</td>
                <td class="py-2 px-4 border-b">2026-04-01</td>
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500">Lihat</button>
                    <button class="text-green-500 ml-2">Download</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">4</td>
                <td class="py-2 px-4 border-b">Laporan Cabang</td>
                <td class="py-2 px-4 border-b">Maret 2026</td>
                <td class="py-2 px-4 border-b">3 Cabang</td>
                <td class="py-2 px-4 border-b">2026-04-01</td>
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500">Lihat</button>
                    <button class="text-green-500 ml-2">Download</button>
                </td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-center">5</td>
                <td class="py-2 px-4 border-b">Laporan User</td>
                <td class="py-2 px-4 border-b">Maret 2026</td>
                <td class="py-2 px-4 border-b">8 User</td>
                <td class="py-2 px-4 border-b">2026-04-01</td>
                <td class="py-2 px-4 border-b">
                    <button class="text-blue-500">Lihat</button>
                    <button class="text-green-500 ml-2">Download</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
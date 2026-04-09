@extends('layouts.app')

@section('title', 'Cabang Toko')
@section('header-title', 'Cabang Toko')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar Cabang</h2>
        <x-button variant="primary">Tambah Cabang</x-button>
    </div>
    <x-table :headers="['ID', 'Nama Cabang', 'Alamat', 'Aksi']">
        <tr>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">Cabang Pusat</td>
            <td class="py-2 px-4 border-b">Jl. Merdeka No.1</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Edit</x-button>
                <x-button variant="danger-text" class="ml-2">Hapus</x-button>
            </td>
        </tr>
    </x-table>
</div>
@endsection
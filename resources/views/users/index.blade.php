@extends('layouts.app')

@section('title', 'User Management')
@section('header-title', 'User Management')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar User</h2>
        <x-button variant="primary">Tambah User</x-button>
    </div>
    <x-table :headers="['ID', 'Nama', 'Email', 'Role', 'Aksi']">
        <tr>
            <td class="py-2 px-4 border-b">1</td>
            <td class="py-2 px-4 border-b">Admin</td>
            <td class="py-2 px-4 border-b">admin@jayusman.com</td>
            <td class="py-2 px-4 border-b">Administrator</td>
            <td class="py-2 px-4 border-b">
                <x-button variant="primary-text">Edit</x-button>
                <x-button variant="danger-text" class="ml-2">Hapus</x-button>
            </td>
        </tr>
    </x-table>
</div>
@endsection
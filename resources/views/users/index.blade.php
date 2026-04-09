@extends('layouts.app')

@section('title', 'User Management')
@section('header-title', 'User Management')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar User</h2>
        <x-button variant="primary">Tambah User</x-button>
    </div>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nama</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Role</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>
@endsection
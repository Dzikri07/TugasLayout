@extends('layouts.app')

@section('title', 'User Management')
@section('header-title', 'User Management')

@section('content')
<div class="bg-white p-4 rounded shadow">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-semibold">Daftar User</h2>
        <button class="bg-blue-500 text-white px-3 py-1 rounded">Tambah User</button>
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
                    <button class="text-blue-500">Edit</button>
                    <button class="text-red-500 ml-2">Hapus</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
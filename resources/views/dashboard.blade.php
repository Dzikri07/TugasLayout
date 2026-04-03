@extends('layouts.app')

@section('title', 'Dashboard')
@section('header-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Card Total Cabang -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 border-l-4 border-[#00ADB5] overflow-hidden">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Cabang</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2">3</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Transaksi -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 border-l-4 border-[#00ADB5] overflow-hidden">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Transaksi</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2">125</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Stok -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 border-l-4 border-[#00ADB5] overflow-hidden">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Stok</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2">342</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total User -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 border-l-4 border-[#00ADB5] overflow-hidden">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total User</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2">8</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md p-6">
    <h2 class="text-xl font-bold text-[#222831] mb-3 border-b-2 border-[#00ADB5] inline-block pb-1">Selamat Datang di Jayusman Market</h2>
    <p class="text-[#393E46] mt-3 leading-relaxed">
        Ini adalah halaman dashboard. Silakan kelola data melalui menu di samping.
    </p>
</div>
@endsection
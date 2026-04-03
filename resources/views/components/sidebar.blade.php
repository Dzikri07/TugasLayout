<aside class="w-64 bg-[#222831] text-[#EEEEEE] flex flex-col shadow-xl rounded-tr-2xl">
    <!-- Logo Section -->
    <div class="p-5 border-b border-[#393E46]">
        <div class="flex items-center space-x-3">
            <!-- Icon -->
            <div class="w-9 h-9 bg-[#00ADB5] rounded-xl flex items-center justify-center shadow-md">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M17 13l1.5 6M9 21h6M12 15v6"></path>
                </svg>
            </div>
            <!-- Text -->
            <div class="leading-tight">
                <h1 class="text-lg font-semibold tracking-wide">Jayusman Market</h1>
                <p class="text-[13px] text-[#00ADB5] opacity-80">Management System</p>
            </div>

        </div>
    </div>

    <!-- Navigation Menu - Desain Baru -->
    <nav class="flex-1 px-3 py-6 space-y-1">
        <!-- Dashboard -->
        <a href="{{ route('dashboard') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span class="font-medium">Dashboard</span>
            @if(request()->routeIs('dashboard'))
                <span class="ml-auto w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
            @endif
        </a>

        <!-- Cabang Toko -->
        <a href="{{ route('branches.index') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('branches.*') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <span class="font-medium">Cabang Toko</span>
        </a>

        <!-- Transaksi -->
        <a href="{{ route('transactions.index') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('transactions.*') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <span class="font-medium">Transaksi</span>
        </a>

        <!-- Stok -->
        <a href="{{ route('stocks.index') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('stocks.*') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <span class="font-medium">Stok</span>
        </a>

        <!-- Laporan (Fitur Baru) -->
        <a href="{{ route('reports.index') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('reports.*') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v4m0 0l-2-2m2 2l2-2" />
            </svg>
            <span class="font-medium">Laporan</span>
            
        </a>

        <!-- User -->
        <a href="{{ route('users.index') }}" class="group flex items-center space-x-3 px-3 py-2.5 rounded-xl transition-all duration-300 {{ request()->routeIs('users.*') ? 'bg-gradient-to-r from-[#00ADB5] to-[#00838F] text-white shadow-lg shadow-[#00ADB5]/20' : 'hover:bg-[#2a2f3f] hover:text-white' }}">
            <svg class="w-5 h-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span class="font-medium">User</span>
        </a>
    </nav>



    <div class="p-4 border-t border-[#393E46] text-xs text-center text-[#EEEEEE]/60">
        v1.0.0
    </div>
</aside>
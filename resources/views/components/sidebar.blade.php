<aside class="w-64 bg-[#222831] text-[#EEEEEE] flex flex-col shadow-xl">
    <!-- Logo Section -->
    <div class="p-5 border-b border-[#393E46]">
        <div class="flex items-center space-x-3">
            <div class="w-9 h-9 bg-[#00ADB5] rounded-xl flex items-center justify-center shadow-md">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.5 6M17 13l1.5 6M9 21h6M12 15v6"></path>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight">Jayusman Market</h1>
                <p class="text-xs text-[#00ADB5] font-medium">Management System</p>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 px-4 py-6 space-y-1.5">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('dashboard') ? 'bg-[#00ADB5] text-white shadow-md' : 'hover:bg-[#393E46] hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span>Dashboard</span>
        </a>
        <a href="{{ route('branches.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('branches.*') ? 'bg-[#00ADB5] text-white shadow-md' : 'hover:bg-[#393E46] hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
            <span>Cabang Toko</span>
        </a>
        <a href="{{ route('transactions.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('transactions.*') ? 'bg-[#00ADB5] text-white shadow-md' : 'hover:bg-[#393E46] hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
            <span>Transaksi</span>
        </a>
        <a href="{{ route('stocks.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('stocks.*') ? 'bg-[#00ADB5] text-white shadow-md' : 'hover:bg-[#393E46] hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
            <span>Stok</span>
        </a>
        <a href="{{ route('users.index') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg transition-all duration-200 {{ request()->routeIs('users.*') ? 'bg-[#00ADB5] text-white shadow-md' : 'hover:bg-[#393E46] hover:text-white' }}">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <span>User</span>
        </a>
    </nav>

    <div class="p-4 border-t border-[#393E46] text-xs text-center text-[#EEEEEE]/60">
        v1.0.0
    </div>
</aside>
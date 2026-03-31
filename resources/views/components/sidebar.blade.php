<aside class="w-64 bg-blue-800 text-white flex flex-col">
    <div class="p-4 text-xl font-bold border-b border-blue-700">
        Jayusman Market
    </div>
    <nav class="flex-1 mt-4">
        <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-blue-700">Dashboard</a>
        <a href="{{ route('branches.index') }}" class="block py-2 px-4 hover:bg-blue-700">Cabang Toko</a>
        <a href="{{ route('transactions.index') }}" class="block py-2 px-4 hover:bg-blue-700">Transaksi</a>
        <a href="{{ route('stocks.index') }}" class="block py-2 px-4 hover:bg-blue-700">Stok</a>
        <a href="{{ route('users.index') }}" class="block py-2 px-4 hover:bg-blue-700">User</a>
    </nav>
</aside>
@extends('layouts.app')

@section('title', 'Dashboard')
@section('header-title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Card Total Cabang -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-[#00ADB5] overflow-hidden transform hover:-translate-y-1 cursor-pointer">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Cabang</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2 animate-pulse">3</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full animate-bounce">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Transaksi -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-[#00ADB5] overflow-hidden transform hover:-translate-y-1 cursor-pointer">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Transaksi</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2 animate-pulse">125</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full animate-bounce">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total Stok -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-[#00ADB5] overflow-hidden transform hover:-translate-y-1 cursor-pointer">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total Stok</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2 animate-pulse">342</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full animate-bounce">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Total User -->
    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-[#00ADB5] overflow-hidden transform hover:-translate-y-1 cursor-pointer">
        <div class="p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-[#393E46] font-medium uppercase tracking-wide">Total User</p>
                    <p class="text-3xl font-bold text-[#222831] mt-2 animate-pulse">8</p>
                </div>
                <div class="bg-[#00ADB5]/10 p-3 rounded-full animate-bounce">
                    <svg class="w-6 h-6 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-xl shadow-md p-6 mb-8">
    <h2 class="text-xl font-bold text-[#222831] mb-3 border-b-2 border-[#00ADB5] inline-block pb-1">Selamat Datang di Jayusman Market</h2>
    <p class="text-[#393E46] mt-3 leading-relaxed">
        Ini adalah halaman dashboard. Silakan kelola data melalui menu di samping.
    </p>
</div>

<!-- Chart Section -->
<div class="bg-white rounded-xl shadow-md p-6 mb-8">
    <h2 class="text-xl font-bold text-[#222831] mb-4 border-b-2 border-[#00ADB5] inline-block pb-1">Grafik Penjualan Bulanan</h2>
    <canvas id="salesChart" width="400" height="200"></canvas>
</div>

<!-- Card Laporan -->
<div class="mt-8">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-bold text-[#222831] border-l-4 border-[#00ADB5] pl-3">Ringkasan Laporan</h2>
        <a href="{{ route('reports.index') }}" class="text-sm text-[#00ADB5] hover:text-[#00838F] font-medium">Lihat Semua →</a>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Card Ringkasan Transaksi -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 overflow-hidden">
            <div class="p-5 border-b border-gray-100 bg-gradient-to-r from-[#00ADB5]/5 to-transparent">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <h3 class="font-semibold text-[#222831]">Laporan Penjualan</h3>
                </div>
            </div>
            <div class="p-5 space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46]">Total Transaksi Bulan Ini</span>
                    <span class="font-semibold text-[#222831]">125</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46]">Pendapatan Bulan Ini</span>
                    <span class="font-semibold text-green-600">Rp 45.000.000</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46]">Rata-rata per Hari</span>
                    <span class="font-semibold text-[#222831]">4 transaksi</span>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <span class="text-[#393E46]">Total Keseluruhan</span>
                    <span class="font-bold text-[#00ADB5]">Rp 450.000.000</span>
                </div>
            </div>
        </div>

        <!-- Card Ringkasan Stok -->
        <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-200 overflow-hidden">
            <div class="p-5 border-b border-gray-100 bg-gradient-to-r from-[#00ADB5]/5 to-transparent">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-[#00ADB5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <h3 class="font-semibold text-[#222831]">Laporan Stok</h3>
                </div>
            </div>
            <div class="p-5 space-y-3">
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46]">Total Item Stok</span>
                    <span class="font-semibold text-[#222831]">342</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46]">Nilai Total Stok</span>
                    <span class="font-semibold text-[#222831]">Rp 125.000.000</span>
                </div>
                <div class="flex justify-between items-center py-2 border-b border-gray-100">
                    <span class="text-[#393E46] text-red-500">⚠️ Stok Menipis</span>
                    <span class="font-semibold text-red-500">3 item</span>
                </div>
                <div class="flex justify-between items-center pt-2">
                    <span class="text-[#393E46]">Stok Akan Kadaluarsa</span>
                    <span class="font-bold text-orange-500">2 item</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Export -->
    <div class="bg-[#00ADB5]/5 rounded-xl p-4 mt-6 flex items-center justify-between flex-wrap gap-3">
        <div class="flex items-center space-x-3">
            <div class="bg-[#00ADB5] p-2 rounded-full">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
            </div>
            <p class="text-sm text-[#393E46]">Export laporan ke PDF atau Excel untuk analisis lebih lanjut</p>
        </div>
        <div class="flex space-x-2">
            <button id="exportPdfBtn" class="px-4 py-2 bg-white border border-[#00ADB5] text-[#00ADB5] rounded-lg text-sm font-medium hover:bg-[#00ADB5] hover:text-white transition-all duration-200 flex items-center space-x-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Export PDF</span>
            </button>
            <button id="exportExcelBtn" class="px-4 py-2 bg-[#00ADB5] text-white rounded-lg text-sm font-medium hover:bg-[#00838F] transition-all duration-200 flex items-center space-x-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                <span>Export Excel</span>
            </button>
        </div>
    </div>
</div>

<!-- Export Modal -->
<div id="exportModal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="exportModal-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h3 id="exportModal-label" class="block text-lg font-semibold text-gray-800">Export Berhasil</h3>
                    <div class="mt-2 text-sm text-gray-600">
                        File laporan telah berhasil diekspor dan siap diunduh.
                    </div>
                </div>
                <div class="mt-5 flex justify-center gap-x-2">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#exportModal">
                        Tutup
                    </button>
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Unduh File
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Preline
    HSStaticMethods.autoInit();

    // Chart initialization
    const ctx = document.getElementById('salesChart').getContext('2d');
    const salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Penjualan (Rp)',
                data: [12000000, 19000000, 15000000, 25000000, 22000000, 30000000, 28000000, 35000000, 32000000, 40000000, 38000000, 45000000],
                borderColor: '#00ADB5',
                backgroundColor: 'rgba(0, 173, 181, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Grafik Penjualan Tahunan'
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        }
    });

    // Export button handlers
    document.getElementById('exportPdfBtn').addEventListener('click', function() {
        const btn = this;
        const originalText = btn.querySelector('span').textContent;
        
        // Show loading state
        btn.querySelector('span').textContent = 'Memproses...';
        btn.querySelector('svg').style.display = 'none';
        btn.insertAdjacentHTML('afterbegin', '<div class="animate-spin rounded-full h-4 w-4 border-b-2 border-[#00ADB5] mr-2"></div>');
        btn.disabled = true;
        
        // Simulate export process
        setTimeout(() => {
            btn.querySelector('.animate-spin').remove();
            btn.querySelector('svg').style.display = '';
            btn.querySelector('span').textContent = originalText;
            btn.disabled = false;
            
            // Show success modal
            HSOverlay.open('#exportModal');
        }, 2000);
    });

    document.getElementById('exportExcelBtn').addEventListener('click', function() {
        const btn = this;
        const originalText = btn.querySelector('span').textContent;
        
        // Show loading state
        btn.querySelector('span').textContent = 'Memproses...';
        btn.querySelector('svg').style.display = 'none';
        btn.insertAdjacentHTML('afterbegin', '<div class="animate-spin rounded-full h-4 w-4 border-b-2 border-white mr-2"></div>');
        btn.disabled = true;
        
        // Simulate export process
        setTimeout(() => {
            btn.querySelector('.animate-spin').remove();
            btn.querySelector('svg').style.display = '';
            btn.querySelector('span').textContent = originalText;
            btn.disabled = false;
            
            // Show success modal
            HSOverlay.open('#exportModal');
        }, 2000);
    });

    // Card click handlers
    document.querySelectorAll('.grid > div').forEach((card, index) => {
        card.addEventListener('click', function() {
            const routes = ['{{ route("branches.index") }}', '{{ route("transactions.index") }}', '{{ route("stocks.index") }}', '{{ route("users.index") }}'];
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
                // Navigate to respective page
                window.location.href = routes[index];
            }, 150);
        });
    });
});
</script>

@endsection
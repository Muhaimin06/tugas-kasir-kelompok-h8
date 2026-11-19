@extends('layouts.app')

@section('title', 'Katalog Pilihan Kuliner Segar')

@section('content')
<div class="container py-4">
    
    <!-- Header Katalog -->
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h1 class="h3 fw-bold mb-1">Katalog Pilihan Kuliner Segar</h1>
            <p class="text-muted mb-0">Pilihan menu katering kantor, paket harian sehat, dan jamuan prasmanan premium.</p>
        </div>
        <!-- Form Pencarian -->
        <div class="col-md-6 mt-3 mt-md-0">
            <form method="GET" action="{{ route('katalog.index') }}" class="d-flex gap-2 justify-content-md-end">
                <input 
                    type="text" 
                    id="q" 
                    name="q" 
                    value="{{ $q ?? '' }}" 
                    placeholder="Cari menu favorit..." 
                    class="form-control w-auto"
                    style="min-width: 240px;"
                >
                <button type="submit" class="btn btn-dark">
                    Cari
                </button>
                @if(!empty($q))
                    <a href="{{ route('katalog.index') }}" class="btn btn-outline-secondary d-flex align-items-center">Reset</a>
                @endif
            </form>
        </div>
    </div>

    <hr class="text-muted mb-4">

    <!-- Daftar Produk Grid Bootstrap -->
    <div class="row g-4">
        @forelse ($produk as $index => $item)
            <div class="col-md-6 col-lg-4">
                <div class="card h-150 shadow-sm border-0 p-3 bg-white h-100 d-flex flex-column justify-content-between">
                    <div>
                        <!-- Atas: Kategori & Status Stok -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge bg-light text-dark text-uppercase px-2 py-1 border">
                                {{ $item['kategori'] }}
                            </span>
                            
                            @if ($item['stok'] > 0)
                                <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 fw-semibold">
                                    Tersedia ({{ $item['stok'] }})
                                </span>
                            @else
                                <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 fw-semibold">
                                    Habis
                                </span>
                            @endif
                        </div>

                        <!-- Gambar Menu Realistis / Natural (Gradient hangat & ikon kuliner non-AI) -->
                        <div class="rounded-3 mb-3 position-relative overflow-hidden d-flex align-items-center justify-content-center" 
                             style="height: 180px; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
                            <div class="text-center p-3">
                                <span class="d-block fs-1 mb-1">🍽️</span>
                                <span class="fw-bold text-dark fs-6 text-truncate px-2 d-block" style="max-width: 240px;">{{ $item['nama'] }}</span>
                                <small class="text-muted fst-italic">Standar Dapur Pusat</small>
                            </div>
                        </div>

                        <!-- Nama Produk & Deskripsi -->
                        <h3 class="h5 fw-bold text-dark mb-2">{{ $item['nama'] }}</h3>
                        <p class="text-muted small mb-3">
                            {{ $item['deskripsi'] ?? 'Menu pilihan berkualitas tinggi yang disiapkan higienis dan segar setiap hari.' }}
                        </p>
                    </div>

                    <!-- Bagian Bawah: Harga & Aksi -->
                    <div>
                        <div class="d-flex justify-content-between align-items-center border-top pt-3 mb-3">
                            <span class="text-muted small text-uppercase fw-semibold">Harga Satuan</span>
                            <strong class="h5 text-dark mb-0">Rp {{ number_format($item['harga'], 0, ',', '.') }}</strong>
                        </div>

                        <div class="d-flex gap-2">
                            <a href="{{ route('katalog.show', $item['id']) }}" class="btn btn-outline-dark btn-sm flex-fill fw-semibold">
                                Detail
                            </a>
                            
                            @if ($item['stok'] > 0)
                                <a href="{{ route('pesanan.create', $item['id']) }}" class="btn btn-dark btn-sm flex-fill fw-semibold">
                                    Pesan
                                </a>
                            @else
                                <button disabled class="btn btn-secondary btn-sm flex-fill fw-semibold" style="opacity: 0.6;">
                                    Habis
                                </button>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="p-5 bg-white rounded-4 border">
                    <p class="text-danger fs-5 mb-0">Menu atau produk tidak ditemukan.</p>
                </div>
            </div>
        @endforelse
    </div>

</div>
@endsection

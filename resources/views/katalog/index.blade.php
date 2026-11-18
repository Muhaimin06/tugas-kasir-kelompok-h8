@extends('layouts.app')

@section('title', 'Katalog Pilihan Kuliner Segar')

@section('content')
<div class="container" style="padding: 20px 0;">
    
    {{-- Header Katalog --}}
    <div style="margin-bottom: 20px;">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 5px;">Katalog Pilihan Kuliner Segar</h1>
        <p style="color: #666;">Pilihan menu katering kantor, paket harian sehat, dan jamuan prasmanan premium.</p>
    </div>

    {{-- Form Pencarian --}}
    <form method="GET" action="{{ route('katalog.index') }}" style="margin-bottom: 20px; display: flex; gap: 10px; align-items: center;">
        <input 
            type="text" 
            id="q" 
            name="q" 
            value="{{ $q ?? '' }}" 
            placeholder="Cari menu favorit..." 
            style="padding: 8px 12px; width: 250px; border: 1px solid #ccc; border-radius: 4px;"
        >
        <button type="submit" style="padding: 8px 16px; background-color: #333; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
            Cari
        </button>
        @if(!empty($q))
            <a href="{{ route('katalog.index') }}" style="color: #666; text-decoration: underline; font-size: 14px;">Reset Filter</a>
        @endif
    </form>

    <hr style="border: none; border-top: 1px solid #ddd; margin-bottom: 20px;">

    {{-- Daftar Produk Grid (Menyesuaikan Wireframe) --}}
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
        @forelse ($produk as $item)
            <div style="border: 1px solid #ddd; border-radius: 6px; padding: 15px; background: #fff; display: flex; flex-direction: column; justify-content: space-between;">
                
                {{-- Bagian Atas Kartu: Kategori & Status Stok --}}
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <span style="font-size: 12px; background: #eee; padding: 3px 8px; border-radius: 4px; text-transform: uppercase; font-weight: bold;">
                            {{ $item['kategori'] }}
                        </span>
                        
                        @if ($item['stok'] > 0)
                            <span style="font-size: 12px; background: #d4edda; color: #155724; padding: 3px 8px; border-radius: 4px; font-weight: bold;">
                                [ TERSEDIA ] (Stok: {{ $item['stok'] }})
                            </span>
                        @else
                            <span style="font-size: 12px; background: #f8d7da; color: #721c24; padding: 3px 8px; border-radius: 4px; font-weight: bold;">
                                [ HABIS ]
                            </span>
                        @endif
                    </div>

                    {{-- Placeholder Foto Menu (Sesuai Wireframe) --}}
                    <div style="background: #f0f0f0; height: 120px; display: flex; align-items: center; justify-content: center; border-radius: 4px; margin-bottom: 12px; color: #888; font-size: 13px;">
                        [ PLACEHOLDER FOTO MENU ]
                    </div>

                    {{-- Nama Produk --}}
                    <h3 style="font-size: 18px; font-weight: bold; margin-bottom: 8px;">{{ $item['nama'] }}</h3>
                    
                    {{-- Deskripsi Singkat Opsional (bisa disesuaikan jika data ada) --}}
                    <p style="font-size: 13px; color: #666; margin-bottom: 15px;">
                        Menu pilihan berkualitas tinggi yang disiapkan khusus untuk Anda.
                    </p>
                </div>

                {{-- Bagian Bawah Kartu: Harga & Tombol Aksi --}}
                <div>
                    <div style="border-top: 1px solid #eee; padding-top: 10px; margin-bottom: 12px; display: flex; justify-content: space-between; align-items: center;">
                        <span style="font-size: 12px; color: #777;">HARGA SATUAN</span>
                        <strong style="font-size: 16px; color: #000;">Rp {{ number_format($item['harga'], 0, ',', '.') }}</strong>
                    </div>

                    <div style="display: flex; gap: 8px;">
                        <button style="flex: 1; padding: 8px; background: #fff; border: 1px solid #ccc; border-radius: 4px; cursor: pointer; font-size: 13px;">
                            Detail
                        </button>
                        
                        @if ($item['stok'] > 0)
                            <button style="flex: 1; padding: 8px; background: #000; color: #fff; border: none; border-radius: 4px; cursor: pointer; font-size: 13px;">
                                Pesan
                            </button>
                        @else
                            <button disabled style="flex: 1; padding: 8px; background: #ccc; color: #666; border: none; border-radius: 4px; cursor: not-allowed; font-size: 13px;">
                                Habis
                            </button>
                        @endif
                    </div>
                </div>

            </div>
        @empty
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px; background: #f9f9f9; border-radius: 6px;">
                <p style="color: #d9534f; font-size: 16px; margin: 0;">Produk tidak ditemukan.</p>
            </div>
        @endforelse
    </div>

@endsection
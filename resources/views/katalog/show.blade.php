
@extends('layouts.app')

@section('title', $produk['nama'])

@section('content')
<div class="container" style="padding: 20px 0; max-width: 800px; margin: 0 auto;">
    
    {{-- Tombol Kembali --}}
    <a href="{{ route('katalog.index') }}" style="color: #333; text-decoration: none; font-size: 14px; margin-bottom: 20px; display: inline-block;">
        &larr; Kembali ke Katalog
    </a>

    {{-- Kartu Detail Produk --}}
    <div style="border: 1px solid #ddd; border-radius: 6px; padding: 25px; background: #fff; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
        
        {{-- Kategori & Status --}}
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <span style="font-size: 12px; background: #eee; padding: 4px 10px; border-radius: 4px; text-transform: uppercase; font-weight: bold;">
                {{ $produk['kategori'] }}
            </span>
            
            @if ($produk['status'] == 'Tersedia')
                <span style="font-size: 12px; background: #d4edda; color: #155724; padding: 4px 10px; border-radius: 4px; font-weight: bold;">
                    [ TERSEDIA ]
                </span>
            @else
                <span style="font-size: 12px; background: #f8d7da; color: #721c24; padding: 4px 10px; border-radius: 4px; font-weight: bold;">
                    [ HABIS ]
                </span>
            @endif
        </div>

        {{-- Placeholder Foto Ukuran Besar --}}
        <div style="background: #f0f0f0; height: 220px; display: flex; align-items: center; justify-content: center; border-radius: 6px; margin-bottom: 20px; color: #888; font-size: 14px; font-weight: bold;">
            [ PLACEHOLDER FOTO MENU UKURAN BESAR ]
        </div>

        {{-- Nama Menu --}}
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; color: #222;">{{ $produk['nama'] }}</h1>
        
        {{-- Harga --}}
        <div style="font-size: 20px; font-weight: bold; color: #000; margin-bottom: 20px;">
            Rp {{ number_format($produk['harga'], 0, ',', '.') }}
        </div>

        {{-- Deskripsi Lengkap --}}
        <div style="margin-bottom: 25px;">
            <h3 style="font-size: 14px; font-weight: bold; color: #555; margin-bottom: 8px;">Deskripsi Menu:</h3>
            <p style="font-size: 14px; color: #666; line-height: 1.6; margin: 0;">
                {{ $produk['deskripsi'] }}
            </p>
        </div>

        {{-- Informasi Pengelola/Admin --}}
        <div style="border-top: 1px solid #eee; padding-top: 15px; margin-bottom: 25px; font-size: 13px; color: #777;">
            Diinput/Dikelola oleh Admin: <strong>{{ $produk['admin'] }}</strong>
        </div>

        {{-- Tombol Aksi --}}
        <div>
            @if ($produk['status'] == 'Tersedia')
    <a href="{{ route('pesanan.create', $produk['id']) }}" style="padding: 10px 24px; background: #000; color: #fff; border: none; border-radius: 4px; text-decoration: none; font-size: 14px; font-weight: bold; display: inline-block;">
        Pesan Sekarang
    </a>
@else
    <button disabled style="padding: 10px 24px; background: #ccc; color: #666; border: none; border-radius: 4px; cursor: not-allowed; font-size: 14px;">
        Menu Habis
    </button>
@endif
        </div>

    </div>
</div>
@endsection
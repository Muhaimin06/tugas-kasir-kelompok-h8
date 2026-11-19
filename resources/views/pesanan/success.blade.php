@extends('layouts.app')

@section('title', 'Pesanan Berhasil Dikirim')

@section('content')
<div class="container" style="padding: 20px 0; max-width: 700px; margin: 0 auto;">
    <div style="border: 1px solid #c3e6cb; border-radius: 6px; padding: 30px; background: #fff;">
        
        <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 6px; margin-bottom: 20px; text-align: center;">
            <h2 style="font-size: 20px; font-weight: bold; margin: 0 0 5px;">Pesanan Berhasil Dicatat!</h2>
            <p style="margin: 0; font-size: 14px;">Terima kasih, pesanan Anda telah masuk ke antrean sistem Dapur Modern.</p>
        </div>

        <h3 style="font-size: 16px; font-weight: bold; border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 15px;">
            Bukti Rincian Pesanan #{{ str_pad($pesanan->id_pesanan, 4, '0', STR_PAD_LEFT) }}
        </h3>

        <table style="width: 100%; font-size: 14px; margin-bottom: 20px; border-collapse: collapse;">
            <tr>
                <td style="padding: 6px 0; color: #666; width: 35%;">Nama Pemesan</td>
                <td style="padding: 6px 0; font-weight: bold;">: {{ $pesanan->pelanggan->nama_pelanggan }}</td>
            </tr>
            <tr>
                <td style="padding: 6px 0; color: #666;">No. Telepon</td>
                <td style="padding: 6px 0;">: {{ $pesanan->pelanggan->no_telepon }}</td>
            </tr>
            <tr>
                <td style="padding: 6px 0; color: #666;">Alamat Pengiriman</td>
                <td style="padding: 6px 0;">: {{ $pesanan->pelanggan->alamat }}</td>
            </tr>
            <tr>
                <td style="padding: 6px 0; color: #666;">Waktu Pesanan</td>
                <td style="padding: 6px 0;">: {{ \Carbon\Carbon::parse($pesanan->tanggal_pesanan)->format('d M Y, H:i') }}</td>
            </tr>
            <tr>
                <td style="padding: 6px 0; color: #666;">Status Pesanan</td>
                <td style="padding: 6px 0;">: <span style="background: #fff3cd; color: #856404; padding: 2px 8px; border-radius: 4px; font-weight: bold; font-size: 12px;">{{ $pesanan->status_pesanan }}</span></td>
            </tr>
        </table>

        <div style="background: #f9f9f9; padding: 15px; border-radius: 6px; margin-bottom: 20px;">
            @foreach($pesanan->detailPesanans as $detail)
                <div style="display: flex; justify-content: space-between; font-weight: bold; font-size: 15px; margin-bottom: 5px;">
                    <span>{{ $detail->menu->nama_menu }} ({{ $detail->jumlah }}x)</span>
                    <span>Rp {{ number_format($pesanan->total_harga, 0, ',', '.') }}</span>
                </div>
                <div style="font-size: 13px; color: #555;">
                    <strong>Catatan Kustom:</strong> {{ $detail->catatan_kustom ?: 'Tidak ada catatan khusus' }}
                </div>
            @endforeach
        </div>

        <div style="display: flex; gap: 10px;">
            <a href="{{ route('katalog.index') }}" style="flex: 1; padding: 10px; background: #000; color: #fff; text-align: center; text-decoration: none; border-radius: 4px; font-size: 14px; font-weight: bold;">
                Kembali ke Katalog Menu
            </a>
        </div>
    </div>
</div>
@endsection
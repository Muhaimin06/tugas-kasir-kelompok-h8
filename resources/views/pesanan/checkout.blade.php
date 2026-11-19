@extends('layouts.app')

@section('title', 'Checkout & Pembayaran (US-08)')

@section('content')
<div class="container" style="padding: 20px 0; max-width: 1200px; margin: 0 auto;">
    
    {{-- Banner Simulator Uji Alur Atas --}}
    <div style="background: #111; color: #fff; padding: 10px 15px; border-radius: 6px; display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; font-size: 13px;">
        <span>● SIMULATOR UJI ALUR US-08 | Validasi proteksi sinkronisasi harga dapur pusat saat pelanggan di fase checkout</span>
        <button type="button" style="background: #333; color: #fff; border: 1px solid #555; padding: 5px 12px; border-radius: 4px; font-size: 12px; cursor: pointer;">⚡ Simulasikan Perubahan Harga Dapur</button>
    </div>

    {{-- Indikator Langkah (Steps 1 - 3) --}}
    <div style="display: flex; justify-content: space-between; align-items: center; background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 15px 25px; margin-bottom: 25px;">
        <div style="display: flex; align-items: center; gap: 10px; color: #888; font-size: 13px;">
            <span style="background: #28a745; color: #fff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px;">✓</span>
            <span>LANGKAH 1<br><strong style="color: #333;">Keranjang Menu</strong></span>
        </div>
        <div style="border-top: 2px dashed #ddd; flex: 1; margin: 0 20px;"></div>
        <div style="display: flex; align-items: center; gap: 10px; color: #888; font-size: 13px;">
            <span style="background: #28a745; color: #fff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px;">✓</span>
            <span>LANGKAH 2<br><strong style="color: #333;">Data Pengiriman</strong></span>
        </div>
        <div style="border-top: 2px dashed #ddd; flex: 1; margin: 0 20px;"></div>
        <div style="display: flex; align-items: center; gap: 10px; color: #000; font-size: 13px;">
            <span style="background: #000; color: #fff; width: 24px; height: 24px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; font-weight: bold;">3</span>
            <span>LANGKAH 3<br><strong style="color: #000;">Konfirmasi & Pembayaran</strong></span>
        </div>
    </div>

    {{-- Layout Utama 2 Kolom --}}
    <div style="display: grid; grid-template-columns: 1.6fr 1.2fr; gap: 25px; align-items: start;">
        
        {{-- KOLOM KIRI: Alamat, Jadwal, & Metode Pembayaran --}}
        <div>
            
            {{-- Alamat & Jadwal Pengiriman --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px; position: relative;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                    <h3 style="font-size: 15px; font-weight: bold; margin: 0; display: flex; align-items: center; gap: 6px;">
                        📍 Alamat & Jadwal Pengiriman
                    </h3>
                    <span style="background: #f1f3f5; border: 1px solid #ced4da; padding: 3px 10px; border-radius: 4px; font-size: 12px; font-weight: bold;">Kitchen Express Dispatch</span>
                </div>

                <div style="background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 6px; padding: 15px; margin-bottom: 12px;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                        <div>
                            <strong style="font-size: 14px; color: #111; display: block; margin-bottom: 3px;">Gedung Astra Tower Lt. 18 (HQ Operational)</strong>
                            <div style="font-size: 13px; color: #555; margin-bottom: 5px;">Jl. Jend. Sudirman Kav. 5-6, Karet Tengsin, Jakarta Pusat</div>
                            <div style="font-size: 12px; color: #666;">Penerima: <strong>Dimas Wicaksono</strong> (+62 812-8890-4412)</div>
                        </div>
                        <div style="font-size: 20px;">🛡️</div>
                    </div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 13px; color: #441;">
                    <span>🕒 Slot Pengiriman: Hari Ini, 12:15 WIB (Makan Siang Tim)</span>
                    <span style="background: #d4edda; color: #155724; padding: 3px 8px; border-radius: 4px; font-weight: bold; font-size: 11px;">TEPAT WAKTU GUARANTEE</span>
                </div>
            </div>

            {{-- Metode Pembayaran --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
                    <h3 style="font-size: 15px; font-weight: bold; margin: 0; display: flex; align-items: center; gap: 6px;">
                        💳 Metode Pembayaran
                    </h3>
                    <span style="font-size: 12px; color: #666;">Pilih kanal transaksi</span>
                </div>

                <div style="display: flex; flex-direction: column; gap: 10px;">
                    
                    {{-- Opsi 1: BCA VA --}}
                    <label style="display: flex; justify-content: space-between; align-items: center; border: 2px solid #000; background: #fff; padding: 12px 15px; border-radius: 6px; cursor: pointer;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <input type="radio" name="metode_pembayaran" checked style="accent-color: #000;">
                            <div>
                                <div style="font-weight: bold; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                    <span style="background: #0056b3; color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 11px;">BCA</span> BCA Virtual Account
                                </div>
                                <div style="font-size: 12px; color: #666;">Konfirmasi otomatis seketika dalam 1 menit</div>
                            </div>
                        </div>
                        <span style="background: #000; color: #fff; font-size: 10px; font-weight: bold; padding: 3px 8px; border-radius: 3px;">Rekomendasi</span>
                    </label>

                    {{-- Opsi 2: Mandiri VA --}}
                    <label style="display: flex; justify-content: space-between; align-items: center; border: 1px solid #ddd; background: #fff; padding: 12px 15px; border-radius: 6px; cursor: pointer;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <input type="radio" name="metode_pembayaran" style="accent-color: #000;">
                            <div>
                                <div style="font-weight: bold; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                    <span style="background: #ffc107; color: #000; padding: 2px 6px; border-radius: 3px; font-size: 11px; font-weight: bold;">MDR</span> Mandiri Livin' VA
                                </div>
                                <div style="font-size: 12px; color: #666;">Verifikasi multi-bank instant</div>
                            </div>
                        </div>
                        <span style="color: #888;">&gt;</span>
                    </label>

                    {{-- Opsi 3: BRI VA --}}
                    <label style="display: flex; justify-content: space-between; align-items: center; border: 1px solid #ddd; background: #fff; padding: 12px 15px; border-radius: 6px; cursor: pointer;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <input type="radio" name="metode_pembayaran" style="accent-color: #000;">
                            <div>
                                <div style="font-weight: bold; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                    <span style="background: #17a2b8; color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 11px;">BRI</span> BRIVA (Bank BRI)
                                </div>
                                <div style="font-size: 12px; color: #666;">Didukung seluruh channel ATM/Mobile</div>
                            </div>
                        </div>
                        <span style="color: #888;">&gt;</span>
                    </label>

                    {{-- Opsi 4: QRIS --}}
                    <label style="display: flex; justify-content: space-between; align-items: center; border: 1px solid #ddd; background: #fff; padding: 12px 15px; border-radius: 6px; cursor: pointer;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <input type="radio" name="metode_pembayaran" style="accent-color: #000;">
                            <div>
                                <div style="font-weight: bold; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                    <span style="background: #e83e8c; color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 11px;">QRIS</span> QRIS Dinamis 24/7
                                </div>
                                <div style="font-size: 12px; color: #666;">Gopay, OVO, ShopeePay, Dana, & Semua M-Banking</div>
                            </div>
                        </div>
                        <span style="background: #e9ecef; color: #333; font-size: 10px; font-weight: bold; padding: 3px 8px; border-radius: 3px;">Instan</span>
                    </label>

                    {{-- Opsi 5: Corporate Invoice --}}
                    <label style="display: flex; justify-content: space-between; align-items: center; border: 1px solid #ddd; background: #fff; padding: 12px 15px; border-radius: 6px; cursor: pointer;">
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <input type="radio" name="metode_pembayaran" style="accent-color: #000;">
                            <div>
                                <div style="font-weight: bold; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                                    <span style="background: #6c757d; color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 11px;">B2B</span> Corporate Invoice Tempo (TOP 30 Hari)
                                </div>
                                <div style="font-size: 12px; color: #666;">Khusus akun mitra perusahaan terverifikasi</div>
                            </div>
                        </div>
                        <span style="background: #e9ecef; color: #333; font-size: 10px; font-weight: bold; padding: 3px 8px; border-radius: 3px;">Tempo B2B</span>
                    </label>

                </div>

                <div style="margin-top: 15px; font-size: 11px; color: #666; display: flex; align-items: center; gap: 5px;">
                    🔒 Enkripsi transaksi 256-bit standar PCI-DSS & Dapur Centralized POS Sync.
                </div>
            </div>

            {{-- Jaminan Higienis --}}
            <div style="background: #fdfdfe; border: 1px solid #e2e8f0; border-radius: 6px; padding: 15px; display: flex; align-items: center; gap: 15px;">
                <div style="font-size: 24px;">🛡️</div>
                <div style="font-size: 12px; color: #555;">
                    <strong style="color: #111; display: block; margin-bottom: 2px;">Jaminan Higienis & Suhu Terjaga</strong>
                    Pesanan dimasak segar langsung di Central Kitchen Dapur Modern dan dikemas dengan thermal box bersegel keamanan.
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: Ringkasan Pesanan & Tombol Pembayaran --}}
        <div>
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; position: sticky; top: 20px;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 12px; margin-bottom: 15px;">
                    <h3 style="font-size: 15px; font-weight: bold; margin: 0;">Ringkasan Pesanan</h3>
                    <span style="font-size: 12px; color: #666; background: #f1f3f5; padding: 3px 8px; border-radius: 4px;">2 Menu Terpilih</span>
                </div>

                {{-- List Item 1 --}}
                <div style="border: 1px solid #eee; border-radius: 6px; padding: 10px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div style="background: #f0f0f0; border: 1px dashed #ccc; width: 45px; height: 45px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; text-align: center;">[FOTO]</div>
                        <div style="font-size: 12px;">
                            <strong style="display: block; font-size: 13px; color: #111;">Paket Beef Bulgogi Bento</strong>
                            <span style="color: #666;">20 porsi × Rp 45.000</span>
                            <div style="color: #888; font-size: 11px;">Kemasan Bento Box Premium + Cutlery Kit</div>
                        </div>
                    </div>
                    <div style="font-weight: bold; font-size: 13px;">Rp 900.000</div>
                </div>

                {{-- List Item 2 --}}
                <div style="border: 1px solid #eee; border-radius: 6px; padding: 10px; margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center;">
                    <div style="display: flex; gap: 10px; align-items: center;">
                        <div style="background: #f0f0f0; border: 1px dashed #ccc; width: 45px; height: 45px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; text-align: center;">[FOTO]</div>
                        <div style="font-size: 12px;">
                            <strong style="display: block; font-size: 13px; color: #111;">Nasi Liwet Komplit</strong>
                            <span style="color: #666;">10 porsi × Rp 38.000</span>
                            <div style="color: #888; font-size: 11px;">Sambal Terasi Pisah + Daun Pisang Wrap</div>
                        </div>
                    </div>
                    <div style="font-weight: bold; font-size: 13px;">Rp 380.000</div>
                </div>

                <hr style="border: none; border-top: 1px solid #eee; margin-bottom: 15px;">

                {{-- Rincian Nominal --}}
                <div style="font-size: 13px; display: flex; flex-direction: column; gap: 8px; margin-bottom: 20px;">
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Subtotal Produk</span>
                        <span style="font-weight: bold; color: #222;">Rp 1.280.000</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Biaya Delivery Layanan Dapur ⓘ</span>
                        <span>Rp 25.000</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Biaya Layanan & Segel Steril</span>
                        <span style="color: #28a745; font-weight: bold;">GRATIS</span>
                    </div>
                </div>

                <hr style="border: none; border-top: 2px solid #333; margin-bottom: 15px;">

                {{-- Total Tagihan --}}
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 20px;">
                    <div>
                        <div style="font-size: 14px; font-weight: bold; color: #111;">Total Tagihan</div>
                        <div style="font-size: 11px; color: #777;">Termasuk pajak resto 10%</div>
                    </div>
                    <div style="font-size: 22px; font-weight: bold; color: #000;">
                        Rp 1.305.000
                    </div>
                </div>

                {{-- Info Sinkronisasi Harga Database --}}
                <div style="background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 4px; padding: 10px; margin-bottom: 20px; font-size: 11px; color: #555; display: flex; align-items: center; gap: 8px;">
                    <span>🛡️</span> Harga terverifikasi aktif langsung ke pangkalanan database kitchen realtime.
                </div>

                {{-- Tombol Aksi Pembayaran --}}
                <button type="button" onclick="alert('Simulasi: Pembayaran Berhasil Diproses!')" style="width: 100%; padding: 14px; background: #000; color: #fff; border: none; border-radius: 6px; font-size: 15px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 10px;">
                    <span>💳</span> Bayar Sekarang · Rp 1.305.000
                </button>

                <a href="{{ route('katalog.index') }}" style="display: block; width: 100%; padding: 10px; background: #fff; color: #333; border: 1px solid #ccc; border-radius: 6px; font-size: 13px; font-weight: bold; text-align: center; text-decoration: none; box-sizing: border-box; margin-bottom: 20px;">
                    Kembali Tambah Menu Lain
                </a>

                {{-- Footer Info Keamanan --}}
                <div style="display: flex; justify-content: space-around; border-top: 1px solid #eee; padding-top: 12px; font-size: 11px; color: #666; text-align: center;">
                    <div>⚡ Respon Instan</div>
                    <div>🌱 Sertifikasi Halal</div>
                    <div>♻️ Biodegradable</div>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
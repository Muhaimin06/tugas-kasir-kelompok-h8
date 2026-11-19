@extends('layouts.app')

@section('title', 'Beranda - Solusi Katering & Manajemen Dapur Modern')

@section('content')
<div class="container" style="padding: 20px 0; max-width: 1200px; margin: 0 auto;">
    
    {{-- 1. HERO SECTION (Sesuai Wireframe) --}}
    <div style="display: grid; grid-template-columns: 1.5fr 1fr; gap: 30px; align-items: center; margin-bottom: 40px; background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 30px;">
        <div>
            <div style="font-size: 11px; color: #666; margin-bottom: 10px; font-weight: bold; text-transform: uppercase;">
                US-05 // DASHBOARD UTAMA // 256-BIT SYNC
            </div>
            <h1 style="font-size: 28px; font-weight: bold; line-height: 1.3; color: #111; margin-bottom: 15px;">
                Solusi Katering & Manajemen Dapur Modern Terintegrasi
            </h1>
            <p style="font-size: 14px; color: #555; line-height: 1.6; margin-bottom: 25px;">
                Penyedia paket harian, prasmanan katering korporat, dan kustomisasi menu dengan standar higienis berstandar HACCP dan transmisi instan ke stasiun koki ±5 menit.
            </p>
            <div style="display: flex; gap: 15px;">
                <a href="{{ route('katalog.index') }}" style="background: #000; color: #fff; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 13px;">
                    Pesan Katering Sekarang ▷
                </a>
                <a href="{{ route('katalog.index') }}" style="background: #fff; color: #333; border: 1px solid #ccc; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 13px;">
                    Jelajahi Katalog Menu
                </a>
            </div>
        </div>

        {{-- Kartu Simulasi Dapur / Live Widget di Kanan Hero --}}
        <div style="background: #f8f9fa; border: 1px solid #ddd; border-radius: 6px; padding: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; font-size: 12px; color: #666;">
                <span>⚡ Kitchen Standar ISO</span>
                <span style="background: #28a745; color: #fff; padding: 2px 6px; border-radius: 3px; font-size: 10px; font-weight: bold;">LIVE</span>
            </div>
            <div style="background: #fff; border: 1px dashed #ccc; height: 100px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 12px; color: #777; margin-bottom: 12px; text-align: center;">
                [Simulasi Alur Operasional Dapur Pusat]<br>KDS Terkoneksi & Ready 24/7
            </div>
            <div style="display: flex; justify-content: space-between; align-items: center; font-size: 12px; border-top: 1px solid #eee; pt-2; padding-top: 8px;">
                <span>📦 Batch Masak: ABC-182</span>
                <a href="{{ route('pesanan.create', 1) }}" style="color: #000; font-weight: bold; text-decoration: none;">BUKA KDS &gt;</a>
            </div>
        </div>
    </div>

    {{-- Statistik Bar --}}
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 40px; background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; text-align: center;">
        <div>
            <div style="font-size: 20px; font-weight: bold; color: #111; margin-bottom: 3px;">48.000+</div>
            <div style="font-size: 12px; color: #666; text-transform: uppercase;">Total Porsi Terkirim</div>
        </div>
        <div style="border-left: 1px solid #eee; border-right: 1px solid #eee;">
            <div style="font-size: 20px; font-weight: bold; color: #111; margin-bottom: 3px;">99,4%</div>
            <div style="font-size: 12px; color: #666; text-transform: uppercase;">Tepat Waktu</div>
        </div>
        <div>
            <div style="font-size: 20px; font-weight: bold; color: #111; margin-bottom: 3px;">4.9 / 5</div>
            <div style="font-size: 12px; color: #666; text-transform: uppercase;">Kepuasan Klien</div>
        </div>
    </div>

    {{-- 4 Fitur Keunggulan --}}
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; margin-bottom: 40px;">
        <div style="background: #fff; border: 1px solid #ddd; padding: 15px; border-radius: 6px;">
            <div style="font-size: 20px; margin-bottom: 8px;">🌱</div>
            <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px;">100% Bahan Segar</h4>
            <p style="font-size: 11px; color: #666; margin: 0; line-height: 1.4;">Dipanen dan dimasak di hari yang sama tanpa pengawet buatan.</p>
        </div>
        <div style="background: #fff; border: 1px solid #ddd; padding: 15px; border-radius: 6px;">
            <div style="font-size: 20px; margin-bottom: 8px;">🥗</div>
            <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px;">Kustomisasi Diet & Alergi</h4>
            <p style="font-size: 11px; color: #666; margin: 0; line-height: 1.4;">Sesuaikan kalori, bebas gluten, atau pantangan bagi tim/keluarga.</p>
        </div>
        <div style="background: #fff; border: 1px solid #ddd; padding: 15px; border-radius: 6px;">
            <div style="font-size: 20px; margin-bottom: 8px;">📊</div>
            <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px;">Transparansi Harga Real-Time</h4>
            <p style="font-size: 11px; color: #666; margin: 0; line-height: 1.4;">Perhitungan otomatis tanpa biaya tersembunyi langsung dari database.</p>
        </div>
        <div style="background: #fff; border: 1px solid #ddd; padding: 15px; border-radius: 6px;">
            <div style="font-size: 20px; margin-bottom: 8px;">💬</div>
            <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 5px;">Pelayanan 24/7 CS & AI Bot</h4>
            <p style="font-size: 11px; color: #666; margin: 0; line-height: 1.4;">Bantuan kurator menu interaktif dan live tracking status.</p>
        </div>
    </div>

    {{-- 2. KATEGORI LAYANAN KATERING --}}
    <div style="margin-bottom: 40px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px;">
            <div>
                <span style="font-size: 10px; color: #666; font-weight: bold; text-transform: uppercase;">Katalog Fungsional & Kategori Opsi</span>
                <h2 style="font-size: 20px; font-weight: bold; margin: 3px 0 0;">Kategori Layanan Katering</h2>
            </div>
            <span style="font-size: 12px; color: #666;">Label: Sesuai Visualisasi Plan 1</span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            
            {{-- Kategori 1: Paket Harian --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="background: #f0f0f0; border: 1px dashed #ccc; height: 90px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 11px; color: #777; margin-bottom: 12px;">
                        [ Visualisasi Paket Harian ]
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <h3 style="font-size: 16px; font-weight: bold; margin: 0;">Paket Harian</h3>
                        <strong style="font-size: 14px; color: #111;">Rp 35.000 / porsi</strong>
                    </div>
                    <p style="font-size: 12px; color: #666; margin-bottom: 15px; line-height: 1.4;">
                        Solusi makan siang kantor praktis dan higienis, diganti menu setiap hari agar tidak bosan.
                    </p>
                    <div style="font-size: 11px; color: #444; display: flex; flex-direction: column; gap: 5px; margin-bottom: 20px;">
                        <div>✓ Termasuk nasi, lauk utama, sayur, & kerupuk</div>
                        <div>✓ Termasuk eco-friendly box bersegel steril</div>
                        <div>✓ Jadwal pengiriman stabil (11:00 - 12:30)</div>
                    </div>
                </div>
                <a href="{{ route('pesanan.create', 1) }}" style="display: block; width: 100%; padding: 10px; background: #fff; color: #333; border: 1px solid #ccc; border-radius: 4px; text-align: center; text-decoration: none; font-size: 12px; font-weight: bold; box-sizing: border-box;">
                    Pilih Paket Harian
                </a>
            </div>

            {{-- Kategori 2: Paket Kustom (Paling Diminati) --}}
            <div style="background: #fff; border: 2px solid #000; border-radius: 8px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between; position: relative;">
                <div style="position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: #000; color: #fff; font-size: 10px; font-weight: bold; padding: 3px 10px; border-radius: 4px;">
                    PALING DIMINATI
                </div>
                <div>
                    <div style="background: #f8f9fa; border: 1px dashed #ccc; height: 90px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 11px; color: #777; margin-bottom: 12px;">
                        [ Visualisasi Paket Kustom ]
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <h3 style="font-size: 16px; font-weight: bold; margin: 0;">Paket Kustom</h3>
                        <strong style="font-size: 14px; color: #111;">Rp 45.000 / porsi</strong>
                    </div>
                    <p style="font-size: 12px; color: #666; margin-bottom: 15px; line-height: 1.4;">
                        Bebas pilih komposisi menu sesuai selera tim, kustomisasi porsi, dan preferensi bumbu khusus (rendah garam/pedas).
                    </p>
                    <div style="font-size: 11px; color: #444; display: flex; flex-direction: column; gap: 5px; margin-bottom: 20px;">
                        <div>✓ Kustomisasi menu & sambal dipisah</div>
                        <div>✓ Pengecekan suhu & koki standar HACCP</div>
                        <div>✓ Garansi ketepatan waktu esensial</div>
                    </div>
                </div>
                <a href="{{ route('pesanan.create', 1) }}" style="display: block; width: 100%; padding: 10px; background: #000; color: #fff; border: none; border-radius: 4px; text-align: center; text-decoration: none; font-size: 12px; font-weight: bold; box-sizing: border-box;">
                    KUSTOMISASI PESANAN SEKARANG
                </a>
            </div>

            {{-- Kategori 3: Prasmanan Acara --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="background: #f0f0f0; border: 1px dashed #ccc; height: 90px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 11px; color: #777; margin-bottom: 12px;">
                        [ Visualisasi Prasmanan Acara ]
                    </div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                        <h3 style="font-size: 16px; font-weight: bold; margin: 0;">Prasmanan Acara</h3>
                        <strong style="font-size: 14px; color: #111;">Rp 65.000 / pax</strong>
                    </div>
                    <p style="font-size: 12px; color: #666; margin-bottom: 15px; line-height: 1.4;">
                        Jamuan lengkap untuk meeting besar, peresmian kantor, atau acara keluarga dengan pramusaji profesional.
                    </p>
                    <div style="font-size: 11px; color: #444; display: flex; flex-direction: column; gap: 5px; margin-bottom: 20px;">
                        <div>✓ Termasuk set prasmanan, piring & cutlery kit</div>
                        <div>✓ Termasuk pramusaji siaga selama event</div>
                        <div>✓ Pilihan menu premium lebih dari >100 pax</div>
                    </div>
                </div>
                <a href="{{ route('pesanan.create', 1) }}" style="display: block; width: 100%; padding: 10px; background: #fff; color: #333; border: 1px solid #ccc; border-radius: 4px; text-align: center; text-decoration: none; font-size: 12px; font-weight: bold; box-sizing: border-box;">
                    Pilih Prasmanan
                </a>
            </div>

        </div>
    </div>

    {{-- 3. DAFTAR MENU UNGGULAN --}}
    <div style="margin-bottom: 40px;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 20px;">
            <div>
                <span style="font-size: 10px; color: #666; font-weight: bold; text-transform: uppercase;">Katalog Transparansi Pelanggan</span>
                <h2 style="font-size: 20px; font-weight: bold; margin: 3px 0 0;">Daftar Menu Unggulan</h2>
            </div>
            <span style="font-size: 12px; color: #666;">Semua menu sudah diverifikasi koki pusat dan tersertifikasi halal Grade A.</span>
        </div>

        {{-- Grid 4 Produk Unggulan --}}
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; margin-bottom: 15px;">
            
            {{-- Menu 1 --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 12px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 10px; color: #666; margin-bottom: 8px;">
                        <span>Halal • Tingkat 1 Opsi</span>
                        <span>Stok: 42</span>
                    </div>
                    <div style="background: #f9f9f9; border: 1px dashed #ccc; height: 80px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; margin-bottom: 8px;">
                        [ Foto Menu Nasi Liwet ]
                    </div>
                    <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 4px;">Nasi Liwet Solo Komplit</h4>
                    <p style="font-size: 11px; color: #666; margin: 0 0 10px; line-height: 1.3;">Nasi liwet gurih dengan suwiran ayam, telur pindang, sambal terasi, & lalapan segar.</p>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; pt-2; padding-top: 8px; margin-bottom: 8px;">
                        <span style="font-size: 10px; color: #666;">HARGA</span>
                        <strong style="font-size: 13px; color: #000;">Rp 38.000</strong>
                    </div>
                    <div style="display: flex; gap: 5px;">
                        <a href="{{ route('katalog.show', 1) }}" style="flex: 1; padding: 6px; background: #fff; border: 1px solid #ccc; border-radius: 3px; text-align: center; text-decoration: none; color: #333; font-size: 11px;">Detail</a>
                        <a href="{{ route('pesanan.create', 1) }}" style="flex: 1; padding: 6px; background: #000; color: #fff; border-radius: 3px; text-align: center; text-decoration: none; font-size: 11px;">Pesan</a>
                    </div>
                </div>
            </div>

            {{-- Menu 2 --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 12px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 10px; color: #666; margin-bottom: 8px;">
                        <span>Halal • Best Seller</span>
                        <span>Stok: 28</span>
                    </div>
                    <div style="background: #f9f9f9; border: 1px dashed #ccc; height: 80px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; margin-bottom: 8px;">
                        [ Foto Beef Bulgogi ]
                    </div>
                    <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 4px;">Beef Bulgogi Bento Box</h4>
                    <p style="font-size: 11px; color: #666; margin: 0 0 10px; line-height: 1.3;">Daging sapi tenderloin empuk dengan bumbu bulgogi khas Korea dan bento eksklusif.</p>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; pt-2; padding-top: 8px; margin-bottom: 8px;">
                        <span style="font-size: 10px; color: #666;">HARGA</span>
                        <strong style="font-size: 13px; color: #000;">Rp 45.000</strong>
                    </div>
                    <div style="display: flex; gap: 5px;">
                        <a href="{{ route('katalog.show', 1) }}" style="flex: 1; padding: 6px; background: #fff; border: 1px solid #ccc; border-radius: 3px; text-align: center; text-decoration: none; color: #333; font-size: 11px;">Detail</a>
                        <a href="{{ route('pesanan.create', 1) }}" style="flex: 1; padding: 6px; background: #000; color: #fff; border-radius: 3px; text-align: center; text-decoration: none; font-size: 11px;">Pesan</a>
                    </div>
                </div>
            </div>

            {{-- Menu 3 --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 12px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 10px; color: #666; margin-bottom: 8px;">
                        <span>Halal • Sehat</span>
                        <span>Stok: 15</span>
                    </div>
                    <div style="background: #f9f9f9; border: 1px dashed #ccc; height: 80px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; margin-bottom: 8px;">
                        [ Foto Ayam Bakar ]
                    </div>
                    <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 4px;">Ayam Bakar Taliwang</h4>
                    <p style="font-size: 11px; color: #666; margin: 0 0 10px; line-height: 1.3;">Ayam bakar rempah madu pedas manis dengan sambal plecing kangkung segar.</p>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; pt-2; padding-top: 8px; margin-bottom: 8px;">
                        <span style="font-size: 10px; color: #666;">HARGA</span>
                        <strong style="font-size: 13px; color: #000;">Rp 41.500</strong>
                    </div>
                    <div style="display: flex; gap: 5px;">
                        <a href="{{ route('katalog.show', 1) }}" style="flex: 1; padding: 6px; background: #fff; border: 1px solid #ccc; border-radius: 3px; text-align: center; text-decoration: none; color: #333; font-size: 11px;">Detail</a>
                        <a href="{{ route('pesanan.create', 1) }}" style="flex: 1; padding: 6px; background: #000; color: #fff; border-radius: 3px; text-align: center; text-decoration: none; font-size: 11px;">Pesan</a>
                    </div>
                </div>
            </div>

            {{-- Menu 4 --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 12px; display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div style="display: flex; justify-content: space-between; font-size: 10px; color: #666; margin-bottom: 8px;">
                        <span>Halal • Premium</span>
                        <span>Stok: 50</span>
                    </div>
                    <div style="background: #f9f9f9; border: 1px dashed #ccc; height: 80px; border-radius: 4px; display: flex; align-items: center; justify-content: center; font-size: 10px; color: #777; margin-bottom: 8px;">
                        [ Foto Rendang Daging ]
                    </div>
                    <h4 style="font-size: 13px; font-weight: bold; margin: 0 0 4px;">Rendang Daging Parahyangan</h4>
                    <p style="font-size: 11px; color: #666; margin: 0 0 10px; line-height: 1.3;">Daging sapi tenderloin empuk dimasak perlahan rempah kelapa murni dan daun singkong.</p>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #eee; pt-2; padding-top: 8px; margin-bottom: 8px;">
                        <span style="font-size: 10px; color: #666;">HARGA</span>
                        <strong style="font-size: 13px; color: #000;">Rp 55.000</strong>
                    </div>
                    <div style="display: flex; gap: 5px;">
                        <a href="{{ route('katalog.show', 1) }}" style="flex: 1; padding: 6px; background: #fff; border: 1px solid #ccc; border-radius: 3px; text-align: center; text-decoration: none; color: #333; font-size: 11px;">Detail</a>
                        <a href="{{ route('pesanan.create', 1) }}" style="flex: 1; padding: 6px; background: #000; color: #fff; border-radius: 3px; text-align: center; text-decoration: none; font-size: 11px;">Pesan</a>
                    </div>
                </div>
            </div>

        </div>

        <div style="text-align: right;">
            <a href="{{ route('katalog.index') }}" style="font-size: 12px; color: #000; font-weight: bold; text-decoration: none;">Lihat Semua Menu &gt;</a>
        </div>
    </div>

    {{-- 4. KDS REALTIME WIDGET (Transparansi Operasional) --}}
    <div style="background: #fff; border: 1px solid #ddd; border-radius: 8px; padding: 25px; margin-bottom: 40px;">
        <div style="font-size: 10px; color: #666; font-weight: bold; text-transform: uppercase; margin-bottom: 5px;">AIRWAY DISPLAY // INTEGRATED</div>
        <h2 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Transparansi Operasional dari Kompor ke Meja Anda</h2>
        <p style="font-size: 13px; color: #666; margin-bottom: 20px;">
            Sistem dapur live tracking terhubung langsung dengan Kitchen Display System (KDS) kami, memastikan setiap pesanan diproses higienis tanpa jeda.
        </p>

        <div style="display: grid; grid-template-columns: 1fr 1.5fr; gap: 25px; align-items: center;">
            <div style="display: flex; flex-direction: column; gap: 12px;">
                <div style="background: #f8f9fa; border: 1px solid #eee; padding: 12px; border-radius: 6px;">
                    <strong style="font-size: 12px; display: block; margin-bottom: 2px;">⚡ RELAY TIME KDS KITCHEN</strong>
                    <span style="font-size: 11px; color: #666;">Seluruh pesanan diproses otomatis ke stasiun koki sesuai antrean & batch kapasitas.</span>
                </div>
                <div style="background: #f8f9fa; border: 1px solid #eee; padding: 12px; border-radius: 6px;">
                    <strong style="font-size: 12px; display: block; margin-bottom: 2px;">🛡️ PACKAGING & KONTROL KUALITAS</strong>
                    <span style="font-size: 11px; color: #666;">Setiap kotak disegel thermal dengan sensor suhu terjaga dan stiker HACCP terpasang.</span>
                </div>
            </div>

            <div style="background: #111; color: #fff; border-radius: 6px; padding: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; font-size: 11px; color: #aaa;">
                    <span>STATUS: KITCHEN KDS SYNC ACTIVE</span>
                    <span style="background: #28a745; color: #fff; padding: 2px 6px; border-radius: 3px; font-weight: bold;">LIVE</span>
                </div>
                <div style="font-size: 13px; font-weight: bold; margin-bottom: 8px;">Shift Siang - Line 1 & Line 2 Aktif</div>
                <div style="background: #333; height: 6px; border-radius: 3px; overflow: hidden; margin-bottom: 15px;">
                    <div style="background: #28a745; width: 75%; height: 100%;"></div>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 11px; color: #ccc;">
                    <div>PT. Telkomsel Tower • 120 Porsi</div>
                    <div>41 Porsi • Taman Rasuna Box</div>
                </div>
            </div>
        </div>
    </div>

    {{-- 5. TESTIMONI KLIEN --}}
    <div style="margin-bottom: 40px;">
        <h2 style="font-size: 20px; font-weight: bold; text-align: center; margin-bottom: 25px;">Dipercaya 200+ Perusahaan dan Ribuan Pelanggan Harian</h2>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">
            <div style="background: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 6px;">
                <div style="color: #f39c12; margin-bottom: 8px;">★★★★★</div>
                <p style="font-size: 12px; color: #555; line-height: 1.5; margin-bottom: 15px;">
                    "Katering kantor paling on-time dan rasanya konsisten enak. Fitur kustomisasi sambal dipisah sangat membantu selera tim kami."
                </p>
                <div style="font-size: 12px; font-weight: bold;">Bambang Santoso</div>
                <div style="font-size: 11px; color: #666;">HR Manager Korporat</div>
            </div>
            <div style="background: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 6px;">
                <div style="color: #f39c12; margin-bottom: 8px;">★★★★★</div>
                <p style="font-size: 12px; color: #555; line-height: 1.5; margin-bottom: 15px;">
                    "Sistem pesanan online-nya sangat cepat, transparan, dan realtime. Cocok sekali untuk acara meeting besar mendadak."
                </p>
                <div style="font-size: 12px; font-weight: bold;">Amanda Kurniawan</div>
                <div style="font-size: 11px; color: #666;">Event Organizer</div>
            </div>
            <div style="background: #fff; border: 1px solid #ddd; padding: 20px; border-radius: 6px;">
                <div style="color: #f39c12; margin-bottom: 8px;">★★★★★</div>
                <p style="font-size: 12px; color: #555; line-height: 1.5; margin-bottom: 15px;">
                    "Standar higienisnya terjamin dengan segel merah HACCP. Makanan tiba dalam kondisi hangat di lantai 18 tower kami."
                </p>
                <div style="font-size: 12px; font-weight: bold;">Doni Aryanto</div>
                <div style="font-size: 11px; color: #666;">Procurement Lead</div>
            </div>
        </div>
    </div>

    {{-- 6. BANNER BAWAH CTA --}}
    <div style="background: #111; color: #fff; border-radius: 8px; padding: 30px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            <span style="font-size: 10px; color: #aaa; text-transform: uppercase; font-weight: bold;">SIAP MENYEDIAKAN KATERING SEGAR?</span>
            <h2 style="font-size: 22px; font-weight: bold; margin: 5px 0 0;">Pesan Katering Tanpa Kerumitan Sekarang</h2>
        </div>
        <div style="display: flex; gap: 10px;">
            <a href="{{ route('pesanan.create', 1) }}" style="background: #fff; color: #000; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 13px;">
                Pesan Pesanan Sekarang ▷
            </a>
            <a href="{{ route('katalog.index') }}" style="background: transparent; color: #fff; border: 1px solid #555; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; font-size: 13px;">
                Tanya Kurator Menu
            </a>
        </div>
    </div>

</div>
@endsection
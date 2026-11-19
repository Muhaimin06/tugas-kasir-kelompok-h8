@extends('layouts.app')

@section('title', 'Formulir Pemesanan Katering (US-01)')

@section('content')
<div class="container" style="padding: 20px 0; max-width: 1200px; margin: 0 auto;">
    
    {{-- Breadcrumb & Badge Atas --}}
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; font-size: 13px; color: #666;">
        <div>
            <a href="{{ route('katalog.index') }}" style="color: #666; text-decoration: none;">Beranda</a> &gt; 
            <a href="{{ route('katalog.index') }}" style="color: #666; text-decoration: none;">Katering & Menu</a> &gt; 
            <span style="color: #000; font-weight: bold;">Formulir Pemesanan Online (US-01)</span>
        </div>
        <div style="display: flex; gap: 10px;">
            <span style="background: #e9ecef; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: bold;">🛡️ Tes Validasi Kosong</span>
            <span style="background: #e9ecef; padding: 4px 10px; border-radius: 4px; font-size: 11px; font-weight: bold;">🔒 Enkripsi Operasional KDS 256-bit</span>
        </div>
    </div>

    {{-- Notifikasi Error Validasi --}}
    @if ($errors->any())
        <div style="background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 12px 15px; border-radius: 6px; margin-bottom: 20px; font-size: 14px;">
            <strong>Terjadi Kesalahan Pengisian:</strong>
            <ul style="margin: 5px 0 0 18px; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Layout Utama 2 Kolom (Grid) --}}
    <form action="{{ route('pesanan.store') }}" method="POST" style="display: grid; grid-template-columns: 2fr 1.2fr; gap: 25px; align-items: start;">
        @csrf
        <input type="hidden" name="id_menu" value="{{ $menu->id_menu }}">

        {{-- KOLOM KIRI: Form Input Data & Menu --}}
        <div>
            
            {{-- Header Form --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px;">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                    <span style="font-size: 11px; background: #000; color: #fff; padding: 3px 8px; border-radius: 4px; font-weight: bold; letter-spacing: 0.5px;">US-01 // DIRECT KITCHEN PIPELINE</span>
                    <span style="font-size: 12px; color: #666;">⏱️ Waktu respons: ±5 menit</span>
                </div>
                <h1 style="font-size: 22px; font-weight: bold; margin-bottom: 5px; color: #111;">Formulir Pemesanan Katering</h1>
                <p style="color: #666; font-size: 13px; line-height: 1.5; margin: 0;">
                    Lengkapi data pesanan di bawah ini untuk transmisi instan ke stasiun KDS Dapur Modern. Seluruh pesanan disiapkan segar dengan standar HACCP.
                </p>
            </div>

            {{-- 1. Data Kontak & Identitas Pemesan --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px;">
                <h2 style="font-size: 15px; font-weight: bold; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
                    <span style="background: #000; color: #fff; width: 22px; height: 22px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px;">1</span>
                    Data Kontak & Identitas Pemesan
                </h2>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Nama Lengkap Pelanggan *</label>
                        <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan') }}" placeholder="👤 Contoh: Budi Santoso" style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Nomor WhatsApp Aktif *</label>
                        <input type="text" name="no_telepon" value="{{ old('no_telepon') }}" placeholder="📱 081234567890 / +62812..." style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box;">
                    </div>
                </div>

                <div>
                    <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Alamat Lengkap Pengiriman *</label>
                    <textarea name="alamat" rows="3" placeholder="Gedung / Jalan, RT/RW, No. Rumah, Kelurahan, Kecamatan, Patokan lokasi..." style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box;">{{ old('alamat') }}</textarea>
                </div>
            </div>

            {{-- 2. Pilihan Menu & Volume Porsi --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; margin-bottom: 20px;">
                <h2 style="font-size: 15px; font-weight: bold; margin-bottom: 15px; display: flex; align-items: center; gap: 8px;">
                    <span style="background: #000; color: #fff; width: 22px; height: 22px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 12px;">2</span>
                    Pilihan Menu & Volume Porsi
                </h2>

                <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Pilihan Menu Terintegrasi *</label>
                        <select disabled style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; background: #f9f9f9; color: #333;">
                            <option>{{ $menu->nama_menu }} (Rp {{ number_format($menu->harga, 0, ',', '.') }} / porsi)</option>
                        </select>
                    </div>
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Jumlah Porsi</label>
                        <div style="display: flex; align-items: center;">
                            <button type="button" id="btnMinus" style="padding: 9px 12px; background: #eee; border: 1px solid #ccc; border-radius: 4px 0 0 4px; cursor: pointer; font-weight: bold;">-</button>
                            <input type="number" id="jumlah" name="jumlah" value="{{ old('jumlah', 10) }}" min="1" max="500" style="width: 100%; text-align: center; padding: 9px 0; border-top: 1px solid #ccc; border-bottom: 1px solid #ccc; border-left: none; border-right: none; font-size: 13px; font-weight: bold;">
                            <button type="button" id="btnPlus" style="padding: 9px 12px; background: #eee; border: 1px solid #ccc; border-radius: 0 4px 4px 0; cursor: pointer; font-weight: bold;">+</button>
                        </div>
                    </div>
                </div>

                {{-- Preview Kartu Menu Terpilih (Sesuai Wireframe) --}}
                <div style="border: 1px dashed #ccc; background: #fafafa; border-radius: 6px; padding: 15px; margin-bottom: 15px; display: flex; gap: 15px; align-items: center;">
                    <div style="background: #fff; border: 1px solid #ddd; padding: 10px; border-radius: 4px; text-align: center; min-width: 70px;">
                        <span style="font-size: 10px; color: #666; display: block;">[ WIREFRAME ]</span>
                        <span style="font-size: 18px;">🍱</span>
                    </div>
                    <div>
                        <div style="display: flex; gap: 8px; margin-bottom: 4px;">
                            <span style="background: #d4edda; color: #155724; font-size: 10px; font-weight: bold; padding: 2px 6px; border-radius: 3px;">Paling Diminati</span>
                            <span style="background: #e2e3e5; color: #383d41; font-size: 10px; font-weight: bold; padding: 2px 6px; border-radius: 3px;">100% Halal Grade A</span>
                        </div>
                        <h4 style="font-size: 14px; font-weight: bold; margin: 0 0 3px;">{{ $menu->nama_menu }}</h4>
                        <p style="font-size: 12px; color: #666; margin: 0;">{{ $menu->deskripsi_menu ?? 'Menu pilihan berkualitas tinggi disiapkan khusus dengan bahan segar.' }}</p>
                    </div>
                </div>

                {{-- Tanggal & Jam Pengiriman --}}
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Tanggal Pengiriman *</label>
                        <input type="date" name="tanggal_pengiriman" value="{{ date('Y-m-d') }}" style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: bold; font-size: 13px; margin-bottom: 5px;">Jam Kedatangan *</label>
                        <input type="time" name="jam_kedatangan" value="11:30" style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box;">
                    </div>
                </div>

                {{-- Catatan Kustom & Quick Tags --}}
                <div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 5px;">
                        <label style="font-weight: bold; font-size: 13px;">Catatan Khusus & Kustomisasi Dapur</label>
                        <span style="font-size: 11px; color: #666;">Opsional</span>
                    </div>
                    <textarea id="catatan_kustom" name="catatan_kustom" rows="2" placeholder="Contoh: Kurangi pedas, sambal dipisah, box kemasan eco-friendly, jangan pakai bawang goreng..." style="width: 100%; padding: 9px 12px; border: 1px solid #ccc; border-radius: 4px; font-size: 13px; box-sizing: border-box; margin-bottom: 8px;">{{ old('catatan_kustom') }}</textarea>
                    
                    {{-- Tombol Quick Tags (Sesuai Wireframe) --}}
                    <div style="display: flex; gap: 6px; flex-wrap: wrap;">
                        <button type="button" class="tag-btn" data-tag="+ Sambal Dipisah" style="background: #f1f3f5; border: 1px solid #ced4da; padding: 4px 10px; border-radius: 4px; font-size: 11px; cursor: pointer;">+ Sambal Dipisah</button>
                        <button type="button" class="tag-btn" data-tag="+ Kurangi Pedas" style="background: #f1f3f5; border: 1px solid #ced4da; padding: 4px 10px; border-radius: 4px; font-size: 11px; cursor: pointer;">+ Kurangi Pedas</button>
                        <button type="button" class="tag-btn" data-tag="+ Eco-Friendly Box" style="background: #f1f3f5; border: 1px solid #ced4da; padding: 4px 10px; border-radius: 4px; font-size: 11px; cursor: pointer;">+ Eco-Friendly Box</button>
                        <button type="button" class="tag-btn" data-tag="+ Bebas MSG" style="background: #f1f3f5; border: 1px solid #ced4da; padding: 4px 10px; border-radius: 4px; font-size: 11px; cursor: pointer;">+ Bebas MSG</button>
                    </div>
                </div>
            </div>

        </div>

        {{-- KOLOM KANAN: Kalkulator Pesanan & Tombol Kirim --}}
        <div>
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 20px; position: sticky; top: 20px;">
                
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #eee; padding-bottom: 12px; margin-bottom: 15px;">
                    <h3 style="font-size: 16px; font-weight: bold; margin: 0; display: flex; align-items: center; gap: 6px;">
                        🧮 Kalkulator Pesanan
                    </h3>
                    <span style="background: #28a745; color: #fff; font-size: 10px; font-weight: bold; padding: 2px 6px; border-radius: 3px;">LIVE</span>
                </div>

                {{-- Ringkasan Item --}}
                <div style="margin-bottom: 15px; font-size: 13px;">
                    <div style="font-weight: bold; color: #222;">{{ $menu->nama_menu }}</div>
                    <div style="color: #666;" id="subItemLabel">10 porsi × Rp {{ number_format($menu->harga, 0, ',', '.') }}</div>
                    <div style="text-align: right; font-weight: bold; font-size: 14px; margin-top: 5px;" id="subItemTotal">Rp {{ number_format($menu->harga * 10, 0, ',', '.') }}</div>
                </div>

                <hr style="border: none; border-top: 1px solid #eee; margin-bottom: 15px;">

                {{-- Rincian Biaya --}}
                <div style="font-size: 13px; display: flex; flex-direction: column; gap: 8px; margin-bottom: 15px;">
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Subtotal Makanan</span>
                        <span id="subtotalText" style="font-weight: bold; color: #222;">Rp {{ number_format($menu->harga * 10, 0, ',', '.') }}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Biaya Pengiriman ⓘ</span>
                        <span>Rp 25.000</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #28a745;">
                        <span>Diskon Promo Dapur</span>
                        <span>- Rp 0</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; color: #555;">
                        <span>Pajak Restoran (PB1 10%)</span>
                        <span id="taxText">Rp {{ number_format(($menu->harga * 10) * 0.1, 0, ',', '.') }}</span>
                    </div>
                </div>

                {{-- Input Kupon --}}
                <div style="display: flex; gap: 8px; margin-bottom: 20px;">
                    <input type="text" placeholder="Kupon: DAPURLEZAT (-10%)" style="flex: 1; padding: 8px; border: 1px solid #ccc; border-radius: 4px; font-size: 12px; background: #fdfdfd;">
                    <button type="button" style="padding: 8px 12px; background: #000; color: #fff; border: none; border-radius: 4px; font-size: 12px; font-weight: bold; cursor: pointer;">Terapkan</button>
                </div>

                <hr style="border: none; border-top: 2px solid #333; margin-bottom: 15px;">

                {{-- Total Pembayaran --}}
                <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 20px;">
                    <div>
                        <div style="font-size: 13px; font-weight: bold; color: #222;">TOTAL PEMBAYARAN</div>
                        <div style="font-size: 11px; color: #777;">Sudah termasuk pajak</div>
                    </div>
                    <div id="grandTotalText" style="font-size: 22px; font-weight: bold; color: #000;">
                        Rp {{ number_format(($menu->harga * 10) + 25000 + (($menu->harga * 10) * 0.1), 0, ',', '.') }}
                    </div>
                </div>

                {{-- Tombol Kirim Pesanan --}}
                <button type="submit" style="width: 100%; padding: 12px; background: #000; color: #fff; border: none; border-radius: 4px; font-size: 14px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 15px;">
                    <span>▷</span> Kirim Pesanan Sekarang
                </button>

                {{-- Footer Info Box Kanan --}}
                <div style="display: flex; justify-content: space-around; border-top: 1px solid #eee; padding-top: 12px; font-size: 11px; color: #666; text-align: center;">
                    <div>
                        <div>🔒</div>
                        <div>KDS Terkoneksi</div>
                    </div>
                    <div>
                        <div>🛡️</div>
                        <div>Garansi Tepat Waktu</div>
                    </div>
                </div>

            </div>

            {{-- Kotak Bantuan Kustomisasi --}}
            <div style="background: #fff; border: 1px solid #ddd; border-radius: 6px; padding: 15px; margin-top: 15px; display: flex; align-items: center; gap: 12px;">
                <div style="font-size: 24px;">🎧</div>
                <div style="font-size: 12px; color: #555;">
                    <strong style="display: block; color: #000; margin-bottom: 2px;">Butuh Kustomisasi Khusus?</strong>
                    Hubungi tim kurator menu untuk &gt;100 pax.
                </div>
            </div>

        </div>

    </form>
</div>

{{-- Skrip Kalkulator Interaktif & Quick Tags --}}
<script>
    const hargaSatuan = {{ $menu->harga }};
    const inputJumlah = document.getElementById('jumlah');
    const btnMinus = document.getElementById('btnMinus');
    const btnPlus = document.getElementById('btnPlus');
    
    const subItemLabel = document.getElementById('subItemLabel');
    const subItemTotal = document.getElementById('subItemTotal');
    const subtotalText = document.getElementById('subtotalText');
    const taxText = document.getElementById('taxText');
    const grandTotalText = document.getElementById('grandTotalText');
    const catatanInput = document.getElementById('catatan_kustom');

    function updateKalkulator() {
        let qty = parseInt(inputJumlah.value) || 1;
        if (qty < 1) qty = 1;
        if (qty > 500) qty = 500;
        
        const subtotal = hargaSatuan * qty;
        const biayaKirim = 25000;
        const pajak = subtotal * 0.1;
        const grandTotal = subtotal + biayaKirim + pajak;

        subItemLabel.textContent = qty + ' porsi × Rp ' + hargaSatuan.toLocaleString('id-ID');
        subItemTotal.textContent = 'Rp ' + subtotal.toLocaleString('id-ID');
        subtotalText.textContent = 'Rp ' + subtotal.toLocaleString('id-ID');
        taxText.textContent = 'Rp ' + pajak.toLocaleString('id-ID');
        grandTotalText.textContent = 'Rp ' + grandTotal.toLocaleString('id-ID');
    }

    inputJumlah.addEventListener('input', updateKalkulator);

    btnMinus.addEventListener('click', function() {
        let qty = parseInt(inputJumlah.value) || 1;
        if (qty > 1) {
            inputJumlah.value = qty - 1;
            updateKalkulator();
        }
    });

    btnPlus.addEventListener('click', function() {
        let qty = parseInt(inputJumlah.value) || 1;
        if (qty < 500) {
            inputJumlah.value = qty + 1;
            updateKalkulator();
        }
    });

    // Quick Tags Script
    document.querySelectorAll('.tag-btn').forEach(button => {
        button.addEventListener('click', function() {
            const tagText = this.getAttribute('data-tag');
            if (catatanInput.value.trim() === '') {
                catatanInput.value = tagText;
            } else {
                catatanInput.value += ', ' + tagText;
            }
        });
    });

    // Jalankan saat pertama load
    updateKalkulator();
</script>
@endsection
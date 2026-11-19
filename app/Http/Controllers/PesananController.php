<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PesananController extends Controller
{
    /**
     * Menampilkan formulir pemesanan untuk menu tertentu.
     */
    public function create($id_menu)
    {
        $menu = Menu::with('kategori')->findOrFail($id_menu);

        // Jika status menu habis, kembalikan ke katalog dengan pesan error
        if (strtolower($menu->status_ketersediaan) !== 'tersedia') {
            return redirect()->route('katalog.index')
                ->with('error', 'Maaf, menu tersebut sedang habis.');
        }

        return view('pesanan.create', compact('menu'));
    }

    /**
     * Memvalidasi dan menyimpan pesanan ke database (US-01 & US-03).
     */
    public function store(Request $request)
    {
        // Validasi input wajib (Kriteria Gagal US-01) & batas karakter catatan (Kriteria Batas US-03)
        $validated = $request->validate([
            'id_menu'        => 'required|exists:menus,id_menu',
            'nama_pelanggan' => 'required|string|max:100',
            'no_telepon'     => 'required|string|max:20',
            'alamat'         => 'required|string|max:255',
            'jumlah'         => 'required|integer|min:1|max:500',
            'catatan_kustom' => 'nullable|string|max:200', // Batas maksimal 200 karakter sesuai US-03
        ], [
            'nama_pelanggan.required' => 'Nama lengkap wajib diisi.',
            'no_telepon.required'     => 'Nomor telepon/WhatsApp wajib diisi.',
            'alamat.required'         => 'Alamat pengiriman wajib diisi.',
            'jumlah.required'         => 'Jumlah pesanan wajib diisi.',
            'jumlah.min'              => 'Minimal pemesanan adalah 1 porsi.',
            'catatan_kustom.max'      => 'Catatan kustom tidak boleh lebih dari 200 karakter.',
        ]);

        $menu = Menu::findOrFail($validated['id_menu']);
        $totalHarga = $menu->harga * $validated['jumlah'];

        // Gunakan DB Transaction agar semua tabel tersimpan serentak dan aman
        $pesanan = DB::transaction(function () use ($validated, $menu, $totalHarga) {
            // 1. Simpan atau perbarui data pelanggan berdasarkan no_telepon
            $pelanggan = Pelanggan::updateOrCreate(
                ['no_telepon' => $validated['no_telepon']],
                [
                    'nama_pelanggan' => $validated['nama_pelanggan'],
                    'alamat'         => $validated['alamat'],
                ]
            );

            // 2. Buat record pesanan utama
            $pesananBaru = Pesanan::create([
                'id_pelanggan'    => $pelanggan->id_pelanggan,
                'tanggal_pesanan' => Carbon::now(),
                'status_pesanan'  => 'Menunggu Konfirmasi',
                'total_harga'     => $totalHarga,
            ]);

            // 3. Simpan detail item dan catatan kustom
            DetailPesanan::create([
                'id_menu'        => $menu->id_menu,
                'id_pesanan'     => $pesananBaru->id_pesanan,
                'jumlah'         => $validated['jumlah'],
                'catatan_kustom' => $validated['catatan_kustom'],
            ]);

            return $pesananBaru;
        });

        // Arahkan ke halaman konfirmasi bukti pesanan (Kriteria Berhasil US-01)
        return redirect()->route('pesanan.success', $pesanan->id_pesanan);
    }

    /**
     * Menampilkan halaman bukti / konfirmasi pesanan berhasil.
     */
    public function success($id_pesanan)
    {
        $pesanan = Pesanan::with(['pelanggan', 'detailPesanans.menu'])->findOrFail($id_pesanan);

        return view('pesanan.success', compact('pesanan'));
    }
}

?>
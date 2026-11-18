<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request): \Illuminate\View\View
    {
        // 1. Tangkap input 'q' dari form pencarian
        $q = $request->input('q', '');

        // 2. Ambil data dari database menggunakan Model Menu beserta relasi Kategori
        $query = Menu::with('kategori');

        // Jika ada kata kunci pencarian
        if (!empty($q)) {
            $query->where(function($sub) use ($q) {
                $sub->where('nama_menu', 'like', "%{$q}%")
                    ->orWhereHas('kategori', function($kat) use ($q) {
                        $kat->where('nama_kategori', 'like', "%{$q}%");
                    });
            });
        }

        $menusFromDb = $query->get();

        // 3. Mapping data dari database agar strukturnya sama persis dengan array dummy sebelumnya
        // (sehingga view Blade Anda tidak perlu diubah kodenya)
        $produk = $menusFromDb->map(function ($item) {
            return [
                'id'         => $item->id_menu,
                'nama'       => $item->nama_menu,
                'kategori'   => $item->kategori ? $item->kategori->nama_kategori : 'Umum',
                'harga'      => $item->harga,
                'stok'       => 10, // Sesuaikan jika nanti ada kolom stok di database Anda
                'deskripsi'  => $item->deskripsi_menu,
                'status'     => $item->status_ketersediaan,
            ];
        });

        // 4. Kirim data ke view
        return view('katalog.index', compact('produk', 'q'));
    }
}
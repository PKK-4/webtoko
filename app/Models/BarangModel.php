<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{

    public function kategorihome() {
        return DB::table('kategori')->get();
    }

    public function kategorihomeslide() {
        return DB::table('kategori')->get()->random(10);
    }

    public function allbarang()
    {
        return DB::table('barang')
            ->get();
            // ->random();
    }


    public function trending()
    {
        return DB::table('barang')
            ->get();
            // ->random();
    }

    public function pilihanHariIni()
    {
        return DB::table('barang')
            ->get();
            // ->random();
    }

    public function rekomendasi()
    {
        return DB::table('barang')
            ->get();
            // ->random();
    }

    public function lainnya()
    {
        return DB::table('barang')
            ->get();
            // ->random();
    }


    // terbaru page
    public function terbaru()
    {
        return DB::table('barang')
            ->orderby('barang.id', 'DESC')
            ->paginate(20);
    }

    public function terbaruDaerah($daerah)
    {
        return DB::table('barang')
            ->where('daerah', $daerah)
            ->orderby('barang.id', 'DESC')
            ->paginate(8);
    }

    // kategori page
    public function detailData($id)
    {
        return DB::table('barang')->join('toko', 'toko.id_member', '=', 'barang.id_member')
            ->join('users', 'users.id', '=', 'barang.id_member')
            ->join('kategori', 'kategori.kategori', '=', 'barang.kategori')
            ->select('barang.*', 'toko.instagram', 'toko.link_ig', 'toko.facebook', 'toko.link_fb', 'toko.telpon', 'users.name', 'users.telp', 'users.hp', 'users.id','users.username', 'toko.id', 'toko.nama_toko', 'toko.alamat_toko', 'kategori.nama', 'barang.id',)
            ->where('barang.id', $id)->first();

    }
    public function detailLainnya()
    {
        return DB::table('barang')
            ->get()
            ->random(4);
    }
    public function allKategori()
    {
        return DB::table('kategori')->get();
    }
}

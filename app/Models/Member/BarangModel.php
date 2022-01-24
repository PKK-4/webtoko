<?php

namespace App\Models\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BarangModel extends Model
{
    public function allData()
    {
        return DB::table('barang')->get();
    }

    public function allKategori()
    {
        return DB::table('kategori')->get();
    }

    public function addData($data)
    {
        DB::table('barang')->insert($data);
    }

    public function dataBarang($id)
    {
        return DB::table('barang')->where('barang.id', $id)->get();
    }

    public function detailData($id)
    {
        return DB::table('barang')->join('toko', 'toko.id_member', '=', 'barang.id_member')
            ->join('users', 'users.id', '=', 'barang.id_member')
            ->join('kategori', 'kategori.kategori', '=', 'barang.kategori')
            ->select('barang.*', 'toko.instagram', 'toko.link_ig', 'toko.facebook', 'toko.link_fb', 'toko.telpon', 'users.name', 'users.telp', 'users.hp', 'users.id','users.username', 'toko.id', 'toko.nama_toko', 'toko.alamat_toko', 'kategori.nama', 'barang.id',)
            ->where('barang.id', $id)->first();

    }

    public function destroyData($id)
    {
        DB::table('barang')
            ->where('id', $id)
            ->delete();
    }
}

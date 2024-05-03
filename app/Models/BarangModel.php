<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BarangModel extends Model
{
    use HasFactory;
    protected $table = 'm_barang';
    protected $primaryKey = 'barang_id';

    protected $fillable = [
        'barang_id',
        'kategori_id',
        'barang_kode',
        'barang_nama',
        'harga_beli',
        'harga_jual',
        'image'

    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
    public function stok(): HasOne
    {
        return $this->hasOne(StokModel::class, 'barang_id', 'barang_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(get: fn ($image) => url('storage/posts/' . $image));
    }
}

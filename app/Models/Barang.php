<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang'; // Specify the table name if it's different from the model name convention.

    protected $keyType = 'string'; // Set the data type of the primary key.

    protected $fillable = [
        'KodeBarang',
        'NamaBarang',
        'Satuan',
        'HargaSatuan',
        'Stok',
    ];

    // Optionally, you can define relationships, additional methods, etc.
}

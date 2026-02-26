<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $key = 'id';
    protected $guarded = ['id'];
    public $timestamps = true;
}

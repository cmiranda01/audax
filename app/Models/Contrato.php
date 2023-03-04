<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    protected $fillable = ['id_cliente'];

    public function user()
    {
        return $this->belongsTo(User::class,'id_cliente');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='purchase_translations';
    protected $fillable = ['note'];
}

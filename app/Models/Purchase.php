<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Purchase extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
   
    public $translatedAttributes = ['note'];
    protected $fillable = ['date','statement','subproject','breakeevenvalue','warehouse_id','currency_id','vendor_id','product_purchase_id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}

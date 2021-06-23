<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Product extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;


    public $translatedAttributes = ['name_product_type', 'name_product'];
    protected $guarded = ['id','created_at','updated_at	'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Product';


    public function category()
    {
        return $this->belongsTo(Category::class);
    }




    public function productType()
    {
        return $this->belongsTo(ProductType::class,'products_type_id','id');
    }

    public function costWay()
    {
        return $this->belongsTo(CostWay::class,'cost_way_id','id');
    }



    public function discount()
    {
        return $this->belongsTo(Discount::class,'discount_id','id');
    }

    public function taxes()
    {
        return $this->belongsToMany(Tax::class);
    }

    public function bulkunits()
    {
        return $this->belongsToMany(Bulkunit::class);
    }

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function guarantee()
    {
        return $this->belongsTo(Guarantee::class);
    }

    public function optionvalues(){
        return $this->belongsToMany(OptionValue::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

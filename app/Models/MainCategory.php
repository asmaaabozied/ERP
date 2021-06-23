<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\Activitylog\Traits\LogsActivity;

class MainCategory extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    protected $table ="categories";

    public $translatedAttributes = ['name', 'description','notes'];
    protected $fillable = ['category_id','cost_way_id','unit_id','type_id','is_parent','code','image',
    'category_id','cost_way_id','unit_id','type_id','active','apply_taxes'];
    
    public $translationForeignKey = 'category_id';
    // protected static $recordEvents = ['deleted','created','updated'];
    // protected static $logAttributes = ['guarantee_id','kind_guarantee'];
    // protected static $logName = 'Employ';
    protected static function boot()
    {
        parent::boot();
        //To get Main Categories only
        static::addGlobalScope('parent', function (Builder $builder) {
            $builder->where('is_parent','1');
        });

        //To put the parent flag true if add main category
        static::creating(function ($query) {
            $query->is_parent = '1';
        });
    }
}

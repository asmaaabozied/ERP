<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductTypeTranslation extends Model
{
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['name'];
    protected $table = 'product_types_translations';
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['product_type_id', 'name'];
    protected static $logName = 'ProductType translation';

}

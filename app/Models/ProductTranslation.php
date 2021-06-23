<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class ProductTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['name_product_type', 'name_product'];

    
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['product_id', 'name_product'];
    protected static $logName = 'Product translation';
}
    
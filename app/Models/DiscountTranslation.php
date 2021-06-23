<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class DiscountTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $table='discounts_translations';
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['discount_id','name'];
    protected static $logName = 'Discount translation';
}

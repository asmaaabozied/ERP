<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class CartTranslation extends Model
{

    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $fillable = ['name','name_type'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['cart_id','name'];
    protected static $logName = 'Cart translation';
}

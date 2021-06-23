<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Vip extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $guarded = ['id','created_at','updated_at	'];


    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id' , 'name'];
    protected static $logName = 'Vip';
}

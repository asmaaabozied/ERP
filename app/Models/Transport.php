<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Transport extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $guarded = ['id','created_at','updated_at	'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id', 'name'];
    protected static $logName = 'Transport';
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}

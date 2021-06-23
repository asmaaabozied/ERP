<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class District extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    protected $fillable = ['city_id'];
    public $translatedAttributes = ['name'];
    use LogsActivity;

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id', 'city_id'];
    protected static $logName = 'District';

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
        
    }
    
}

<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class City extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name'];
    protected $fillable = ['country_id'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'City';

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
        
    }
}

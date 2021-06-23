<?php

namespace App\Models;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Branch extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;

    use LogsActivity;
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['city_id','country_id'];
    protected static $logName = 'Branch';


    public $translatedAttributes = ['name'];
    protected $fillable = ['country_id','city_id','district_id','lat','long','address'];




    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}

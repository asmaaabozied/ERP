<?php

namespace App\Models;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Warehouse extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    use LogsActivity;

    protected $fillable = ['country_id','city_id','district_id','branch_id','employ_id','voucher_id','store_first','store_last','parent_id','in_foriegn','out_foriegn'];
    public $translatedAttributes =['ware_name','address','notes'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id','employ_id'];
    protected static $logName = 'Warehouse';

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
        
    }
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
        
    }
    public function district()
    {
        return $this->belongsTo(District::class, 'district_id');
        
    }
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
        
    }
    public function employ()
    {
        return $this->belongsTo(Employ::class, 'employ_id');
        
    }
    public function voucherin()
    {
        return $this->belongsTo(Voucher::class, 'in_foriegn');
        
    }
    public function voucherout()
    {
        return $this->belongsTo(Voucher::class, 'out_foriegn');
        
    }
}

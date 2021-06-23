<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class Discount extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;


    public function products()
    {
        return $this->hasMany(Product::class);
    }


    public $translatedAttributes = ['name'];
    protected $fillable = ['active', 'amount','type','start_date','end_date'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id'];
    protected static $logName = 'Discount';
}

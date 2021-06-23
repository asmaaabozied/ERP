<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Spatie\Activitylog\Traits\LogsActivity;

class OptionValue extends Model implements TranslatableContract
{
    use Translatable;
    use LogsActivity;

    public $translatedAttributes = ['name'];
    protected $fillable = ['option_id'];
    
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['id','option_id'];
    protected static $logName = 'Option Values';

    public function product(){
        return $this->belongsToMany(Product::class);
    }
}

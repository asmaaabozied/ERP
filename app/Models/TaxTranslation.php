<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TaxTranslation extends Model
{
    use LogsActivity;

    protected $table = "taxes_translations";
    public $timestamps = false;
    protected $fillable = ['name'];
    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['tax_id', 'name'];
    protected static $logName = 'Tax translation';
}

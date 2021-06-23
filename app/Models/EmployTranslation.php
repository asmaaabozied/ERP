<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class EmployTranslation extends Model
{
    use HasFactory;
    use LogsActivity;

    public $timestamps = false;
    protected $table='employes_translations';

    protected $fillable = ['name','title'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['employ_id'];
    protected static $logName = 'Employ translation';
}

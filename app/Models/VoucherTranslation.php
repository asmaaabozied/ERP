<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class VoucherTranslation extends Model
{
    use LogsActivity;

    use HasFactory;
    public $timestamps = false;
    protected $table='vouchers_translations';
    protected $fillable = ['name'];

    protected static $recordEvents = ['deleted','created','updated'];
    protected static $logAttributes = ['voucher_id','name'];
    protected static $logName = 'Voucher Translation';
}

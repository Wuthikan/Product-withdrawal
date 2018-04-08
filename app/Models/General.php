<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class General extends Model
{
    use SoftDeletes;

    protected $table = "generals";
    protected $fillable =
    [
        'company_name',
        'address',
        'postcode',
        'district',
        'tax_no',
        'logo',
        'background',
        'initial',
        'alert_prepo',
        'alert_initialpo',
        'alert_postpo',
        'first_alert',
        'second_alert',
        'third_alert',
        'forth_alert',
        'username',
        'password',
        'server',
        'port',
        'type',
        'facebook',
        'twitter',
        'line',
        'tel',
        'google_analytic'
    ];

    public $timestamps = true;
    protected $softDelete = true;
}

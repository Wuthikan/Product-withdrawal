<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Delatbabel\Elocrypt\Elocrypt;

class DimGeneral extends Model
{
    use SoftDeletes;
    use Elocrypt;

    protected $table = "dim_general";
    protected $fillable =
    [
        'client_id',
        'company_name',
        'tax_no',
        'address',
        'sub_district_id',
        'district_id',
        'province_id',
        'postcode_id',
        'logo',
        'background',
        'alias',
        'alert_days_before_pre_po_end',
        'alert_days_before_initial_po_end',
        'alert_days_before_post_po_end',
        'alert_hours_after_no_approval_attempt_1',
        'alert_hours_after_no_approval_attempt_2',
        'alert_hours_after_no_approval_attempt_3',
        'alert_hours_after_no_approval_attempt_4',
        'alert_days_before_billing_due',
        'days_to_delete_unpaid_sales_order',
        'email_username',
        'email_password',
        'server_url',
        'server_port',
        'server_encryption_type',
        'facebook_url',
        'twitter_url',
        'line_url',
        'telephone_number',
        'google_analytic'
    ];
    protected $encrypts = [
        // 'company_name',
        // 'tax_no',
        // 'address',
        // 'email_username',
        // 'server_url',
        // 'server_port',
        // 'telephone_number',
        // 'google_analytic'
    ];

    public $timestamps = true;
    protected $softDelete = true;
}

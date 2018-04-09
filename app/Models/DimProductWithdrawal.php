<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class DimProductWithdrawal extends Model
{
    use SoftDeletes;


    protected $table = "dim_product_withdrawals";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;
    protected $fillable =
    [
        'client_id',
        'withdrawal_date',
        'refund',
        'referece_document_no',
        'contact_name',
        'event',
        'remark',
        'withdrawal_total',
        'is_approve',
        'user_approve_id'
      
    ];
    public function Company()
    {
        return $this->belongsTo('DurianSoftware\Models\Company', 'id', 'client_id');
    }
    public function Date()
    {
        return $this->belongsTo('DurianSoftware\Date', 'id', 'withdrawal_date');
    }
    public function ProductWithdrawalItem()
    {
        return $this->hasMany('DurianSoftware\Models\ProductWithdrawalItem', 'id', 'id');
    }
 

}

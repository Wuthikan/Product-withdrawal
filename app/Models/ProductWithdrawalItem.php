<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Delatbabel\Elocrypt\Elocrypt;

class ProductWithdrawalItem extends Model
{
	use SoftDeletes, Elocrypt;

	protected $table = "fact_product_withdrawal_items";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;
    protected $fillable = [
        'client_id',
        'product_withdrawal_id',
        'product_item_id',
        'withdrawal_from_type',
        'withdrawal_from_id',
        'withdrawal_quantity',
        'remark'
    ];
    protected $encrypts = [
        'product_item_id',
        'withdrawal_from_type',
        'withdrawal_quantity'
    ];

    public function Company()
    {
        return $this->belongsTo('DurianSoftware\Models\Company', 'id', 'client_id');
    }

    public function DimProductWithdrawal()
    {
        return $this->belongsTo('DurianSoftware\Models\DimProductWithdrawal', 'id', 'product_withdrawal_id');
    }

    public function WithdrawalFrom()
    {
        return $this->morphTo();
    }

	public function Product()
    {
        return $this->hasOne('DurianSoftware\Model\Product', 'id', 'product_item_id');
    }

}
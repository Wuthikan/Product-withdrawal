<?php

namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $table = "dim_products";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = [
        'id',
        'client_id',
        'publisher_id',
        'image',
        'product_code',
        'name',
        'description',
        'release_date',
        'initial_purchase_date',
        'cost',
        'is_stock_control',
        'is_serial_control',
        'sales_tax',
        'weight',
        'width',
        'height',
        'depth',
        'genre',
        'number_of_player',
        'minimum_stock',
        'rating',
        'import_duty',
        'aging_alert',
        'warranty',
        'pre_order_gifts',
        'other'
    ];
    // passed
    public function publisher()
    {
        return $this->hasOne('DurianSoftware\Models\Publisher', 'id', 'publisher_id');
    }

    public function unit()
    {
        return $this->belongsTo('DurianSoftware\Models\Unit', 'id');
    }
    // passed
    public function nicknames()
    {
        return $this->hasMany('DurianSoftware\Models\Nickname', 'product_id', 'id');
    }

    public function platform()
    {
        return $this->belongsToMany('DurianSoftware\Models\Platform', 'fact_product_serials');
    }

    public function category()
    {
        return $this->belongsToMany('DurianSoftware\Models\Category', 'fact_product_serials');
    }

    public function company()
    {
        return $this->belongsToMany('DurianSoftware\Models\Company', 'fact_unit_company');
    }

    public function tag()
    {
        return $this->belongsToMany('DurianSoftware\Models\Tag', 'fact_tags');
    }

    public function price()
    {
        return $this->belongsTo('DurianSoftware\Models\Price', 'product_id', 'id');
    }

    public function factUnitCompany()
    {
        return $this->belongsTo('DurianSoftware\Models\UnitCompanyItem', 'product_id', 'id');
    }
}

<?php
namespace DurianSoftware\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyGroup extends Model
{
    use SoftDeletes;

    protected $table = "dim_company_groups";
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $softDelete = true;

    protected $fillable = ['name', 'description', 'status', 'customer_tier_id'];

    /* Wait for customer Tier*/
    public function customertier()
    {
        return $this->belongsTo(\DurianSoftware\Models\CustomerTier::class, 'customer_tier_id', 'id');
    }

    public function companies()
    {
        return $this->hasMany(\DurianSoftware\Models\Company::class, 'company_group_id', 'id');
    }
}

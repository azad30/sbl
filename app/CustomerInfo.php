<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customerinfos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['branch_id', 'cu_type', 'customer_code', 'cu_name', 'cu_mobile', 'cu_email', 'cu_address', 'cu_country', 'cu_telephone', 'cu_ac_no', 'cu_credit_limit', 'cu_discount_rate_p', 'cu_discount_rate_d', 'cu_discount_rate_o', 'cu_discount_rate_g', 'cu_ac_no', 'cu_bank_name', 'cu_bank_branch_name', 'cu_description', 'reference_name', 'image', 'status', 'created_by', 'updated_by'];

    public function branch(){
        return $this->belongsTo('App\BranchInfo','branch_id');
    }
    
}

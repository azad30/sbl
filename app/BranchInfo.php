<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'branchinfos';

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
    protected $fillable = ['branch_id', 'company_id', 'branch_name', 'branch_type', 'b_mobile', 'b_email', 'b_address', 'b_country', 'b_telephone', 'b_web', 'b_acc_no', 'bank_name', 'bank_branch_name', 'b_sub_acc_no', 'b_license_no', 'b_description', 'image'];

    public function company(){
        return $this->belongsTo('App\CompanyInfo','company_id');
    }
    
}

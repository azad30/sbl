<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'companyinfos';

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
    protected $fillable = ['company_name', 'company_id', 'company_type', 'mobile', 'email', 'address', 'country', 'telephone', 'website', 'primary_company_ac_no', 'bank_name', 'branch_name', 'company_sub_ac_no', 'company_license_no', 'company_description', 'image', 'created_by', 'updated_by'];

    
}

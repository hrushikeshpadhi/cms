<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmRole extends Model
{
   protected $table = 'cms_roles';
	
     protected $fillable = [
    
	  'role_name'
    ];
}

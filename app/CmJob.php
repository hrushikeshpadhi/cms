<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmJob extends Model
{
    protected $table = 'cms_jobs';
	
     protected $fillable = [
    
	  'compname','assndate','exprenc','ctc','noticperiod','locn','userid','description','file'
    ];
}

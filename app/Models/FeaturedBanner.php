<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\HasAdvancedFilter;

class FeaturedBanner extends Model
{
    use HasAdvancedFilter;
    
    protected $orderable = [
       'title','details','image','status','featured','meta_title','meta_desc','language_id'
    ];

    protected $filtrable = [
       'title','details','image','status','featured','meta_title','meta_desc','language_id'
    ];

    protected $fillable = [
         'title','details','image','status','featured','meta_title','meta_desc','language_id'
    ];

    public $timestamps = false;
}
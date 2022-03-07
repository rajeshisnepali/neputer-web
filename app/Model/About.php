<?php

namespace App\Model;

use App\Model\BaseModel;
use App\Model\Product;


class About extends BaseModel
{
    protected $table = 'about_us';
    protected $fillable = ['title', 'image','short_description','description','status','order'];


}

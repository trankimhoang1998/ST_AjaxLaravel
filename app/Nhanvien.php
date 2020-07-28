<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    protected $fillable=['name','phone','email','address'];
}

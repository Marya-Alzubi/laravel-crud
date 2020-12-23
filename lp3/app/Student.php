<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
                                'fullname',
                                'nid',
                                'address',
                                'mobile',
                                'email',
                                'image'
                            ];
}

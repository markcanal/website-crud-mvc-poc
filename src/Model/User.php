<?php

namespace Agostech\CrudMvcPoc\Model;

use illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'tbl_users';
    public $timestamps = false;
}

<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'contact_tbl';

    protected $allowedFields = ['name', 'email', 'phone_num', 'message'];
}
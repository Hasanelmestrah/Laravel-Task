<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
     protected $fillable = [
          'name',
          'email',
          'Sex',
          'blood_Type',
      ];
    use HasFactory;
}

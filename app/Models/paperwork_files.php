<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paperwork_files extends Model
{
    use HasFactory;
    protected $table = 'paperwork_files';
    protected $fillable = [
        'name','filepath'
     ];
}

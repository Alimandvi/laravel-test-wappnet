<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'contact_number',
        'tags'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    protected $table = 'umowa';

    protected $primaryKey = 'id';

    use HasFactory;
}

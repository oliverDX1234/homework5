<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestEntry extends Model
{
    protected $table = 'test_entries';

    protected $fillable = ['name'];
}

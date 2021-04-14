<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock_Report extends Model
{
    use HasFactory;

    protected $table = 'stock__reports';

    protected $fillable = [
        'store','promoters_name','promoters_id','google_link',
    ];
}

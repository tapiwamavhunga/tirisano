<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model {
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ["name", "lastname", "company", "position", "country", "dateoftravel"];

    protected $casts = [
		'dateoftravel' => 'datetime'
	];

}

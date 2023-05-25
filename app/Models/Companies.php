<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Customers;

class Companies extends Model
{
    use HasFactory;

    protected $table='companies';

    protected $fillable = 
    [
       'id',
       'name',
       'address',
    ];

    public function customer(){
        return $this->belongsTo(Customers::class);
    }

}

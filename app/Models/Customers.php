<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Companies;

class Customers extends Model
{
    use HasFactory;

    protected $table='customers';

    protected $fillable = 
   [
      'id',
      'name',
      'surname',
      'phone',
      'email',
      'comment',
      'company_id',
   ];

   public function company(){
    return $this->hasMany(Companies::class);
}
}

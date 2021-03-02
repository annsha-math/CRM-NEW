<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = "ProductID";
    protected $fillable = ['ProductID','Name','Brand','Description','Price','Qty','Status','AdminID'];
    
}
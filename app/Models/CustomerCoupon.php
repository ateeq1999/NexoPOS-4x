<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerCoupon extends NsModel
{
    use HasFactory;
    
    protected $table    =   'nexopos_' . 'customers_coupons';
}

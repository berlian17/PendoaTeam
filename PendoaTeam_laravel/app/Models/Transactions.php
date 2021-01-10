<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'total_price'
    ];

    public function detail_transaction() {
        return $this->hasMany('App\Models\Detail_transactions');
    }
}

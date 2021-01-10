<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transactions extends Model
{
    use HasFactory;

    protected $table = 'detail_transactions';

    protected $fillable = [
        'customer_id', 'item_id', 'equipment_name', 'type', 'amount', 'period', 'price'
    ];

    public function transaction() {
        return $this->belongsTo('App\Models\Transactions');
    }
}

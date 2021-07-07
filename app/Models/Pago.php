<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'user_id',
        'liquidacion_id',
        'transfer_id',
        'amount',
        'authorization',
        'method',
        'operation_type',
        'transaction_type',
        'card_type',
        'card_brand',
        'card_holder_name',
        'card_allows_charges',
        'card_allows_payouts',
        'card_bank_name',
        'status',
        'currency',
        'creation_date',
        'operation_date',
        'description',
        'error_message',
        'order_id',
        'exchange_rate_from',
        'exchange_rate_date',
        'exchange_rate_value',
        'exchange_rate_to',
    ];
}

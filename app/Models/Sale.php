<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id', 
        'user_id',
        'sale_date',
        'tax',
        'total',
        'status',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function saleDetails(): HasMany
    {
        return $this->hasMany(SaleDetail::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'provider_id', 
        'user_id',
        'purchase_date',
        'tax',
        'total',
        'status',
        'picture',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }
    public function purchaseDetails(): HasMany
    {
        return $this->hasMany(PurchaseDetails::class);
    }
}

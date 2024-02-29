<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'Cust_id';
    protected $fillable = [
        'name',
        'email',
        'address'

    ];

    public function taxid(): HasOne
    {
        return $this->hasOne(Tax::class, 'customer_id');
    }

    public function manyPost(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}

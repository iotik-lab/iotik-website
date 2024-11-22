<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Device extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected function casts(): array    
    {
        return [
            'last_send' => 'datetime',
        ];
    }
    public function isOnline() : Attribute
    {
        return Attribute::make(
            get: fn () => $this->last_send->diffInMinutes(now()) <= 60 ,
        );
    } 
    public function record(): HasMany
    {
        return $this->hasMany(Record::class);
    }
}

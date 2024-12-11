<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incubator extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'leds' => 'array',
        ];
    }

    public function devices()
    {
        return $this->hasMany(Device::class, 'incubator_id');
    }
}

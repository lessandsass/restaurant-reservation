<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'tel_number',
        'table_id',
        'res_date',
        'guest_number',
    ];

    protected $dates = [
        'res_date'
    ];

    protected function casts(): array
    {
        return [
            'res_date' => 'datetime',
        ];
    }

    public function table()
    {
        return $this->belongsTo(Table::class);
    }

}

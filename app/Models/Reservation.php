<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    //give table name
    protected $table = 'ticket';
    protected $fillable = [
        'show_id',
        'user_id',
        'seat_number',
    ];

    public function show()
    {
        return $this->belongsTo(Show::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Nama tabel pivot
    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'service_id',
        'rating',
        'comment',
    ];

    /**
     * Relasi ke User pengulas.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke Service yang diulas.
     */
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'price',
        'description',
    ];

    /**
     * Relasi Inverse 1-to-Many: Service milik satu User (Mahasiswa pembuat jasa).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi Inverse 1-to-Many: Service milik satu Category.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi Many-to-Many: Service diulas oleh banyak User via tabel pivot 'reviews'.
     */
    public function reviewers()
    {
        return $this->belongsToMany(User::class, 'reviews')
                    ->withPivot('rating', 'comment')
                    ->withTimestamps();
    }
}
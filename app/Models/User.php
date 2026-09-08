<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // <-- Ditambahkan agar role bisa diisi
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // --- RELASI DATABASE ---

    /**
     * Relasi 1-to-Many: User (Mahasiswa) bisa memiliki banyak Service (Jasa).
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Relasi Many-to-Many: User memberikan ulasan ke banyak Service via tabel pivot 'reviews'.
     */
    public function reviewedServices()
    {
        return $this->belongsToMany(Service::class, 'reviews')
                    ->withPivot('rating', 'comment')
                    ->withTimestamps();
    }
}
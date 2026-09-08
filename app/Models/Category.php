<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    /**
     * Relasi 1-to-Many: Satu Category memiliki banyak Service.
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
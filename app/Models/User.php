<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Filament\Models\Contracts\FilamentUser; // ✅ ADD THIS
use Filament\Panel; // ✅ ADD THIS

class User extends Authenticatable implements FilamentUser // ✅ ADD THIS
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'is_admin', // ✅ ADD THIS (important)
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean', // ✅ GOOD PRACTICE
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // return $this->is_admin === 1;

        return $this->is_admin; // ✅ cleaner  
          }
}
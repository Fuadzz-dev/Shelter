<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Laravel\Fortify\Contracts\PasskeyUser;
use Laravel\Fortify\PasskeyAuthenticatable;
use Laravel\Fortify\TwoFactorAuthenticatable;

/**
 * @property int $user_id
 * @property string|null $nama_lengkap
 * @property string|null $name
 * @property string $email
 * @property string|null $nip
 * @property string|null $jabatan_departemen
 * @property string $role
 * @property mixed|null $foto_profil
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property Carbon|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 */
#[Fillable(['name', 'email', 'password', 'nama_lengkap', 'nip', 'foto_profil', 'jabatan_departemen', 'role', 'status'])]
#[Hidden(['password', 'two_factor_secret', 'two_factor_recovery_codes', 'remember_token'])]
class User extends Authenticatable implements PasskeyUser
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, PasskeyAuthenticatable, TwoFactorAuthenticatable;

    protected $table = 'user';

    protected $primaryKey = 'user_id';

    /**
     * Map the virtual/original 'name' attribute to the database 'nama_lengkap' column.
     */
    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value, array $attributes) => $attributes['nama_lengkap'] ?? null,
            set: fn (string $value) => ['nama_lengkap' => $value],
        );
    }

    /**
     * Map the virtual/original 'id' attribute to 'user_id'.
     */
    protected function id(): Attribute
    {
        return Attribute::make(
            get: fn (?int $value, array $attributes) => $attributes['user_id'] ?? null,
            set: fn (int $value) => ['user_id' => $value],
        );
    }

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
            'two_factor_confirmed_at' => 'datetime',
        ];
    }
}

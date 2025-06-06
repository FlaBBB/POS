<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = "m_user";
    protected $primaryKey = "user_id";
    public $incrementing = true;

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password',
        'level_id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function level(): HasOne
    {
        return $this->hasOne(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName()
    {
        return $this->level->level_nama;
    }

    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }

    public function getRole()
    {
        return $this->level->level_kode;
    }
}

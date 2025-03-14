<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserModel extends Model
{
    use HasFactory;

    protected $table = "m_user";
    protected $primaryKey = "user_id";
    public $incrementing = true;

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    public function level(): HasOne
    {
        return $this->hasOne(LevelModel::class, 'level_id', 'level_id');
    }
}

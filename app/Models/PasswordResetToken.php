<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordResetToken extends Model
{
    use HasFactory;
    protected $table = 'password_reset_tokens';
    protected $primaryKey = 'email';
    protected $keyType = 'string';
    protected $fillable = ['email', 'token', 'created_at'];

    // jika icrementing true, akan selalu menampilkan value 0
    public $incrementing = false;
    public $timestamps = false;
}

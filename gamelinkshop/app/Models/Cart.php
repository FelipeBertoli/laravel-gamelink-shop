<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart  extends Model
{
    use HasFactory;
    protected $table = "cart";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'totalItens',
        'price',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function cartGames() {
        return $this->hasMany(GameCart::class);
    }
}

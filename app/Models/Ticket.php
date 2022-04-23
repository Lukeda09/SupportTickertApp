<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table = 'tickets';

    protected $fillable = [
        'title',
        'description',
        'creator',
        'agent',
        'status',
        'is_closed'
    ];

    /**
     * Get creator.
     */
    public function creator()
    {
        return $this->belongsTo(User::class, 'users.id', 'creator');
    }

    /**
     * Get agent.
     */
    public function agent()
    {
        return $this->belongsTo(User::class, 'users.id', 'agent');
    }
}

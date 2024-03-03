<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [

        'full_name',
        'mobile',
        'age',
        'gender',
        'job_title',
        'website',
        'Total_experience',
        'address',
        'city',
        'state',
        'country',
        'postcode',
        'language',
        'education',
        'info',
        'skills',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}

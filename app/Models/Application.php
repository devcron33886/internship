<?php

namespace App\Models;

use App\Models\Enum\ApplicationStatus;
use App\Models\Enum\ApplicationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'department_id',
        'name',
        'email',
        'phone',
        'status',
        'document',
        'type',
        'biography',
        'interview_date',
        'interview_notes',
    ];

    protected $casts = [
        'status' => ApplicationStatus::class,
        'type' => ApplicationType::class,
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}

<?php

namespace App\Models;

use App\Models\Enum\ApplicationStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Application extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia,SoftDeletes;

    protected $appends = ['resume'];

    protected $fillable = [
        'department_id',
        'name',
        'email',
        'phone',
        'cover_letter',
        'status',
        'type',
        'biography',
        'interview_date',
        'interview_notes',
    ];

    protected $casts = [
        'status' => ApplicationStatus::class,
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function getResumeAttribute()
    {
        return $this->getMedia('resume')->last();
    }
}

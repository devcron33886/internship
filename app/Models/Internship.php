<?php

namespace App\Models;

use App\Models\Enum\StatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Internship extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'department_id',
        'requirements',
        'location',
        'start_date',
        'end_date',
        'deadline',
        'status',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function casts(): array
    {
        return [
            'status' => StatusEnum::class,
        ];
    }
}

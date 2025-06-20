<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Task\Priority;
use App\Enums\Task\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'project_id',
        'assigned_user_id',
        'name',
        'status',
        'priority',
        'description',
        'image_path',
        'due_date',
        'created_by',
        'updated_by',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'priority' => Priority::class,
        ];
    }

    /**
     * Get the project that owns the Task.
     *
     * @return BelongsTo<Project>
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'id', 'id');
    }

    /**
     * Get the user who is assigned the Task.
     *
     * @return BelongsTo<User>
     */
    public function assignedUser(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_user_id', 'id', 'id');
    }

    /**
     * Get the user that owns the Task.
     *
     * @return BelongsTo<User>
     */
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id', 'id');
    }

    /**
     * Get the user who last updated the Task.
     *
     * @return BelongsTo<User>
     */
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by', 'id', 'id');
    }
}

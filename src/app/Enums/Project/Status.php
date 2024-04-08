<?php

declare(strict_types=1);

namespace App\Enums\Project;

enum Status: string
{
    case Pending = 'pending';
    case InProgress = 'in_progress';
    case Completed = 'completed';
}

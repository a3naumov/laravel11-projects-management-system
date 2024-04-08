<?php

declare(strict_types=1);

namespace App\Enums\Task;

enum Status: string
{
    case Pending = 'pending';
    case InProgress = 'in_progress';
    case Completed = 'completed';
}

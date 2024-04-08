<?php

declare(strict_types=1);

namespace App\Enums\Task;

enum Priority: string
{
    case Low = 'low';
    case Medium = 'medium';
    case High = 'high';
}

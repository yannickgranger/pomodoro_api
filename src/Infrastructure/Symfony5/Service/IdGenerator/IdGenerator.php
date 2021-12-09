<?php

declare(strict_types=1);

namespace Symfony5\Service\IdGenerator;

use Pomodoro\SharedKernel\Service\IdGenerator as IdGeneratorInterface;
use Symfony\Component\Uid\Uuid;

class IdGenerator implements IdGeneratorInterface
{
    public function createId(): string
    {
        return Uuid::v4()->toRfc4122();
    }

    public static function uuidv4(): string
    {
        return Uuid::v4()->toRfc4122();
    }
}

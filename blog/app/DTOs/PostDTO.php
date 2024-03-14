<?php

declare(strict_types=1);

namespace App\DTOs;

final readonly class PostDTO
{
    public function __construct(
        public string $title,
        public string $content,
    )
    {
        //
    }
}

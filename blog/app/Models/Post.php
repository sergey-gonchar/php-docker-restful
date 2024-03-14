<?php

declare(strict_types=1);

namespace App\Models;

use App\DTOs\PostDTO;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    static function createFromDTO(PostDTO $DTO): self
    {
        $post = new self();

        return $post->updateFromDTO($DTO);
    }

    public function updateFromDTO(PostDTO $postDTO): self
    {
        $this->title = $postDTO->title;
        $this->content = $postDTO->content;
        $this->save();

        return $this;
    }
}

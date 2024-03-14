<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\DTOs\PostDTO;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'   => ['required'],
            'content' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function toDTO(): PostDTO
    {
        return new PostDTO(
            title: $this->input('title'),
            content: $this->input('content')
        );
    }
}

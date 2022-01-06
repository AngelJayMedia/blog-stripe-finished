<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'             => ['required', 'max:100'],
            'body'              => ['required'],
            'image'             => ['sometimes', 'image', 'mimes:svg,png,jpg'],
            'published_at'      => ['required'],
            'type'              => ['required', 'in:standard,premium'],
            'photo_credit_text' => ['nullable'],
            'photo_credit_link' => ['nullable'],
            'tags'              => ['array', 'nullable'],
            'tags.*'            => ['exists:tags,id'],
            'is_commentable'    => ['nullable', 'boolean'],
        ];
    }

    public function author(): User
    {
        return $this->user();
    }

    public function title(): string
    {
        return $this->get('title');
    }

    public function body(): string
    {
        return $this->get('body');
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function type(): string
    {
        return $this->get('type');
    }

    public function publishedAt(): string
    {
        return $this->get('published_at');
    }

    public function photoCreditText(): ?string
    {
        return $this->get('photo_credit_text');
    }

    public function photoCreditLink(): ?string
    {
        return $this->get('photo_credit_link');
    }

    public function tags(): array
    {
        return $this->get('tags', []);
    }

    public function isCommentable(): bool
    {
        return $this->boolean('is_commentable');
    }
}

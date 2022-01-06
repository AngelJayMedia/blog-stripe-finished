<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name'          => ['required', 'max:100'],
            'image'         => ['sometimes', 'image'],
            'description'   => ['sometimes', 'max:200'],
        ];
    }

    public function name(): string
    {
        return $this->get('name');
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function description(): string
    {
        return $this->get('description');
    }
}

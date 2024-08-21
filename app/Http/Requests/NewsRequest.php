<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
{
    public function authorize()
    {
        return backpack_auth()->check();
    }

    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'content' => 'required',
            'image' => 'sometimes|image|max:2048',
            'date' => 'required|date',
            'url' => 'nullable|url',
        ];
    }
}

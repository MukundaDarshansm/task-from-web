<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
{
    public function authorize()
    {
        return true; // authenticated already handled by sanctum
    }

    public function rules()
    {
        return [
            'title'   => 'required|string|max:191',
            'content' => 'nullable|string'
        ];
    }
}

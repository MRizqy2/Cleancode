<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:60',
            'upload_content' => 'required|max:255',
        ];
    }
}

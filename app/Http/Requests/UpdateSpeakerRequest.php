<?php

namespace App\Http\Requests;

use App\Models\Speaker;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSpeakerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('speaker_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'position' => [
                'required',
            ],
            'image' => [
                'required',
            ],
        ];
    }
}

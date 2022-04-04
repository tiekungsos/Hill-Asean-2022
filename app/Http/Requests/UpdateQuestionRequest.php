<?php

namespace App\Http\Requests;

use App\Models\Question;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateQuestionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('question_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'company' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
            ],
            'confirm_email' => [
                'string',
                'required',
            ],
            'ask_question' => [
                'required',
            ],
        ];
    }
}

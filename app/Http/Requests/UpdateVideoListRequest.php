<?php

namespace App\Http\Requests;

use App\Models\VideoList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVideoListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_list_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'url_link' => [
                'required',
            ],
        ];
    }
}

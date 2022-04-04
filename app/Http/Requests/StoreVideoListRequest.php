<?php

namespace App\Http\Requests;

use App\Models\VideoList;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVideoListRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('video_list_create');
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

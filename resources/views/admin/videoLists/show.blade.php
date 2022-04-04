@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.videoList.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.video-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.videoList.fields.id') }}
                        </th>
                        <td>
                            {{ $videoList->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.videoList.fields.name') }}
                        </th>
                        <td>
                            {{ $videoList->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.videoList.fields.url_link') }}
                        </th>
                        <td>
                            {{ $videoList->url_link }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.video-lists.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
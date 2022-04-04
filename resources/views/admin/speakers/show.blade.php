@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.speaker.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.speakers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.id') }}
                        </th>
                        <td>
                            {{ $speaker->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.name') }}
                        </th>
                        <td>
                            {{ $speaker->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.position') }}
                        </th>
                        <td>
                            {{ $speaker->position }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.speaker.fields.image') }}
                        </th>
                        <td>
                            @if($speaker->image)
                                <a href="{{ $speaker->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $speaker->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.speakers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
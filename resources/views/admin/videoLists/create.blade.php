@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.videoList.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.video-lists.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.videoList.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.videoList.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="url_link">{{ trans('cruds.videoList.fields.url_link') }}</label>
                <textarea class="form-control {{ $errors->has('url_link') ? 'is-invalid' : '' }}" name="url_link" id="url_link" required>{{ old('url_link') }}</textarea>
                @if($errors->has('url_link'))
                    <span class="text-danger">{{ $errors->first('url_link') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.videoList.fields.url_link_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.question.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.questions.update", [$question->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.question.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $question->name) }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="company">{{ trans('cruds.question.fields.company') }}</label>
                <input class="form-control {{ $errors->has('company') ? 'is-invalid' : '' }}" type="text" name="company" id="company" value="{{ old('company', $question->company) }}" required>
                @if($errors->has('company'))
                    <span class="text-danger">{{ $errors->first('company') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.company_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.question.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" id="email" value="{{ old('email', $question->email) }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="confirm_email">{{ trans('cruds.question.fields.confirm_email') }}</label>
                <input class="form-control {{ $errors->has('confirm_email') ? 'is-invalid' : '' }}" type="text" name="confirm_email" id="confirm_email" value="{{ old('confirm_email', $question->confirm_email) }}" required>
                @if($errors->has('confirm_email'))
                    <span class="text-danger">{{ $errors->first('confirm_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.confirm_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ask_question">{{ trans('cruds.question.fields.ask_question') }}</label>
                <textarea class="form-control {{ $errors->has('ask_question') ? 'is-invalid' : '' }}" name="ask_question" id="ask_question" required>{{ old('ask_question', $question->ask_question) }}</textarea>
                @if($errors->has('ask_question'))
                    <span class="text-danger">{{ $errors->first('ask_question') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.ask_question_helper') }}</span>
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
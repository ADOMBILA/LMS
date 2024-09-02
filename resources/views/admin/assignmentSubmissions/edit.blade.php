@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.assignmentSubmission.title_singular') }}
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route("admin.assignment-submissions.update", [$assignmentSubmission->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group {{ $errors->has('assignment') ? 'has-error' : '' }}">
                            <label class="required" for="assignment_id">{{ trans('cruds.assignmentSubmission.fields.assignment') }}</label>
                            <select class="form-control select2" name="assignment_id" id="assignment_id" required>
                                @foreach($assignments as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('assignment_id') ? old('assignment_id') : $assignmentSubmission->assignment->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('assignment'))
                                <span class="help-block" role="alert">{{ $errors->first('assignment') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignmentSubmission.fields.assignment_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('student') ? 'has-error' : '' }}">
                            <label class="required" for="student_id">{{ trans('cruds.assignmentSubmission.fields.student') }}</label>
                            <select class="form-control select2" name="student_id" id="student_id" required>
                                @foreach($students as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('student_id') ? old('student_id') : $assignmentSubmission->student->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('student'))
                                <span class="help-block" role="alert">{{ $errors->first('student') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignmentSubmission.fields.student_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
                            <label for="text">{{ trans('cruds.assignmentSubmission.fields.text') }}</label>
                            <input class="form-control" type="text" name="text" id="text" value="{{ old('text', $assignmentSubmission->text) }}">
                            @if($errors->has('text'))
                                <span class="help-block" role="alert">{{ $errors->first('text') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignmentSubmission.fields.text_helper') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
                            <label for="file">{{ trans('cruds.assignmentSubmission.fields.file') }}</label>
                            <input class="form-control" type="text" name="file" id="file" value="{{ old('file', $assignmentSubmission->file) }}">
                            @if($errors->has('file'))
                                <span class="help-block" role="alert">{{ $errors->first('file') }}</span>
                            @endif
                            <span class="help-block">{{ trans('cruds.assignmentSubmission.fields.file_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
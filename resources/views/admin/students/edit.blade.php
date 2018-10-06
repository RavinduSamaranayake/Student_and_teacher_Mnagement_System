@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.student.title')</h3>
    
    {!! Form::model($student, ['method' => 'PUT', 'route' => ['admin.students.update', $student->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('student_id', trans('quickadmin.student.fields.student-id').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('student_id', old('student_id'), ['class' => 'form-control', 'placeholder' => 'Enter Student ID', 'required' => '']) !!}
                    <p class="help-block">Enter Student ID</p>
                    @if($errors->has('student_id'))
                        <p class="help-block">
                            {{ $errors->first('student_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('first_name', trans('quickadmin.student.fields.first-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('first_name', old('first_name'), ['class' => 'form-control', 'placeholder' => 'Enter First name', 'required' => '']) !!}
                    <p class="help-block">Enter First name</p>
                    @if($errors->has('first_name'))
                        <p class="help-block">
                            {{ $errors->first('first_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('last_name', trans('quickadmin.student.fields.last-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Enter Last Name', 'required' => '']) !!}
                    <p class="help-block">Enter Last Name</p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('age', trans('quickadmin.student.fields.age').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('age', old('age'), ['class' => 'form-control', 'placeholder' => 'Enter Age', 'required' => '']) !!}
                    <p class="help-block">Enter Age</p>
                    @if($errors->has('age'))
                        <p class="help-block">
                            {{ $errors->first('age') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.student.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required' => '']) !!}
                    <p class="help-block">Enter Email</p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


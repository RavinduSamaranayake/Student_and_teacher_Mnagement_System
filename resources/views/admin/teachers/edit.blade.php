@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.teacher.title')</h3>
    
    {!! Form::model($teacher, ['method' => 'PUT', 'route' => ['admin.teachers.update', $teacher->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('reg_number', trans('quickadmin.teacher.fields.reg-number').'*', ['class' => 'control-label']) !!}
                    {!! Form::number('reg_number', old('reg_number'), ['class' => 'form-control', 'placeholder' => 'Enter Registration number', 'required' => '']) !!}
                    <p class="help-block">Enter Registration number</p>
                    @if($errors->has('reg_number'))
                        <p class="help-block">
                            {{ $errors->first('reg_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('first_name', trans('quickadmin.teacher.fields.first-name').'*', ['class' => 'control-label']) !!}
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
                    {!! Form::label('last_name', trans('quickadmin.teacher.fields.last-name').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('last_name', old('last_name'), ['class' => 'form-control', 'placeholder' => 'Enter Last name', 'required' => '']) !!}
                    <p class="help-block">Enter Last name</p>
                    @if($errors->has('last_name'))
                        <p class="help-block">
                            {{ $errors->first('last_name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.teacher.fields.email').'*', ['class' => 'control-label']) !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter Email', 'required' => '']) !!}
                    <p class="help-block">Enter Email</p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('qulification', trans('quickadmin.teacher.fields.qulification').'', ['class' => 'control-label']) !!}
                    {!! Form::text('qulification', old('qulification'), ['class' => 'form-control', 'placeholder' => 'Enter Qulification']) !!}
                    <p class="help-block">Enter Qulification</p>
                    @if($errors->has('qulification'))
                        <p class="help-block">
                            {{ $errors->first('qulification') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop


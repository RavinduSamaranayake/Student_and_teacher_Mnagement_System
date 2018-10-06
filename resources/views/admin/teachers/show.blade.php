@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.teacher.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.teacher.fields.reg-number')</th>
                            <td field-key='reg_number'>{{ $teacher->reg_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.teacher.fields.first-name')</th>
                            <td field-key='first_name'>{{ $teacher->first_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.teacher.fields.last-name')</th>
                            <td field-key='last_name'>{{ $teacher->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.teacher.fields.email')</th>
                            <td field-key='email'>{{ $teacher->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.teacher.fields.qulification')</th>
                            <td field-key='qulification'>{{ $teacher->qulification }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.teachers.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop



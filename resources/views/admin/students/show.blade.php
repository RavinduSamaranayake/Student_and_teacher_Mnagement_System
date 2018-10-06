@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.student.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.student.fields.student-id')</th>
                            <td field-key='student_id'>{{ $student->student_id }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.student.fields.first-name')</th>
                            <td field-key='first_name'>{{ $student->first_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.student.fields.last-name')</th>
                            <td field-key='last_name'>{{ $student->last_name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.student.fields.age')</th>
                            <td field-key='age'>{{ $student->age }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.student.fields.email')</th>
                            <td field-key='email'>{{ $student->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.students.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop



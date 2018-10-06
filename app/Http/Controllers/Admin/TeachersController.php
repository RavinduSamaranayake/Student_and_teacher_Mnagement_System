<?php

namespace App\Http\Controllers\Admin;

use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreTeachersRequest;
use App\Http\Requests\Admin\UpdateTeachersRequest;

class TeachersController extends Controller
{
    /**
     * Display a listing of Teacher.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('teacher_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('teacher_delete')) {
                return abort(401);
            }
            $teachers = Teacher::onlyTrashed()->get();
        } else {
            $teachers = Teacher::all();
        }

        return view('admin.teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating new Teacher.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('teacher_create')) {
            return abort(401);
        }
        return view('admin.teachers.create');
    }

    /**
     * Store a newly created Teacher in storage.
     *
     * @param  \App\Http\Requests\StoreTeachersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeachersRequest $request)
    {
        if (! Gate::allows('teacher_create')) {
            return abort(401);
        }
        $teacher = Teacher::create($request->all());



        return redirect()->route('admin.teachers.index');
    }


    /**
     * Show the form for editing Teacher.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('teacher_edit')) {
            return abort(401);
        }
        $teacher = Teacher::findOrFail($id);

        return view('admin.teachers.edit', compact('teacher'));
    }

    /**
     * Update Teacher in storage.
     *
     * @param  \App\Http\Requests\UpdateTeachersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeachersRequest $request, $id)
    {
        if (! Gate::allows('teacher_edit')) {
            return abort(401);
        }
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());



        return redirect()->route('admin.teachers.index');
    }


    /**
     * Display Teacher.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('teacher_view')) {
            return abort(401);
        }
        $teacher = Teacher::findOrFail($id);

        return view('admin.teachers.show', compact('teacher'));
    }


    /**
     * Remove Teacher from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('teacher_delete')) {
            return abort(401);
        }
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teachers.index');
    }

    /**
     * Delete all selected Teacher at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('teacher_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Teacher::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Teacher from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('teacher_delete')) {
            return abort(401);
        }
        $teacher = Teacher::onlyTrashed()->findOrFail($id);
        $teacher->restore();

        return redirect()->route('admin.teachers.index');
    }

    /**
     * Permanently delete Teacher from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('teacher_delete')) {
            return abort(401);
        }
        $teacher = Teacher::onlyTrashed()->findOrFail($id);
        $teacher->forceDelete();

        return redirect()->route('admin.teachers.index');
    }
}

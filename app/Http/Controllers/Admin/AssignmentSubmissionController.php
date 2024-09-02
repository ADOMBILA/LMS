<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAssignmentSubmissionRequest;
use App\Http\Requests\StoreAssignmentSubmissionRequest;
use App\Http\Requests\UpdateAssignmentSubmissionRequest;
use App\Models\Assignment;
use App\Models\AssignmentSubmission;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssignmentSubmissionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('assignment_submission_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assignmentSubmissions = AssignmentSubmission::with(['assignment', 'student'])->get();

        $assignments = Assignment::get();

        $users = User::get();

        return view('admin.assignmentSubmissions.index', compact('assignmentSubmissions', 'assignments', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('assignment_submission_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assignments = Assignment::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.assignmentSubmissions.create', compact('assignments', 'students'));
    }

    public function store(StoreAssignmentSubmissionRequest $request)
    {
        $assignmentSubmission = AssignmentSubmission::create($request->all());

        return redirect()->route('admin.assignment-submissions.index');
    }

    public function edit(AssignmentSubmission $assignmentSubmission)
    {
        abort_if(Gate::denies('assignment_submission_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assignments = Assignment::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $students = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $assignmentSubmission->load('assignment', 'student');

        return view('admin.assignmentSubmissions.edit', compact('assignmentSubmission', 'assignments', 'students'));
    }

    public function update(UpdateAssignmentSubmissionRequest $request, AssignmentSubmission $assignmentSubmission)
    {
        $assignmentSubmission->update($request->all());

        return redirect()->route('admin.assignment-submissions.index');
    }

    public function show(AssignmentSubmission $assignmentSubmission)
    {
        abort_if(Gate::denies('assignment_submission_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assignmentSubmission->load('assignment', 'student');

        return view('admin.assignmentSubmissions.show', compact('assignmentSubmission'));
    }

    public function destroy(AssignmentSubmission $assignmentSubmission)
    {
        abort_if(Gate::denies('assignment_submission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $assignmentSubmission->delete();

        return back();
    }

    public function massDestroy(MassDestroyAssignmentSubmissionRequest $request)
    {
        $assignmentSubmissions = AssignmentSubmission::find(request('ids'));

        foreach ($assignmentSubmissions as $assignmentSubmission) {
            $assignmentSubmission->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

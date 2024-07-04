<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:api');
    }
    public function index()
    {
        $projects = Project::paginate(10); 
        return response()->json($projects);
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->validated());
        return response()->json($this->formatResponse($project), 201);
    }

    public function show($id)
    {
        try {
            $project = Project::findOrFail($id);
            return response()->json($this->formatResponse($project));
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Project not found'], 404);
        }
    }

    public function update(ProjectRequest $request, $id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->update($request->validated());
            return response()->json($this->formatResponse($project));
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Project not found'], 404);
        }
    }

    public function destroy($id)
    {
        try {
            $project = Project::findOrFail($id);
            $project->delete();
            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Project not found'], 404);
        }
    }

    private function formatResponse($data)
    {
        return [
            'status' => 'success',
            'data' => $data,
        ];
    }
}


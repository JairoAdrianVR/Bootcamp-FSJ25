<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* QUERY BUILDER
        $tasks = DB::table('tasks')
        ->select('name', 'description', 'completed')
        ->get();
        */

        // Obtenemos todas las tareas
        $tasks = Task::all();

        // Retornamos la respuesta en formato JSON
        return response()->json([
            'data' => $tasks
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Creamos una nueva tarea
       $task = Task::create($request->all());

       //Retornamos un mensaje y el objeto creado
       return response()->json([
        'message' => 'Task created successfully',
        'data' => $task
       ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Buscar la tarea por el ID
        $task = Task::findOrFail($id);

        //Actualizar la tarea
        $task->update($request->all());

        return response()->json([
            'message' => 'Task updated successfully',
            'data' => $task
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Buscar la tarea por el ID
        $task = Task::findOrFail($id);

        //Eliminar la tarea
        $task->delete();

        return response()->json([
            'message' => 'Task deleted successfully'
        ]);
    }
}

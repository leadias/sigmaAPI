<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $department = ['Amazonas','Vichada','Vaupés',
        'Valle del Cauca','Tolima','Sucre','Santander','San Andrés y Providencia',
        'Risaralda','Quindío','Putumayo'];
        return $department;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function city(){
        $city =['Puerto Carreño', 'Mitú','Cali','Ibagué','Sincelejo','San Andrés','Pereira','Armenia'];
        return $city;
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->lastname = $request->lastname;
        $task->department = $request->department;
        $task->email = $request->email;
        $task->city = $request->city;
        $task->phone = $request->phone;
        $task->description = $request->description;
        $task->save();
    }

}

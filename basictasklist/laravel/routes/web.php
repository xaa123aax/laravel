<?php

use App\Task;   
use Illuminate\Http\Request;



Route::get('/asc', function () {

 
     $tasks = Task::orderBy('created_at','asc')->get();

          return view('tasks.index',[

          'tasks' => $tasks,
                    ]);
    
});

Route::get('/desc', function () {

 
    $tasks = Task::orderBy('created_at','desc')->get();

         return view('tasks.index',[

         'tasks' => $tasks,
         $a=0,

         ]);
   
});

Route::post('/task', function (Request $request) {

     $validator = Validator::make($request->all(),[

      'name' => 'required|max:255',
      
     ]);


     if($validator->fails()){

    return redirect('/asc')

         ->withInput()
         ->withErrors($validator);


     }

     
      $task = new Task;
      $task ->name = $request->name;
      $task ->save();


      return redirect('/asc');
      
});



Route::delete('/task/{task}', function (Task $task) {

$task->delete();
return redirect('/asc');

});

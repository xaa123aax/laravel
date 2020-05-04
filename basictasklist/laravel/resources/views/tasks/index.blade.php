@extends('layouts.app')

@section('content')

<div class="panel panel-default">

    <div class="panel-body">

    @include('common.errors')
      
        <form action="{{ url('task') }}" method="post" class="form-horizontal"> 

            <div class="form-group">
     
                <label for="name" class="col-sm-3 control-label" >Tasks</label>

                <div class="col-sm-6">

                <input type="text" name="name" id="name" class="form-control">
     
                </div>
            </div>
     

                 <div class="form-group">

                     <div class="col-sm-offset-3 col-sm-6" >
                 
                        <button type="submit" class="btn btn-success ">Add task</button>
                        <a href="/asc" class="btn  btn-info">正序</button></a>
                        <a href="/desc" class="btn  btn-warning">倒序</button></a>
                     </div>

                 </div>

                
                 
                  {{ csrf_field() }}
                
        </form>
        
    
      
    </div>
    
    @if ( $tasks -> count() )

         <div class="panel panel-default">
    
            <div class="panel-heading">
            
            current tasks        
            
            </div>

                 <div class="panel-body">
            
                    <table class= "table table-striped">

                         <thead>
            
                             

                             <th>&nbsp;</th>
            
                         </thead>


                         
                          

                         <tbody>
                         
                         @foreach ($tasks as $task )


                            <tr>
                                 <td>{{$task->id}}</td>
                                 <td>{{$task->name}}</td>
                                 <td>{{$task->created_at}}</td>
                                 <td>
                                 
                                    <form action="/task/{{ $task->id }}" method="post">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    </form>
                                                                  
                                 </td>

                            </tr>

                         @endforeach

                         </tbody>

                    </table>
            
                 </div>
    
         </div>
        


    @endif

</div>

       

@endsection

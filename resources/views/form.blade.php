

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <style>
        .task-form {
            max-width: 500px;
            margin: 40px auto;
            padding: 24px;
            background: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
        }
        .task-form div {
            margin-bottom: 18px;
        }
        .task-form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }
        .task-form input[type="text"],
        .task-form textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            background: #fff;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }
        .task-form input[type="text"]:focus,
        .task-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        .task-form button[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 22px;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .task-form button[type="submit"]:hover {
            background: #0056b3;
        }
        .text-danger {
                    color: #dc3545;
                    font-size: 0.97em;
                    margin-top: 4px;
                    display: block;
        }
    </style>
    <form class="task-form" method="POST" action="{{ isset($task) ? route('tasks.update',['task'=>$task->id]) : route('tasks.store') }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">
                Title
            </label>
            <input type="text" name="title" value="{{$task->title ?? old("title")}}"  id="title" />
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
            
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5"> {{$task->description ?? old("description") }}</textarea>
            @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>    
            @endif
        </div>

        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{$task->long_description ?? old("long_description")}}</textarea>
            @if ($errors->has('long_description'))
                <span class="text-danger">{{ $errors->first('long_description') }}</span>   
            @endif
        </div>

        <div>
            <button type="submit">
                @isset($task)
                    Update Task 
                @else
                Add Task
                @endisset
            </button>
        </div>
    </form>
@endsection
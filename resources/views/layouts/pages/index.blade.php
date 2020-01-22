
@extends('layouts.base')

@section('content')

<div>
    
<h1>Employee: {{ $emps -> count()}}</h1>

<ul>

    @foreach ($emps as $emp)
        
    <li> {{ $emp -> name}} {{ $emp -> lastname}}: {{ $emps -> tasks() -> count()}}</li>

    @endforeach
</ul>

</div>
<div>

    <h1>Task: {{ $tasks -> count()}}</h1>

<ul>

    @foreach ($tasks as $task)
        
    <li> {{ $task -> name}}: {{ $task-> employee -> name }} {{ $task-> employee -> lastname }} </li>

    @endforeach
</ul>
@endsection

</div>

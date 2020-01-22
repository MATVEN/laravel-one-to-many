
@extends('layouts.base-employee')

@section('name')
    
<h1>Employee: {{ $emps -> count()}}</h1>

<ul>

    @foreach ($emps as $emp)
        
    <li> {{ $emp -> name}} {{ $emp -> lastname}}: {{ $emps -> tasks() -> count()}}</li>

    @endforeach
</ul>
@endsection


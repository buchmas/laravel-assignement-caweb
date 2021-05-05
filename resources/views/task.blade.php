@extends('layouts/layout')

@section('main')
	<div class="task-list">
		
				<h1><strong>Task {{ $task->id }} : {{ $task->title }}</strong></h1>
				<ul>
		<li>{{ $task->description }}</li>
		<li>{{ $task->created_at->isoFormat('Do MMMM YY') }}</li>
		</ul>	
		
	</div>

	<button><a href="/tasks/delete{task}">Delete this task</a></button> 
@endsection
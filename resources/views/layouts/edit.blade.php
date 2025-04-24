@extends('layouts.app')

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
        </ul>
    </div>
@endif

<form action="{{ isset($task) ? route('tasks.update', $task->id) : route('tasks.store') }}" method="POST">
    @csrf
    @if(isset($task)) @method('PUT') @endif

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $task->description ?? '') }}</textarea>
    </div>
    <div class="mb-3">
        <label><input type="checkbox" name="is_completed" value="1" {{ (isset($task) && $task->is_completed) ? 'checked' : '' }}> Completed</label>
    </div>
    <button class="btn btn-success">{{ isset($task) ? 'Update' : 'Create' }} Task</button>
</form>
@endsection

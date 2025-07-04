@extends('layout')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center pt-5 ">
  <h1 class="pb-3">My To-Do List</h1>

  @if($todos->isEmpty())
  <!-- Show this if $variable is empty (null, false, "", [], etc.) -->
  <div class="alert alert-info" role="alert">
    No to-do yet. Click Add Todo to create one!
  </div>
  @else
  <!-- Show this if $variable has a value -->
  <table class="table text-center align-middle">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($todos as $todo)
      <tr>
        <th scope="row">{{ $todo->id }}</th>
        <td>@if($todo->img_url)
          <img src="{{ $todo->img_url }}" width="100" />
          @endif
        </td>
        <td>{{ $todo->title }}</td>
        <td>{{ $todo->description }}</td>
        <td>{{ $todo->is_done ? 'Done' : 'Pending' }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('todos.edit', $todo) }}"><i class="bi bi-pencil-square"></i>
          </a>
          <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit"><i class="bi bi-trash"></i>
            </button>
          </form>
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @endif

</div>


@endsection
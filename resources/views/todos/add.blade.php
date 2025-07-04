@extends('layout')

@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center pt-5">
  <h1 class="pb-3">Create To-Do</h1>

  <form action="{{ route('todos.store') }}" method="POST" class="w-50 space-y-2">
    @csrf

    <div class="form-floating mb-3 ">
      <!-- old() retrieves old values after failed submission -->
      <input type="text" class="form-control" id="floatingInput" name="title" value="{{ old('title') }}" required>
      <label for="floatingInput">Title</label>
    </div>

    <div class="form-floating mb-3 ">
      <!-- old() retrieves old values after failed submission -->
      <textarea type="text" class="form-control" id="floatingTextarea" name="description"> {{ old('description') }} </textarea>
      <label for="floatingInput">Description</label>
    </div>

    <div class="form-floating mb-3 ">
      <!-- old() retrieves old values after failed submission -->
      <input type="text" class="form-control" id="floatingInput" name="img_url" value="{{ old('img_url') }}">
      <label for="floatingInput">Image URL</label>
    </div>

    <!-- <div class="form-check">
      <input class="form-check-input" type="checkbox" value="1" {{ old('is_done') ? 'checked' : '' }} id="checkDefault" name="is_done">
      <label class="form-check-label" for="checkDefault">
        Is Done
      </label>
    </div> -->
    <div class="d-flex gap-2 mt-2 justify-content-end">
      <a href="{{ route('todos.index') }}" class="btn btn-outline-secondary mt-0">Cancel</a>
      <button type="submit" class="btn btn-outline-success">Save</button>
    </div>


  </form>

</div>

@endsection
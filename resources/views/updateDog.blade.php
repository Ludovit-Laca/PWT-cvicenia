@extends('layouts.default')
@section('content')
    <form method="post"
          action="{{ action([\App\Http\Controllers\DogController::class, 'update'], ['id' => $dog->id]) }}">

        <div class="form-group">
            Name:<br>
            <input type="text" name="name" value="{{ $dog->name }}"><br></div>

        <div class="form-group">
            Breed:<br>
            <input type="text" name="breed" placeholder="Breed" value="{{ $dog->breed }}"><br></div>

        <div class="form-group">
            Birth date: <br>
            <input type="text" name="birth_date" placeholder="Birth_date" value="{{ $dog->birth_date }}"><br></div>

        <div class="form-group">
            <!-- Submit -->
            <input type="submit" name="submit" class="btn btn-primary" value="Send"><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>
    </form>
@stop

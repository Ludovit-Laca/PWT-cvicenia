@extends('layouts.default')
@section('content')
    <form method="POST" action="{{ action([\App\Http\Controllers\DogController::class, 'create']) }}">

        <div class="form-group">
            Name:<br>
            <input type="text" name="name" placeholder="Name" value=""><br></div>

        <div class="form-group">
            Breed:<br>
            <input type="text" name="breed" placeholder="Breed" value=""><br></div>

        <div class="form-group">
            Birth date: <br>
            <input type="text" name="birth_date" placeholder="Birth_date" value=""><br></div>

        <div class="form-group">
            <!-- Submit -->
            <input type="submit" name="submit" value="Send" class="btn btn-primary"><br>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </div>

    </form>
@stop

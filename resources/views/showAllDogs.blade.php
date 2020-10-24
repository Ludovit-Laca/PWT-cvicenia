@extends('layouts.default')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Breed</th>
            <th scope="col">Birth date</th>
        </tr>
        </thead>
        @foreach($dogs as $dog)
            <tbody>
            <tr>
                <td scope="col"> {{ $dog->name }} </td>
                <td scope="col"> {{ $dog->breed }} </td>
                <td scope="col"> {{ $dog->birth_date }} </td>
                <td scope="col">
                    <a href="{{ action([\App\Http\Controllers\DogController::class, 'findDog'], ['id'=> $dog->id]) }}">Edit</a>
                </td>
                <td scope="col">
                    <a href="{{ action([\App\Http\Controllers\DogController::class, 'delete'], ['id'=> $dog->id]) }}">Delete</a>
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
@stop

<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use \DateTime;

class DogController extends Controller
{
    public function find($id) {
        $dog = Dog::findOrFail($id);

        return $dog;
    }

    public function create() {
        $dog = new Dog();
        $dog->name = str_random(5);
        $dog->breed = str_random(10);
        $dog->birth_date = new DateTime();
        $dog->created_at = new DateTime();
        $dog->updated_at = new DateTime();
        $dog->save();

        return $dog;
    }

    public function update($id) {
        $dog = Dog::where('id', "=", $id)->firstOrFail();
        $dog->update(["breed" => str_random(10)]);

        return $dog;
    }

    public function delete($id) {
        $dog = Dog::findOrFail($id);
        $dog->delete();

        return "Deleted dog with id: " . $id;
    }

    public function showAll() {

        $allDogs = "";
        $dogs = Dog::all();
        foreach ($dogs as $dog) {
            $allDogs = $allDogs . $dog->name . " " . $dog->breed . " " . $dog->birth_date . "<br>";
        }
        return $allDogs;
    }
}

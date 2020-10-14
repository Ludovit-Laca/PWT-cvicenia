<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use \DateTime;

class DogController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function find($id) {
        $dog = Dog::findOrFail($id);

        return $dog;
    }

    /**
     * @return Dog
     * @throws \Exception
     */
    public function create() {
        /** @var Dog $dog */
        $dog = new Dog();
        $dog->name = str_random(5);
        $dog->breed = str_random(10);
        $dog->birth_date = new DateTime();
        $dog->created_at = new DateTime();
        $dog->updated_at = new DateTime();
        $dog->save();

        return $dog;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($id) {
        $dog = Dog::where('id', "=", $id)->firstOrFail();
        $dog->update(["breed" => str_random(10)]);

        return $dog;
    }

    /**
     * @param $id
     * @return string
     */
    public function delete($id) {
        $dog = Dog::findOrFail($id);
        $dog->delete();

        return "Deleted dog with id: " . $id;
    }

    /**
     * @return string
     */
    public function showAll() {

        $allDogs = "";
        $dogs = Dog::all();
        foreach ($dogs as $dog) {
            $allDogs = $allDogs . $dog->name . " " . $dog->breed . " " . $dog->birth_date . "<br>";
        }
        return $allDogs;
    }
}

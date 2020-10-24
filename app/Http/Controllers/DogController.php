<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use \DateTime;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function findDog($id)
    {
        $dog = Dog::findOrFail($id);

        return view('updateDog', ['dog' => $dog]);
    }

    public function showInsertForm()
    {
        return view("addDog");
    }

    /**
     * @return Dog
     * @throws \Exception
     */
    public function create(Request $request)
    {
        /** @var Dog $dog */
        $dog = new Dog();
        $dog->name = $request->input('name');
        $dog->breed = $request->input('breed');
        $dog->birth_date = $request->input('birth_date');
        $dog->created_at = new DateTime();
        $dog->updated_at = new DateTime();
        $dog->save();

        return redirect()->action([DogController::class, 'showAll']);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($id, Request $request)
    {
        $dog = Dog::where('id', "=", $id)->first();
        $dog->update([
            'name' => $request->input('name'),
            'breed' => $request->input('breed'),
            'birth_date' => $request->input('birth_date')
        ]);
        return redirect()->action([DogController::class, 'showAll']);
    }

    /**
     * @param $id
     * @return string
     */
    public function delete($id)
    {
        $dog = Dog::findOrFail($id);
        $dog->delete();

        return redirect()->action([DogController::class, 'showAll']);
    }

    /**
     * @return string
     */
    public function showAll()
    {
        $dogs = Dog::all();
        return view("showAllDogs", ['dogs' => $dogs]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Optional;
use App\Models\Brand;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = car::all();
        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $optionals = Optional::all();
        $brands = Brand::all();

        return view('admin.cars.create', compact('optionals', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        $form_data = $request->all();

        $car = new Car();

        if ($request->hasFile('immagine')) {
            $immagine_path = Storage::disk('public')->put('cars_images', $form_data['immagine']);
            $form_data['immagine'] = $immagine_path;
        }

        $car->fill($form_data);

        $car->slug = Str::slug($form_data['modello'], '-');
        $car->save();

        if ($request->has('optionals')) {
            $car->optionals()->attach($form_data['optionals']);
        }

        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('admin.cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $optionals = Optional::all();
        $brands = Brand::all();

        return view('admin.cars.edit', compact('car', 'optionals', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCarRequest  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $form_data = $request->all();

        if ($request->hasFile('immagine')) {
            if ($car->immagine != null) {
                Storage::disk('public')->delete($car->immagine);
            }
            $immagine_path = Storage::disk('public')->put('cars_images', $form_data['immagine']);
            $form_data['immagine'] = $immagine_path;
        }


        $car->slug = Str::slug($form_data['modello'], '-');
        $car->update($form_data);

        if ($request->has('optionals')) {
            $car->optionals()->attach($form_data['optionals']);
        }

        return redirect()->route('admin.cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        if ($car->immagine != null) {
            Storage::disk('public')->delete($car->immagine);
        }

        $car->delete();
        return redirect()->route('admin.cars.index');
    }
}

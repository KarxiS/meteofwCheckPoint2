<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stanica;
use Illuminate\Http\Request;

class StanicaController extends Controller
{
    public function index()
    {
        $stations = Stanica::all();
        return view('stations.index', ['stations' => $stations]);

    }

    public function create()
    {
        return view('stations.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
            'api_link' => 'required|url',
            'password' => 'required|string|min:4',
        ]);

        $newStation = Stanica::create($data);
        return redirect(route('station.index'));


    }

    public function edit(Stanica $station)
    {
        return view('stations.edit', ['station' => $station]);
    }

    public function delete(Stanica $station)
    {
        $station->delete();
        return redirect(route('station.index'))->with('OK', 'Stanica vymazana uspesne');
    }

    public function update(Stanica $station, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:50|min:4',
                'description' => 'required|string|min:4',
                'api_link' => 'required|url',
                'password' => 'required|string|min:4',
            ]);

            $station->update($data);
            return redirect(route('station.index'))->with('OK', 'Stanica aktualizovana uspesne');
        } catch (\Exception $e) {
            return redirect(route('station.index'))->withErrors(['Error', $e->getMessage()]);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Stanica;
use Illuminate\Http\Request;
use App\Models\StationData;

class StanicaController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:station-show|stationData-show|station-all', ['only' => ['index', 'showData']]);
        $this->middleware('permission:station-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:station-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:station-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        if (auth()->user()->hasPermissionTo('station-all')) {

            $stations = Stanica::all();
        } else {

            $stations = auth()->user()->stations;
        }


        return view('stations.index', ['stations' => $stations]);

    }

    public function create()
    {
        return view('stations.create', ['userid' => auth()->id()]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'required|string',
            'api_link' => 'required|url',

        ]);
        $data['user_id'] = auth()->id();
        $newStation = Stanica::create($data);
        return redirect(route('station.index'));


    }
    public function showData(Stanica $station)
    {
        $data = StationData::where('station_id', $station->id)->get();
        $priemerTeplota = $data->avg('temperature');
        $priemerVlhkost = $data->avg('humidity');



        return view('stations.data', [
            'data' => $data,
            'priemerTeplota' => $priemerTeplota,
            'priemerVlhkost' => $priemerVlhkost,
            'stanica_id' => $station->id,
        ]);
    }

    public function edit(Stanica $station)
    {
        return view('stations.edit', ['station' => $station]);
    }

    public function delete(Stanica $station)
    {
        $station->stationData()->delete();
        $station->delete();
        return redirect(route('station.index'))->with('OK', 'Stanica vymazana uspesne');
    }

    public function update(Stanica $station, Request $request)
    {
        try {
            $data = $request->validate([
                'name' => 'required|string|max:50|min:4',
                'description' => 'required|string|min:4|max:50',
                'api_link' => 'required|url',
            ]);

            $station->update($data);
            return redirect(route('station.index'))->with('OK', 'Stanica aktualizovana uspesne');
        } catch (\Exception $e) {
            return redirect(route('station.index'))->withErrors(['Error', $e->getMessage()]);
        }
    }

}

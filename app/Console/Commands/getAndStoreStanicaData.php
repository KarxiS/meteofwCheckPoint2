<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Stanica;
use App\Models\StationData;

class getAndStoreStanicaData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:getAndStoreStanicaData';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /**$client = new \GuzzleHttp\Client();
        $stations = Stanica::all();

        foreach ($stations as $station) {
            try {
                $response = $client->request('GET', $station->api_link);
                $data = json_decode($response->getBody()->getContents());
                if ($response->getStatusCode() != 200 || !isset($data->temperature) || !isset($data->humidity)) {
                    DB::table('station_data')->insert([
                        'station_id' => $station->id,
                        'temperature' => 0,
                        'humidity' => 0,
                    ]);
                    continue;
                }
                $temperature = $data->temperature;
                $humidity = $data->humidity;


                DB::table('station_data')->insert([
                    'station_id' => $station->id,
                    'temperature' => $temperature,
                    'humidity' => $humidity,
                ]);
            } catch (\Exception $ex) {
                //vyhod ..
            }
        }*/
        $stations = Stanica::all();

        foreach ($stations as $station) {
            try {

                $temperature = rand(10, 30);
                $humidity = rand(10, 30);

                StationData::create([
                    'station_id' => $station->id,
                    'temperature' => $temperature,
                    'humidity' => $humidity,
                ]);
            } catch (\Exception $ex) {
                // Handle..
            }
        }



    }
}

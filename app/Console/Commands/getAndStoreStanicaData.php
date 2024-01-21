<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use App\Models\Stanica;
use App\Models\StationData;
use GuzzleHttp\Client;

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
        $client = new Client();
        $stations = Stanica::all();

        foreach ($stations as $station) {
            try {
                $response = $client->request('GET', $station->api_link);
                $data = json_decode($response->getBody()->getContents());
                $apiKey = config($station->password);
                if ($response->getStatusCode() != 200 || !isset($data->current->temp_c) || !isset($data->current->humidity)) {
                    continue;
                } else {
                    $temperature = $data->current->temp_c;
                    $humidity = $data->current->humidity;
                }

                StationData::create([
                    'station_id' => $station->id,
                    'temperature' => $temperature,
                    'humidity' => $humidity,
                ]);
            } catch (\Exception $ex) {
                // Handler..
                $this->error("Failed to fetch data for station {$station->name}: {$ex->getMessage()}");
            }
        }

        /**$stations = Stanica::all();

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
        }*/



    }
}

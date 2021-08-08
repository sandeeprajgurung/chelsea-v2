<?php

namespace App\FootballAPI;
use Illuminate\Support\Facades\Http;

class APIFootballData {

    private $Api;
    private $Authorization;

    public const MATCHES = 'MATCHES';

    public function __construct()
    {
        $this->Api = config('constants.TEAM');
        $this->Authorization = config('constants.AUTHORIZATION');
    }

    public function apiConnection($data)
    {
        $response = Http::withHeaders([
            'X-Auth-Token' => $this->Authorization
        ])->get($this->Api.$data, [
            'limit' => 1,
        ]);

        if ($response->status() === 200) {
            return $response->collect();
        }

        echo "Error in connection to Realworks API\n";
        return false;
    }

    public function nextMatch()
    {
        $matches = config('constants.MATCHES');
        return $this->apiConnection($matches);
    }

    public function upcommingMatches()
    {

    }

    public function leagueTable()
    {
        
    }
}

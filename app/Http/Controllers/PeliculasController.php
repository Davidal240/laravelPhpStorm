<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeliculasController extends Controller
{
    public function index()
    {
        $response = Http::timeout(30)->get('https://swapi.dev/api/films/');
        $films = $response->json()['results'] ?? [];
        return view('peliculas', compact('films'));
    }

    public function showFilm(Request $request)
    {
        $filmUrl = $request->query('film_url');
        if (!$filmUrl) {
            return redirect()->route('peliculas.index')->with('error', 'No se seleccionó una película.');
        }

        $filmResponse = Http::timeout(30)->get($filmUrl);
        $filmData = $filmResponse->json();

        $characters = [];

        foreach ($filmData['characters'] as $characterUrl) {
            $characterResponse = Http::timeout(30)->get($characterUrl);
            $characterData = $characterResponse->json();

            $characterData['vehiculos'] = [];
            if (!empty($characterData['vehicles'])) {
                foreach ($characterData['vehicles'] as $vehicleUrl) {
                    $vehicleResponse = Http::timeout(30)->get($vehicleUrl);
                    if ($vehicleResponse->successful()) {
                        $characterData['vehiculos'][] = $vehicleResponse->json();
                    }
                }
            }
            $characters[] = $characterData;
        }

        return view('detalles', compact('filmData', 'characters'));
    }

    public function showVehiculo(Request $request)
    {
        $vehicleUrl = $request->query('url');
        if (!$vehicleUrl) {
            return redirect()->route('peliculas.index')->with('error', 'No se proporcionó la URL del vehículo.');
        }
        $vehicleUrl = urldecode($vehicleUrl);

        $response = Http::timeout(30)->get($vehicleUrl);
        if ($response->successful()) {
            $vehiculo = $response->json();
            return view('detallesVehiculos', compact('vehiculo'));
        } else {
            return redirect()->back()->with('error', 'No se pudo obtener el vehículo.');
        }
    }


}

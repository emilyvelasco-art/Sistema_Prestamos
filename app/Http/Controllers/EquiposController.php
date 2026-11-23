<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EquiposRequest;
use App\Http\Resources\EquiposResource;
use App\Models\Equipos;

class EquiposController extends Controller
{
    public function store(EquiposRequest $request)
    {
        $equipo = Equipos::create($request->validated() + [
            'estado' => 'Disponible',
        ]);

        return new EquiposResource($equipo);

    }
}

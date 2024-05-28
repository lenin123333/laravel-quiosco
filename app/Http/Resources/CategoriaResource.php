<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoriaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //En el segundo resource creado es donde colocamos los datos que se reornaran el priemro no se toca
        return [
            'id' =>$this->id,
            'nombre'=>$this->nombre,
            'icono'=>$this->icono
        ];
    }
}

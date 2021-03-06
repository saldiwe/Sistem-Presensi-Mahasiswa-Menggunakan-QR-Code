<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Jadwal extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'hari'=> $this->haris->hariNama,
            'mulai'=> $this->jdwlSesiMulai,
            'selesai'=> $this->jdwlSesiSelesai,
            'ruangan'=> $this->ruangans->ruanganKode,
        ];
    }
}

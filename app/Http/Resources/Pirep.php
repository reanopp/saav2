<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Pirep extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $pirep = parent::toArray($request);

        $pirep['airline'] = new Airline($this->airline);
        $pirep['dpt_airport'] = new Airport($this->dpt_airport);
        $pirep['arr_airport'] = new Airport($this->arr_airport);
        $pirep['position'] = new Acars($this->position);
        $pirep['comments'] = PirepComment::collection($this->comments);
        $pirep['user'] = [
            'id' => $this->user->id,
            'name' => $this->user->name,
            'home_airport_id' => $this->user->home_airport_id,
            'curr_airport_id' => $this->user->curr_airport_id,
        ];

        $pirep['fields'] = $this->fields;

        return $pirep;
    }
}

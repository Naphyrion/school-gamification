<?php

namespace Naphyrion\GamificationSystem\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
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
            'id'        => $this->id,
            'name'      => $this->full_name,
            'points'    => $this->player->points,
            'avatar'    => $this->player->avatar,
        ];
    }
}

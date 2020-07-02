<?php

namespace Naphyrion\GamificationSystem\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Naphyrion\GamificationSystem\Http\Resources\Competence as CompetenceResource;

class CompetenceType extends JsonResource
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
            'id'            => $this->id,
            'name'          => $this->name,
            'competences'   => CompetenceResource::collection($this->competences)
        ];
    }
}

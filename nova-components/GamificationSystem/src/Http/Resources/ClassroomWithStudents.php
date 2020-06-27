<?php

namespace Naphyrion\GamificationSystem\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Naphyrion\GamificationSystem\Http\Resources\Student as StudentResource;

class ClassroomWithStudents extends JsonResource
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
            'name'      => $this->classroom_name,
            'students'  => StudentResource::collection($this->students),
        ];
    }
}

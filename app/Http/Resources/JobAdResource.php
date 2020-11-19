<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobAdResource extends JsonResource
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
            'id' => $this->id,
            'area' => $this->area,
            'title' => $this->title,
            'description' => $this->description,
            'salary' => $this->salary,
            'translations' => $this->jobAdTranslations
        ];
    }
}

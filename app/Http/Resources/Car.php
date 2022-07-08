<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Car extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'description'=>$this->description,
            'id'=>$this->id,
            'img'=> "http://127.0.0.1:8000/images/".$this->image,
            'model'=> $this->model,
            'name'=>$this->name
        ];
    }
}

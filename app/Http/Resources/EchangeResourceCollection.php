<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EchangeResourceCollection extends JsonResource
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
            'data' => $this->collection,
            'links' => [ 'id' => $this->id,
            'commentaire' => $this->commentaire,
             'id_user' => $this->id_user,
            'id_client' => $this->id_client,
            'id_echange_type' => $this->id_echange_type,
            'date' => '$this->date',]

           
        ];
    }
}

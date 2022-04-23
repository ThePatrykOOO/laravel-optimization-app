<?php

namespace App\Http\Resources;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'short_description' => $this->short_description,
            'price' => $this->price,
            'active' => $this->active,
            'category_id' => $this->category_id,
            'product_weight' => $this->product_weight,
            'product_width' => $this->product_weight,
            'product_height' => $this->product_height,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

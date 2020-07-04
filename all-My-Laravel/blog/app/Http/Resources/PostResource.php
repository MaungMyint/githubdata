<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Category;
use App\User;

class PostResource extends JsonResource
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
                    'post_id'=>$this->id,
                    'post_title'=>$this->title,
                    'post_content'=>$this->body,
                    'post_image'=>$this->image,
                    'category'=>new CategoryResource(Category::find($this->category_id)),
                    'author'=>new UserResource(User::find($this->user_id)),
                    'created_at'=>$this->created_at,
                    'updated_at'=>$this->updated_at,
                    //posts table
                ];
    }
}

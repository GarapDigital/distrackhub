<?php

namespace App\Http\Resources\Github;


class GetDetailRepository
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($data)
    {
        return [
            'id' => $data->id,
            'node_id' => $data->node_id,
            'full_name' => $data->full_name,
            'name' => $data->name,
            'description' => $data->description,
            'clone_url' => $data->clone_url,
            'ssh_url' => $data->ssh_url,
            'html_url' => $data->html_url,
            'stars_count' => $data->stargazers_count,
            'forks_count' => $data->forks_count,
            'is_private' => $data->private,
            'created_at' => $data->created_at,
            'updated_at' => $data->updated_at,
        ];
    }
}

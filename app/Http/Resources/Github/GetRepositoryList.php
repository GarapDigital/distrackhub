<?php

namespace App\Http\Resources\Github;

class GetRepositoryList
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($data)
    {
        $result = array();

        foreach ($data as $repository) {
            $result[] = [
                'id' => $repository->id,
                'node_id' => $repository->node_id,
                'full_name' => $repository->full_name,
                'name' => $repository->name,
                'html_url' => $repository->html_url,
                'stars_count' => $repository->stargazers_count,
                'forks_count' => $repository->forks_count,
                'is_private' => $repository->private,
                'created_at' => $repository->created_at,
                'updated_at' => $repository->updated_at,
            ];
        }

        return $result;
    }
}

<?php

namespace App\Http\Resources\Github;


class GetRepositoryCommitList
{
    /**
     * Transform the resource into an array.
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($data)
    {
        $result = array();

        foreach ($data as $commit) {
            $result[] = [
                'sha' => $commit->sha,
                'node_id' => $commit->node_id,
                'committer' => [
                    'name' => $commit->commit->committer->name,
                    'email' => $commit->commit->committer->email,
                    'date' => $commit->commit->committer->date,
                ],
                'message' => $commit->commit->message,
                'html_url' => $commit->html_url,
            ];
        }

        return $result;
    }
}

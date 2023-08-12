<?php

namespace App\Functions\Static;

class Curl
{
    /**
     * curl get http request.
     *
     * @param string $url
     * @param array $pagination
     */
    public static function get(string $url, array $pagination = ['page' => 1])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.config('github.credential.personal_token'),
            'Accept: application/vnd.github+json',
            'Content-Type: application/json',
            'User-Agent: ' . request()->userAgent(),
        ]);
        $url = $url . '?' . http_build_query([
            'per_page' => config('github.pagination.per_page', 10),
            'page' => $pagination['page'],
            'sort' => config('github.order_by.index'),
            'direction' => config('github.order_by.sort'),
        ]);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return json_decode($output);
    }

    /**
     * curl post http request.
     *
     * @param string $url
     * @param array $data = []
     * @param array $query_params = []
     */
    public static function post(string $url, array $data = [], array $query_params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.config('github.credential.personal_token'),
            'Accept: application/vnd.github+json',
            'Content-Type: application/json',
            'User-Agent: ' . request()->userAgent(),
        ]);

        if (count($query_params) > 0) {
            $url = $url . '?' . http_build_query($query_params);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return json_decode($output);
    }

    /**
     * curl patch http request.
     *
     * @param string $url
     * @param array $data = []
     * @param array $query_params = []
     */
    public static function patch(string $url, array $data = [], array $query_params = [])
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.config('github.credential.personal_token'),
            'Accept: application/vnd.github+json',
            'Content-Type: application/json',
            'User-Agent: ' . request()->userAgent(),
        ]);

        if (count($query_params) > 0) {
            $url = $url . '?' . http_build_query($query_params);
        }

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PATCH');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $output = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return json_decode($output);
    }

    /**
     * curl delete http request.
     *
     * @param string $url
     */
    public static function delete(string $url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer '.config('github.credential.personal_token'),
            'Accept: application/vnd.github+json',
            'Content-Type: application/json',
            'User-Agent: ' . request()->userAgent(),
        ]);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        $output = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return json_decode($output);
    }
}

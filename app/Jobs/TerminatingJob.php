<?php

namespace App\Jobs;

use App\Models\HttpRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Support\Facades\Log;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TerminatingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $http_request = new HttpRequest([
            'session_id'  => $this->data['session_id'],
            'user_id'     => $this->data['user_id'],
            'ip'          => $this->data['ip'],
            'ajax'        => $this->data['ajax'],
            'url'         => $this->data['url'],
            'payload'     => $this->data['payload'],
            'status_code' => $this->data['status_code'],
        ]);

        Log::info('http_request', $http_request->toArray());

        $http_request->save();
    }
}

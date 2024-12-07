<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class BlogPostAfterCreateJob implements ShouldQueue
{
    use Queueable;

    /**
     * @var BlogPost
     */
    private $blogPost;

    /**
     * Create a new job instance.
     */
    public function __construct(BlogPost $blogPost)
    {
        $this->blogPost = $blogPost;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        logs()->info("Створено новий запис в блозі [{$this->blogPost->id}]");
    }
}

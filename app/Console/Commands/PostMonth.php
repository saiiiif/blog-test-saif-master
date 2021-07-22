<?php

namespace App\Console\Commands;
use App\Models\Post;
use Illuminate\Console\Command;
use Carbon\Carbon;
class PostMonth extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Post:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a Post every 1st of a month';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()

    {
             
        $todayDate = Carbon::now()->format('m-y');     
        $post = Post::create(
            [
                'title'       => "Zusammenfassung für ".$todayDate,
                'body'        => "this is a body ",
                'category_id' => "1",
                'user_id'    => "1",
            ]
        );



    }
}

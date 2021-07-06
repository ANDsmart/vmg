<?php


namespace App\Services\Cms;


use App\Models\Cms\Blog;
use App\Repositories\Cms\BlogRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ScheduleBlog
{

    protected $blog;
    public function __construct()
    {
        $this->blog = new Blog();
    }


    public function publishBlog()
    {

        $today = Carbon::today();
        if($this->blog != null)
        {
            //Get all blogs that their publish date is due
            $blogs =  (new BlogRepository())->query()->whereDate('publish_date','<=',standard_date_format($today))->where('isscheduled', true)->get();
            foreach ($blogs as $blog){
                $this->updateBlog($blog);
            }

        };
    }

    //create new task
    public function updateBlog(Model $blog)
    {
        //update schedule date
        return DB::transaction(function () use ($blog) {
            $now = Carbon::now();
            $blog = $blog->update([
                'publish_date' => $now,
                'publish_time' => $now,
                'isscheduled' => false,
            ]);
            return $blog;

        });

    }
}

<?php
namespace App\Http\Traits;
use App\Models\Post;
use Illuminate\Http\Request;

trait PostTrait {
    public function index(Request $request){
        // Fetch all the post from the 'posts' table.
        $results = Post::orderBy('id')->paginate(20);
        $artilces = '';
        if ($request->ajax()) {
            foreach ($results as $result){
                $artilces.='<div class="col-md-3 my-3 text-center">
                <img src="https://picsum.photos/seed/picsum/200/200" alt="'. $result->title .'">
                <h3>'. $result->title .'</h3>
                <p>'. $result->content .'</p>
            </div>';
            }
            return $artilces;
        }
        return view('welcome');
    }
}

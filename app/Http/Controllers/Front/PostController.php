<?php

namespace App\Http\Controllers\Front;
use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;
use App\Models\{ Category, Post, User, Tag };
use App\Http\Requests\Front\SearchRequest;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * The PostRepository instance.
     *
     * @var \App\Repositories\PostRepository
     */
    protected $postRepository;

    /**
     * The pagination number.
     *
     * @var int
     */
    protected $nbrPages;

    /**
     * Create a new PostController instance.
     *
     * @param  \App\Repositories\PostRepository $postRepository
     * @return void
    */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
        $this->nbrPages = config('app.nbrPages.posts');
    }

    
    public function blog(Request $request){
        $key = $request->input("key", null);
        $id_categorie = $request->get("category_id", null);
        $price_range = $request->input("price_range", null);
        $ordre_affichage = $request->input("ordre_affichage", null);
        
        $posts = Post::query();

        if(!is_null($key)){
            $posts->where('title', 'like', '%'.$key.'%')
            ->Orwhere('description', 'like', '%'.$key.'%');
        }
        if(!is_null($id_categorie)){
            $posts->where('category_id', $id_categorie);
        }
      
        

        $posts = $posts->paginate(24);
        
        $total_post = Post::count();
       
      
      $categories =Category::has('posts')->get();
    
   
    
        return view('front.blogs.index',compact('posts', 'categories','key','total_post'));
    }



    public function index()
    {
        $posts = $this->postRepository->getActiveOrderByDate($this->nbrPages);
        $heros = $this->postRepository->getHeros();

        return view('front.index', compact('posts', 'heros'));
    }



    public function posts($id)
    {
        $categories = Category::with('posts')->get();
        $current_category = Category::with('posts')->findOrFail($id);
        $produits = $current_category->posts;
        return view('front.blogs.index', compact('current_category', 'categories', 'posts'));
    }

    public function details($id){
        $post =Post::with('comments')-> findOrFail($id);

       // dd($post);
      
        return view('front.blogs.details', compact('post'));
    }
    
    public function show(Request $request, $slug)
    {
        $post = $this->postRepository->getPostBySlug($slug);
 
        return view('front.post', compact('post'));
    }

    /**
     * Display a listing of the posts for the specified category.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function category(Category $category)
    {
        $posts = $this->postRepository->getActiveOrderByDateForCategory($this->nbrPages, $category->slug);
        $title = __('Posts for category ') . '<strong>' . $category->title . '</strong>';

        return view('front.index', compact('posts', 'title'));
    }

    /**
     * Get posts for specified user
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function user(User $user)
    {
        $posts = $this->postRepository->getActiveOrderByDateForUser($this->nbrPages, $user->id);
        $title = __('Posts for author ') . '<strong>' . $user->name . '</strong>';

        return view('front.index', compact('posts', 'title'));
    }

    /**
     * Get posts for specified tag
     *
     * @param  \App\Models\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function tag(Tag $tag)
    {
        $posts = $this->postRepository->getActiveOrderByDateForTag($this->nbrPages, $tag->slug);
        $title = __('Posts for tag ') . '<strong>' . $tag->tag . '</strong>';

        return view('front.index', compact('posts', 'title'));
    }

    /**
     * Get posts with search
     *
     * @param  \App\Http\Requests\SearchRequest $request
     * @return \Illuminate\Http\Response
     */
    public function search(SearchRequest $request)
    {
        $search = $request->search;
        $posts = $this->postRepository->search($this->nbrPages, $search);
        $title = __('Posts found with search: ') . '<strong>' . $search . '</strong>';

        return view('front.index', compact('posts', 'title'));
    }
}

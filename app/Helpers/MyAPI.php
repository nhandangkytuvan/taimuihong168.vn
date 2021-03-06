<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Term;
use Session;
class MyAPI {
    public static function getUrlPost($post_id){
        $post = Post::find($post_id);
        if($post){
            return url($post->post_alias.'/'.$post->id.'.htm');
        }else{
            return 'http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en';
        }
    }
    public static function getUrlTerm($term_id){
        $term = Term::find($term_id);
        if($term){
            return url($term->term_alias.'/'.$term->id);
        }else{
            return 'http://tv.suckhoe168.com/LR/Chatpre.aspx?id=MCG56116959&lng=en';
        }
    }
}
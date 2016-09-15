<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //   
     protected $table = 'post';
     protected $fillable =['user','post_text','post_image','parent_id'];



    public static function getChardern($id){
           $post = Post::where('parent_id',$id)
                           ->get();
        return $post;

        dd($post);

    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Routes;
use App\Comments;
use App\User;

class CommentController extends Controller
{
    public function create($id){
        $route= Routes::find($id);
        return view('commentCreate')->with('route',$route);
    }

    public function store(Request $request, $id){
        $route= Routes::find($id);
        $this->validate($request,[
            'comment'=>'required'
        ]);
        $comment= new Comments;
        $comment->text= $request->input('comment');
        $user_id=auth()->user()->id;
        $comment->user_id=$user_id;
        $user=User::find($user_id);
        $comment->name=$user->name;
        $comment->save();

        $route->Comments()->save($comment);
        /*$data=[
            'name'=>$user->name,
            'route'=>$route
        ];*/
        /*$route->Comments()->update(['text'=>$comment->text
            ]);*/
        return view('singleRoute')->with('trail',$route);

    }
    public function delete($id){
        $route= Routes::find($id);
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        $count= count($route->Comments);
        $copy=$route;
        for($x=0;$x<$count;$x++){
            if($route->Comments[$x]->name == $user->name){
                $data[$x]=$route->Comments[$x];
            }
        }
        $copy->Comments=$data;
        return view('deleteComment')->with('trail',$copy);
    }
    public function delete2($id){
        $comment=Comments::find($id);
        $route_id= $comment->routes_id;
        $route= Routes::find($route_id);
        $comment->delete();
        return view('singleRoute')-> with('trail',$route);
       
    }
    //
}

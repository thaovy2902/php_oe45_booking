<?php

namespace App\Http\Controllers;

use App\Models\LikeReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function Like(Request $request)
    {
        $id = Auth::id();
        $like = LikeReview::where('account_id', $id)->where('review_id', $request->review_id)->first();

        if (!empty($liking)) {
            $deleteLike = LikeReview::where('id', $like->id);
            $deleteLike->delete();
        } else {
            $liking = new LikeReview;
            $liking->user_id = Auth::id();
            $liking->status = 1;
            $liking->product_id = $request->product_id;
            $liking->save();
        }
        $likecontroller = new LikeController;
        return $likecontroller->countLike();
    }
    public function countLike()
    {
        $liking = LikeReview::where('product_id', session('product_id'))->count();
        if (!empty($liking)) {
            $liking;
        } else {
            $liking = 0;
        }
        return $liking;
    }
}

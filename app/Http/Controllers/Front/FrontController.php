<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use App\Business\ArticleBusiness;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController
{
    private $articleBusiness;
    public function __construct(ArticleBusiness $articleBusiness)
    {
        $this->articleBusiness = $articleBusiness;
    }

    public function service()
    {
        $articles = $this->articleBusiness->articleList(['article_type'=>1],0,0,['article_id'=>'desc']);
        $articles = $articles['data']->toArray();
        return view('front.service',['articles'=>$articles]);
    }


}
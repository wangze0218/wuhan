<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use App\Model\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\ArticleBusiness;
use App\ResponseTrait;

class ArticleController
{
    use ResponseTrait;

    private $articleBusiness;

    public function __construct(ArticleBusiness $articleBusiness)
    {
        $this->articleBusiness = $articleBusiness;
    }

    public function index(Request $request)
    {
        return view('behind.article.index',[]);
    }

    public function create(Request $request)
    {
        return view('behind.article.create');
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $file = $request->file();
        dd($in);
//        dd($file);
    }


}
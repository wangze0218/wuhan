<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\ArticleModel;
use App\System\ResponseException;

class ArticleBusiness
{
    public function article($article_id)
    {
        $article = ArticleModel::find($article_id);
        return $article;
    }

    public function articleCreate($title,$title_img,$title_describe,$content,$article_type)
    {
        $article = ArticleModel::create([
            'title'=>$title,
            'title_img'=>$title_img,
            'title_describe'=>$title_describe,
            'content'=>$content,
            'article_type'=>$article_type,
        ]);
        return $article;
    }

    //$where = [],$columns = ['*'],$order_by = [],$page = 0,$pageSize = 0
    public function articleList($where,$page,$page_size)
    {
        $list['data'] = ArticleModel::getRecordListCondition(
            $where,
            ['article_id','title','title_img','title_describe','article_type'],
            ['updated_at'=>'desc'],
            $page,
            $page_size
        );
        $list['count'] = ArticleModel::getRecordCountCondition(
            $where,
            ['article_id','title','title_img','title_describe','article_type'],
            ['updated_at'=>'desc'],
            $page,
            $page_size
        );
        return $list;
    }
}
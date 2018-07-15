<?php
/**
 * Created by PhpStorm.
 * Student: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Business;

use App\Model\StudentModel;
use App\System\ResponseException;

class StudentBusiness
{
    public function studentList($page,$page_size = 15)
    {
        $students['data'] = StudentModel::getRecordListCondition(['deleted_at'=>null],['*'],['created_at'=>'desc'],$page,$page_size);
        $students['count'] = StudentModel::getRecordCountCondition(['deleted_at'=>null],['*'],['created_at'=>'desc'],1,15);
        return $students;
    }

}
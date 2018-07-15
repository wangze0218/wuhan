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
    public function studentList($student_name='',$identity='',$page=1,$page_size=15)
    {

        $where['student_name'] = ['like'=>$student_name];
        $where['identity'] = ['like'=>$identity];
        $where['deleted_at'] = null;
        $students = StudentModel::getRecordListCondition($where,['*'],['created_at'=>'desc'],$page,$page_size);
        return $students;
    }

}
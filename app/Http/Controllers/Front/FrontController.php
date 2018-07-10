<?php
/**
 * Created by PhpStorm.
 * User: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Front;
use App\Model\StudentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\StudentBusiness;

class FrontController
{

    public function student_search(Request $request)
    {
        $in = $request->all();
        $student_name = trim($in['student_name'],' ');
        $identity = trim($in['identity'],' ');
        $student = StudentModel::where('student_name',$student_name)->where('identity',$identity)->get();
        if(empty($student->toArray())){
            $message = '查询无结果';
        }else{
            $message = '学生信息已录入';
        }

        return view('front.search',['message'=>$message]);
    }

}
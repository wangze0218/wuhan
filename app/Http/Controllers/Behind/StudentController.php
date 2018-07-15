<?php
/**
 * Created by PhpStorm.
 * Student: wangze
 * Date: 2017/8/29
 * Time: 14:53
 */

namespace App\Http\Controllers\Behind;
use App\Model\StudentModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Business\StudentBusiness;
use App\ResponseTrait;

class StudentController
{
    use ResponseTrait;

    private $studentBusiness;

    public function __construct(StudentBusiness $studentBusiness)
    {
        $this->studentBusiness = $studentBusiness;
    }

    public function index(Request $request)
    {
        $search = $request['search']?$request['search']:'';
        $page = $request['page']?$request['page']:1;

        $list = $this->studentBusiness->studentList($search,$search,$page);
        if($search) $list->appends(['search' => $search])->links();
        return view('behind.student.index',['list'=>$list]);
    }

    public function store(Request $request)
    {
        $in = $request->all();
        $param['student_name'] = $in['student_name'];
        $param['identity'] = $in['identity'];
        $param['major'] = $in['major'];
        $param['direction'] = $in['direction'];
        $param['result'] = $in['result'];
        $student =  StudentModel::create($param);
        return $this->_response(10000,'请求成功',$student);
    }

    public function create(Request $request)
    {
        return view('behind.student.create');
    }

    public function edit($id)
    {
        $student = StudentModel::find($id);
        return view('behind.student.edit',['student'=>$student]);
    }

    public function update(Request $request,$id)
    {
        $in = $request->all();
        $param['student_name'] = $in['student_name'];
        $param['identity'] = $in['identity'];
        $param['major'] = $in['major'];
        $param['direction'] = $in['direction'];
        $param['result'] = $in['result'];
        $student =  StudentModel::where('student_id',$id)->update($param);
        return $this->_response(10000,'请求成功',$student);
    }

    public function destroy($id)
    {
        StudentModel::destroy($id);
        return $this->_response(10000,'删除成功');
    }

}
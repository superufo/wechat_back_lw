<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;

use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class SliderController extends BaseController
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code', 'name', 'description', 'post_code', 'post_name', 'customer_code', 'customer_name', 'department_code', 'department_name', 'start_date', 'end_date', 'enabled', 'status', 'finish_num', 'need_num', 'request', 'duty', 'province', 'city', 'town', 'street', 'min_money', 'max_money', 'work_year', 'education', 'mode', 'keyin_date', 'keyin_user'];
        $this->nativeModel = new BaseModel('post', $fields, 'code');
    }

    public function getlist()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                $data = [ ["id"=>165,"name"=>"大招聘","orders"=>5, "picurl"=>"http://www.backend.cn/uploads/slider/2017_10_7_1507368199357.jpg","distributorid"=>"all"],
                         ["id"=>167,"name"=>"童年时光","orders"=>3, "picurl"=>"http://www.backend.cn/uploads/slider/2017_10_7_1507368199357.jpg","distributorid"=>"all"]
                        ];
                $res['data'] = $data;
                $response = $this->response($data, 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }


    }
}

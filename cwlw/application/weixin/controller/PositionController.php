<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;

use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;


class PositionController extends BaseController
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code', 'name', 'description', 'post_code', 'post_name', 'handle_num','fulljob','customer_code', 'customer_name', 'department_code', 'department_name', 'start_date', 'end_date', 'enabled', 'status', 'finish_num', 'need_num', 'request', 'duty', 'province', 'city', 'town', 'street', 'min_money', 'max_money', 'work_year', 'education', 'mode', 'keyin_date', 'keyin_user'];
        $this->nativeModel = new BaseModel('post', $fields, 'code');
    }

    public function getlist()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();
                unset($map['page']);
                $data = $this->nativeModel->getPageList('*, (select cn_file.path from cn_file inner join cn_customer on cn_file.id=cn_customer.logo where cn_customer.code=customer_code limit 1) as logo,(select cn_customer.type from cn_customer where cn_customer.code=customer_code limit 1) as customer_type,(select scale from cn_customer where cn_customer.code=customer_code limit 1) as customer_scale ',$map);
                $server = request()->server();
                $serverDddr = 'http://' . $server['SERVER_NAME'].DS;
                foreach($data['data'] as $k=>$item ){
                    $logo = $serverDddr.$item['logo'];
                    $logo = str_replace("\\",'/',$logo);
                    $data['data'][$k]['logo'] = $logo;
                }
                $response = $this->response($data, 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }

    public function getone()
    {
        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();
                unset($map['page']);

                $data = \think\Db::query('select  cp.*,(select cn_customer.type from cn_customer where cn_customer.code=customer_code limit 1) as customer_type,(select scale from cn_customer where cn_customer.code=customer_code limit 1) as customer_scale,(select cn_file.path from cn_file  where cn_file.id=logo limit 1) as logo  from cn_customer as ct inner join cn_post cp on ct.code=cp.customer_code where cp.code=\''.$map['code'].'\'');
                $server = request()->server();
                $serverDddr = 'http://' . $server['SERVER_NAME'].DS;

                $logo = $serverDddr .$data[0]['logo'];
                $logo = str_replace("\\", "/", $logo);
                $data[0]['logo'] = $logo;

                $response = $this->response($data[0], 'json', 200);
                $response->send();
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                break;
        }
    }

    public function sendresume()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                break;
            case 'put': // put请求处理代码
                break;
            case 'post': // post请求处理代码
                $request = Request::instance();
                $post = $request->post();

                if( empty($post['resume_id']) ||  empty($post['post_code']) || empty($post['post_name']) || empty($post['openid'])   ){
                    $res = ['success'=>false,'msg'=>'openid为空'];
                    $this->response($res, 'json', 200)->send();
                    exit();
                }

                $where = " where resume_id='".$post['resume_id']."'";
                $where = " where post_code='".$post['post_code']."'";
                $result = \think\Db::query('select count(*) as total  from cn_post_resume '.$where);
                $total = $result[0]['total'];
                if($total>1){
                    $res = ['success'=>true,'msg'=>'您已经投递过这个职位，不需要重新投递.','data'=>$total];

                    $response = $this->response($res, 'json', 200);
                    $response->send();
                    exit();
                }

                //$data = \think\Db::execute('select * from cn_user where cp.openid=\''.$map['openid'].'\'');
                $post['op_time'] = date('Y-m-d H:i:s');
                $id = db('post_resume')->insert($post,false,true);
                if( $id===false )  {
                    $res = ['success'=>false,'msg'=>'服务器异常.','data'=>$id];
                }  else{
                    $res = ['success'=>true,'msg'=>'投递成功,请返回.','data'=>$id];
                }

                $response = $this->response($res, 'json', 200);
                $response->send();
                break;
        }
    }



}

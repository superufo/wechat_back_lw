<?php

namespace app\weixin\controller;

use think\controller\Rest;

use \think\Request;

use app\weixin\controller\BaseController;
use think\Response;
use \app\weixin\model\BaseModel;

class CompanyController extends BaseController
{
    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code', 'type', 'name', 'short_name', 'province','logo','scale','city', 'town', 'street', 'certno', 'cert_img', 'url', 'weixin', 'contact', 'contact_phone', 'introduce', 'keyin_user', 'keyin_date'];
        $this->nativeModel = new BaseModel('customer', $fields, 'code');
    }

    public function getlist()
    {

        switch ($this->method) {
            case 'get': // get请求处理代码
                $request = Request::instance();
                $map = $request->get();
                unset($map['page']);

                $server = request()->server();
                $serverDddr = 'http://' . $server['SERVER_NAME'] . '/';

                $data = $this->nativeModel->getPageList('*,cert_img as cert_id,(select path from cn_file where id=cert_img limit 1) as cert_img ',$map);

                foreach($data['data'] as $k=>$item ){
                            $data['data'][$k]['cert_img'] = $serverDddr.$item['cert_img'];
                }

                //$data = ['test' => '咔咔咔咔咔咔咔'];
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

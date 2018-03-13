<?php

namespace app\backend\controller;

use app\backend\controller\BaseController;
use \think\Request;

use \app\backend\model\BaseModel;

class CompanyController extends BaseController
{
    private $nativeModel;

    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code', 'type', 'name', 'short_name', 'scale','provice', 'city','logo', 'town', 'street', 'certno', 'cert_img', 'url', 'weixin', 'contact', 'contact_phone', 'introduce', 'keyin_user', 'keyin_date'];
        $this->nativeModel = new BaseModel('customer', $fields, 'code');
    }


    public function index()
    {
        $this->assign(['menutitle' => '企业信息', 'pmenutitle' => '信息管理']);

        $map = [];
        $name = input('param.name');
        if( !empty($name) )
            $map['name'] = $name;

        if(!empty(input('param.type')))
           $mapping['type'] = input('param.type');

        if(!empty(input('param.province')))
            $map['province'] = input('param.province');

        if(!empty(input('param.city')))
            $map['city'] = input('param.city');

        if(!empty(input('param.town')))
            $map['town'] = input('param.town');

        $res = $this->nativeModel->getPageList('backend/company/Index', '*,cert_img as cert_id,(select path from cn_file where id=cert_img limit 1) as cert_img ',$map);
        $this->assign('pageHint', $res['pageHint']);
        $this->assign('pageHtml', $res['pageHtml']);
        $this->assign('total', $res['total']);
        $this->assign('data', $res['data']);

        $province = $this->getArea();
        $this->assign('province', $province);
        $server = request()->server();
        $this->assign('serverDddr', 'http://' . $server['SERVER_NAME'] . '/');
        return $this->fetch('index');
    }

    public function add()
    {
        $request = Request::instance();
        $post = $request->post();
        //$server = $request->server();  echo "<pre>"; print_r($server); echo "</pre>";   print_r($server['SERVER_NAME']); die;
        if (empty($post)) {
            $this->assign(['menutitle' => '企业信息', 'pmenutitle' => '信息管理', 'actiontitle' => '新增']);

            $maxCode = db('customer')->max('code');

            $result = \think\Db::query('select Max(code) as mcode from cn_customer');
            $maxCode = $result[0]['mcode'];
            if (empty($maxCode))
                $code = '10000000';
            else
                $code = getDbKey('X', $maxCode, '10');
            $this->assign('code', $code);

            $province = $this->getArea();
            $this->assign('province', $province);

            return $this->fetch('add');
        } else {
            $post['keyin_date'] = date('Y-m-d H:i:s');
            $id = $this->nativeModel->add($post);
            if (!$id) {
                $this->success('新增成功', 'backend/company/Index');
            } else {
                $this->error('新增失败');
            }

            exit();
        }
    }

    public function edit()
    {

    }

    public function del()
    {
        $request = Request::instance();
        $post = $request->post();
        $ids = [$post['code']];
        $res = $this->nativeModel->del($ids);
        if ( $res ) {
            echo json_encode(['data'=>[],'msg'=>'删除成功','success'=>true],true);
        } else {
            echo json_encode(['data'=>[],'msg'=>'删除失败','success'=>false],true);
        }

        exit();
    }


    public function general()
    {
        $this->assign('domain', $this->request->url(true));
        return $this->fetch('index');
    }

}

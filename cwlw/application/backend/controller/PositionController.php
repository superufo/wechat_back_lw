<?php
namespace app\backend\controller;

use app\backend\controller\BaseController;
use \think\Request;

use \app\backend\model\BaseModel;

class PositionController extends BaseController
{
    public function test()
    {
        $this->assign('domain',$this->request->url(true));
        $this->assign(['menutitle'=>'职位信息','pmenutitle'=>'信息管理' ]);
        return $this->fetch('index');
    }


    public function __construct(Request $request = null)
    {
        header("Content-type: text/html; charset=utf-8");
        parent::__construct($request);

        $fields = ['code', 'name', 'description', 'post_code', 'post_name', 'handle_num','fulljob','customer_code','customer_name','department_code','department_name','start_date','end_date','enabled','status','finish_num','need_num','request','duty','province','city','town','street','min_money','max_money','work_year','education','mode','keyin_date','keyin_user'];
        $this->nativeModel = new BaseModel('post', $fields, 'code');
    }


    public function index()
    {
        $this->assign(['menutitle'=>'职位信息','pmenutitle'=>'信息管理' ]);

        $map = [];
        $name = input('param.name');
        if( !empty($name) )
            $map['name'] = $name;

        if(!empty(input('param.mode')))
            $mapping['mode'] = input('param.mode');

        if(!empty(input('param.province')))
            $map['province'] = input('param.province');

        if(!empty(input('param.city')))
            $map['city'] = input('param.city');

        if(!empty(input('param.town')))
            $map['town'] = input('param.town');

        $res = $this->nativeModel->getPageList('backend/position/Index', '* ',$map);
        $this->assign('pageHint', $res['pageHint']);
        $this->assign('pageHtml', $res['pageHtml']);
        $this->assign('total', $res['total']);
        $this->assign('data', $res['data']);

        $province = $this->getArea();
        $this->assign('province', $province);

        return $this->fetch('index');
    }

    public function add()
    {
        $request = Request::instance();
        $post = $request->post();
        //$server = $request->server();  echo "<pre>"; print_r($server); echo "</pre>";   print_r($server['SERVER_NAME']); die;
        if (empty($post)) {
            $this->assign(['menutitle' => '职位信息', 'pmenutitle' => '信息管理', 'actiontitle' => '新增']);

            $maxCode = db('post')->max('code');

            $result = \think\Db::query('select Max(code) as mcode from cn_post');
            $maxCode = $result[0]['mcode'];
            if (empty($maxCode))
                $code = '10000000';
            else
                $code = getDbKey('X', $maxCode, '10');
            $this->assign('code', $code);


            $result = \think\Db::query('select * from cn_customer order By code ');
            $this->assign('customer', $result);

            $province = $this->getArea();
            $this->assign('province', $province);

            return $this->fetch('add');
        } else {

            $post['keyin_date'] = date('Y-m-d H:i:s');   //print_r( $request->param()); print_r($_POST); print_r($post); die;
            $id = $this->nativeModel->add($post);
            if (!$id) {
                $this->success('新增成功', 'backend/position/Index');
            } else {
                $this->error('新增失败');
            }

            exit();
        }
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

    public function   getLocation(){
        $request = Request::instance();
        $post = $request->post();
        $map['code'] = $post['customer_code'];

        $res = db('customer')->where($map)->select();

        if ( $res ) {
            $res[0]['success'] = true;
            echo json_encode($res[0],true);
        } else {
            echo json_encode(['data'=>[],'msg'=>'查询失败','success'=>false],true);
        }
        exit();
    }


}

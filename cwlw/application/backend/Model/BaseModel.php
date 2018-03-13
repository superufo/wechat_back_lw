<?php

namespace app\backend\model;

use think\Model;
use think\Request;

class BaseModel extends Model
{
    public $fields;
    public $primaryKey;

    public function __construct($table, $fields, $primaryKey = 'code', $data = [])
    {
        parent::__construct($data);
        $this->table = $table;
        $this->fields = $fields;
        $this->primaryKey = $primaryKey;
    }

    /*
     * 通过条件分页显示
     * ＠parameter $pageUrl 分页跳转路径
     * ＠parameter $selFields 查询字段包括子查询
     * ＠parameter $map where条件 get 字符
     * return mix
     */
    public function getPageList($pageUrl = 'backend/company/Index', $selFields = '',$map=[])
    {
        $page = input('get.page');
        if (isset($page) && null !== $page) {
            $current = $_GET['page'];
        } else {
            $current = 1;
        }
        $perPage = 2;
        $startPage = $perPage * ($current - 1);
        $data = db($this->table)->field($selFields)->where($map)->limit($startPage, $perPage)->select();
        $total = db($this->table)->where($map)->count($this->primaryKey);

        $query='';
        if(!empty($map)) {
            $query = http_build_query($map);
            $query .= '&page='.$page;
        }

        $bootstrap = new \think\paginator\driver\Bootstrap($data, $perPage, $current, $total, false, ['path' => url($pageUrl,$query)]);

        $end = intval($perPage * $page);
        $pageHint = "<div class=\"pagination\">&nbsp&nbsp&nbsp显示第" . $current . "到" . $end . "条 总" . $total . "条 </div>";

        $res = [
            'data' => $data,
            'total' => $total,
            'pageHint' => $pageHint,
            'pageHtml' => $bootstrap->render(['flable' => 'div', 'slable' => 'ul', 'class' => 'pagination pagination-right'])
        ];

        return $res;
    }

    public function add($data)
    {
        //$data = ['path' => $path,  'name' => basename($path), 'time' => date('Y-m-d H:i:s') ];
        foreach ($data as $key => $val) {
            if (!in_array($key, $this->fields)) {
                unset($data[$key]);
            }

            $val = trim($val);
            if(empty($val)){
                unset($data[$key]);
            }
        }

        $id = db($this->table)->insert($data, false, true);
        if ($id!==false)
            return $id;
        else
            return false;
    }

    /* 删除
     * $ids　array
     */
    public function del($ids)
    {
        $count = db($this->table)->delete($ids);

        if ($count > 0)
            return $count;
        else
            return false;
    }

    /* 删除
     * $ids　array
     */
    public function deleteByWhere($key, $logic, $val)
    {
        $count = parent::where($key, $logic, $val)->delete();

        if ($count > 0)
            return $count;
        else
            return false;
    }

}
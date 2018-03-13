<?php

namespace app\weixin\model;

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
     * ＠parameter $selFields 查询字段包括子查询
     * ＠parameter $map where条件 get 字符
     * return mix
     */
    public function getPageList($selFields = '',$map=[],$join=[],$perPage=10)
    {
        $page = input('get.page');
        if (isset($page) && null !== $page) {
            $current = $_GET['page'];
        } else {
            $current = 1;
        }
        $startPage = $perPage * ($current - 1);

        if( empty($join) ) {
            $data = db($this->table)->field($selFields)->where($map)->limit($startPage, $perPage)->select();
        }else{
            $data = db($this->table)->join($join)->field($selFields)->where($map)->limit($startPage, $perPage)->select();
        }

        $total = db($this->table)->where($map)->count($this->primaryKey);

        $res = [
            'data' => $data,
            'total' => $total,
        ];

        return $res;
    }


    public function getCount($map=[])
    {
        $where = " where 1=1";
        foreach( $map as $key=>$val ){
            $where = " and " .$key." = '".$val."'";
        }

        $result = \think\Db::query('select count(*) as total as mcode from '.$this->table.$where);
        $total = $result[0]['total'];

        return $total;
    }


    public function add($data)
    {
        foreach ($data as $key => $val) {
            if (!in_array($key, $this->fields)) {
                unset($data[$key]);
            }
        }

        $id = db($this->table)->insert($data, false, true);
        if ( $id!==false ) {
            return $id;
        }else
            return false;
    }


    public function updateTb($data,$pramaryKey){
        foreach ($data as $key => $val) {
            if (!in_array($key, $this->fields)) {
                unset($data[$key]);
            }
        }

        $id = db($this->table)->where($pramaryKey,$data[$pramaryKey])->update($data);
        if ( $id!==false )
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
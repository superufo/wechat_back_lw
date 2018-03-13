<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 *  判断编码规则是否 按16 进制 10 进制来生成每段的主键部分
 *
 * @copyright
 * @since 2016-12-16
 * @link
 * @param  char $hex   "X"或"T"
 * @param  char $section_max_value 主键部分的最大值
 * @param  int $step   编码规则中定义的步长
 * @param  char $rule  1-4 的分项编码规则
 * @return char
 */
 function getDbKey($hex,$section_max_value,$step){
    if( $hex == "X" ){
        $max_key = base_convert($section_max_value,16,10);
        $key     = ($max_key + intval($step)); // intval溢出
        $key      =  base_convert($key, 10, 16);
    }else {
        $key     = ($section_max_value + $step);
    }

    return $key;
}
























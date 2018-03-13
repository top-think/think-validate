<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2017 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace think\validate;

/**
 * Rule链式方法助手类
 * Interface Rule
 * @author : evalor <master@evalor.cn>
 * @package think\validate
 */
interface Rule
{
    /* @return Rule */
    function confirm($field, $msg = ''): self; // 验证是否和某个字段的值一致
    /* @return Rule */
    function different($field, $msg = ''); // 验证是否和某个字段的值是否不同
    /* @return Rule */
    function egt($value, $msg = ''); // 验证是否大于等于某个值
    /* @return Rule */
    function gt($value, $msg = ''); // 验证是否大于某个值
    /* @return Rule */
    function elt($value, $msg = ''); // 验证是否小于等于某个值
    /* @return Rule */
    function lt($value, $msg = ''); // 验证是否小于某个值
    /* @return Rule */
    function eg($value, $msg = ''); // 验证是否等于某个值
    /* @return Rule */
    function in($values, $msg = ''); // 验证是否在范围内
    /* @return Rule */
    function notIn($values, $msg = ''); // 验证是否不在某个范围
    /* @return Rule */
    function between($values, $msg = ''); // 验证是否在某个区间
    /* @return Rule */
    function notBetween($values, $msg = ''); // 验证是否不在某个区间
    /* @return Rule */
    function length($length, $msg = ''); // 验证数据长度
    /* @return Rule */
    function max($max, $msg = ''); // 验证数据最大长度
    /* @return Rule */
    function min($min, $msg = ''); // 验证数据最小长度
    /* @return Rule */
    function after($date, $msg = ''); // 验证日期
    /* @return Rule */
    function before($date, $msg = ''); // 验证日期
    /* @return Rule */
    function expire($dates, $msg = ''); // 验证有效期
    /* @return Rule */
    function allowIp($ip, $msg = ''); // 验证IP许可
    /* @return Rule */
    function denyIp($ip, $msg = ''); // 验证IP禁用
    /* @return Rule */
    function regex($rule, $msg = ''); // 使用正则验证数据
    /* @return Rule */
    function token($token, $msg = ''); // 验证表单令牌
    /* @return Rule */
    function is($rule = null, $msg = ''); // 验证字段值是否为有效格式
    /* @return Rule */
    function isRequire($rule = null, $msg = ''); // 验证字段必须
    /* @return Rule */
    function isNumber($rule = null, $msg = ''); // 验证字段值是否为数字
    /* @return Rule */
    function isArray($rule = null, $msg = ''); // 验证字段值是否为数组
    /* @return Rule */
    function isInteger($rule = null, $msg = ''); // 验证字段值是否为整形
    /* @return Rule */
    function isFloat($rule = null, $msg = ''); // 验证字段值是否为浮点数
    /* @return Rule */
    function isMobile($rule = null, $msg = ''); // 验证字段值是否为手机
    /* @return Rule */
    function isIdCard($rule = null, $msg = ''); // 验证字段值是否为身份证号码
    /* @return Rule */
    function isChs($rule = null, $msg = ''); // 验证字段值是否为中文
    /* @return Rule */
    function isChsDash($rule = null, $msg = ''); // 验证字段值是否为中文字母及下划线
    /* @return Rule */
    function isChsAlpha($rule = null, $msg = ''); // 验证字段值是否为中文和字母
    /* @return Rule */
    function isChsAlphaNum($rule = null, $msg = ''); // 验证字段值是否为中文字母和数字
    /* @return Rule */
    function isDate($rule = null, $msg = ''); // 验证字段值是否为有效格式
    /* @return Rule */
    function isBool($rule = null, $msg = ''); // 验证字段值是否为布尔值
    /* @return Rule */
    function isAlpha($rule = null, $msg = ''); // 验证字段值是否为字母
    /* @return Rule */
    function isAlphaDash($rule = null, $msg = ''); // 验证字段值是否为字母和下划线
    /* @return Rule */
    function isAlphaNum($rule = null, $msg = ''); // 验证字段值是否为字母和数字
    /* @return Rule */
    function isAccepted($rule = null, $msg = ''); // 验证字段值是否为yes, on, 或是 1
    /* @return Rule */
    function isEmail($rule = null, $msg = ''); // 验证字段值是否为有效邮箱格式
    /* @return Rule */
    function isUrl($rule = null, $msg = ''); // 验证字段值是否为有效URL地址
    /* @return Rule */
    function activeUrl($rule = null, $msg = ''); // 验证是否为合格的域名或者IP
    /* @return Rule */
    function ip($rule = null, $msg = ''); // 验证是否有效IP
    /* @return Rule */
    function fileExt($ext, $msg = ''); // 验证文件后缀
    /* @return Rule */
    function fileMime($mime, $msg = ''); // 验证文件类型
    /* @return Rule */
    function fileSize($size, $msg = ''); // 验证文件大小
    /* @return Rule */
    function image($rule, $msg = ''); // 验证图像文件
    /* @return Rule */
    function method($method, $msg = ''); // 验证请求类型
    /* @return Rule */
    function dateFormat($format, $msg = ''); // 验证时间和日期是否符合指定格式
    /* @return Rule */
    function unique($rule, $msg = ''); // 验证是否唯一
    /* @return Rule */
    function behavior($rule, $msg = ''); // 使用行为类验证
    /* @return Rule */
    function filter($rule, $msg = ''); // 使用filter_var方式验证
    /* @return Rule */
    function requireIf($rule, $msg = ''); // 验证某个字段等于某个值的时候必须
    /* @return Rule */
    function requireCallback($rule, $msg = ''); // 通过回调方法验证某个字段是否必须
    /* @return Rule */
    function requireWith($rule, $msg = ''); // 验证某个字段有值的情况下必须
    /* @return Rule */
    function must($rule = null, $msg = ''); // 必须验证
}
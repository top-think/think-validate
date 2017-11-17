# think-validate

基于PHP5.6+ 的Validate实现，主要特性：

- 基于ThinkPHP5.1的ORM独立封装；
- 保留了绝大部分的ThinkPHP ORM特性
- 支持Db类和模型操作

安装
~~~
composer require topthink/think-validate
~~~

用法：
~~~
use think\Validate;

$validate = Validate::make([
    'name'  => 'require|max:25',
    'email' => 'email'
]);

$data = [
    'name'  => 'thinkphp',
    'email' => 'thinkphp@qq.com'
];

if (!$validate->check($data)) {
    var_dump($validate->getError());
}
~~~

支持创建验证器进行数据验证
~~~
<?php
namespace app\index\validate;

use think\Validate;

class User extends Validate
{
    protected $rule =   [
        'name'  => 'require|max:25',
        'age'   => 'number|between:1,120',
        'email' => 'email',    
    ];
    
    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',    
    ];
    
}
~~~

验证器调用代码如下：
~~~
$data = [
    'name'  => 'thinkphp',
    'email' => 'thinkphp@qq.com',
];

$validate = new \app\index\validate\User;

if (!$validate->check($data)) {
    var_dump($validate->getError());
}
~~~

更多用法可以参考5.1完全开发手册的[验证](https://www.kancloud.cn/manual/thinkphp5_1/354101)章节
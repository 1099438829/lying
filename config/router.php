<?php
//可选参数都应该被注释或删除,而不是空字符串
return [
    //默认域名配置;必须
    'default'=>[
        //绑定的module;可选,默认为index,如果定义了此参数,就没有办法通过path访问其他模块了
        'module'=>'index',
        //默认控制器;可选,默认为index
        'ctrl'=>'index',
        //默认方法;可选,默认为index
        'action'=>'index',
        //默认后缀;可选
        'suffix'=>'.html',
        //路由规则;必须
        'rule'=>[
            'del/:id'=>'index/index/del',
        ],
    ],
    //指定域名配置;可选
    'admin.lying.com'=>[
        //绑定的module;必须
        'module'=>'admin',
        //默认控制器;可选,默认为index
        'ctrl'=>'index',
        //默认方法;可选,默认为index
        'action'=>'index',
        //默认后缀;可选
        'suffix'=>'.html',
        //路由规则;必须
        'rule'=>[
            
        ],
    ],
];
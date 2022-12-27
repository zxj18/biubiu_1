<?php

$config =  array (
    'name' => '云播放器', //播放器名称
    
    'api' => 'http://api.xiaomaomi.tv/', //计费5.0 api 结尾/
    
    'key' => '266a8f2c830cece01f0b101ec5609d69', //请填写计费后台所分配的key
    
    'dmapi' => '//api.xiaomaomi.tv/index/api/danmu',  //对接弹幕库
    
    'by_api' => '',//备用json接口多个请使用,号隔开！
    
    'token_key' => '',//留空不开启，需要开启防盗请到计费后台开启token认证 并填写后台所设置的秘钥 同时客户端加密传输url
    
    'theme' => '#165DFF',//播放器主题颜色
    
    'right_txt' => '仅供学习使用', //右键文本
    
    'right_link' => 'https://api.xiaomaomi.tv',//右键跳转链接
    
    'url_tips' => '当前url为空', 
);

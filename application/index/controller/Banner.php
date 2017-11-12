<?php

namespace app\index\controller;
use app\index\model\Banner as banners;
use  app\index\validate\Test;
use think\Loader;

class Banner
{
        public function getBanner($id)
        {
                $data=[
                 'name'=>'piaomiaohan',
                 'email'=>'123qq.com'
                ];
                $validate=Loader::validate('Test');
                $result=$validate->batch()->check($data);
                var_dump($result);
                var_dump($validate->getError());
                $data=banners::get($id);
                $code=12345;
                $message='success';
                $content=[
                 'code'=>$code,
                 'message'=>$message,
                 'data'=>$data
                ];
                return  json_encode($content);
        }
}
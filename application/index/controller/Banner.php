<?php

namespace app\index\controller;
use app\index\model\Banner as banners;
use think\Validate;

class Banner
{
        public function getBanner($id)
        {

                $data=[
                 'name'=>'piaomiaohan',
                 'email'=>'123@qq.com'
                ];
                $validate=new Validate([
                   'name'=>'require|max:20',
                   'email'=>'email'
                ]);
                $result=$validate->batch()->check($data);
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
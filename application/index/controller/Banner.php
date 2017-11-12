<?php

namespace app\index\controller;
use app\index\model\Banner as banners;

class Banner
{
	public function getBanner($id)
	{
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
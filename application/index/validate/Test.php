<?php

namespace app\index\validate;

use think\Validate;



class Test extends Validate
{

    protected $rules=[
     'name'=>'require|max:10',
      'email'=>'email'
    ];	
}
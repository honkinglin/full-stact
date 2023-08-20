<?php

namespace app\validate;

use think\facade\Request;
use think\Validate;
use think\Exception;

use app\exception\ParameterException;

class BaseValidate extends Validate
{
  public function goCheck()
  {
    // 获取 http 传入的参数
    // 对这些参数做校验
    $request = Request::instance();
    $params = $request->param();

    $result = $this->batch()->check($params);
    if (!$result) {
      $e = new ParameterException([
        'msg' => $this->error,
      ]);
      throw $e;
    } else {
      return true;
    }
  }
}

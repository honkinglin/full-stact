<?php

namespace app\exception;

use app\exception\BaseException;

class BannerMissException extends BaseException
{
  public $code = 404;
  public $msg = '请求的Banner不存在';
  public $errorCode = 40000;
}

<?php

declare(strict_types=1);

namespace think;

use think\facade\Request;

class UserAgent
{
    /**
     * 分析[UserAgent]
     * @param $string UserAgent 浏览器的UserAgent用户代理
     * @param $imageSize Image Size(16/24) 显示图片大小
     * @param $imagePath Image Path 图片路径
     * @param $imageExtension Image Extension 图片扩展名
     * @return userAgent\UserAgent UserAgent对象
     */
    public static function analyze($string = '', $imageSize = null, $imagePath = null, $imageExtension = null)
    {
        if (empty($string)) {
            $string = Request::header('User-Agent');
        }

        $class = new \think\userAgent\UserAgent();

        $imageSize === null || $class->imageSize = $imageSize;
        $imagePath === null || $class->imagePath = $imagePath;
        $imageExtension === null || $class->imageExtension = $imageExtension;

        $class->analyze($string);

        return $class;
    }
}

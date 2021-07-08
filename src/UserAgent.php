<?php

declare(strict_types=1);

namespace think;

use think\facade\Request;

class UserAgent
{
    /**
     * 分析信息
     * @param $string           UserAgent String
     * @param null $imageSize   Image Size(16 / 24)
     * @param null $imagePath   Image Path
     * @param null $imageExtension  Image Description
     * @return userAgent\UserAgent
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

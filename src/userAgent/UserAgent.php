<?php

declare(strict_types=1);

namespace think\userAgent;

class UserAgent
{
    private $_imagePath = '';
    private $_imageSize = 16;

    private $_data = [];

    public function __construct()
    {
        $this->_imagePath = dirname(dirname(dirname(__FILE__)));
    }
    public function __get($param)
    {
        $privateParam = '_' . $param;
        switch ($param) {
            case 'imagePath':
                $path = join(DIRECTORY_SEPARATOR, [$this->_imagePath, 'static', 'img', $this->_imageSize, DIRECTORY_SEPARATOR]);
                return $path;
                break;
            default:
                if (isset($this->$privateParam)) {
                    return $this->$privateParam;
                } elseif (isset($this->_data[$param])) {
                    return $this->_data[$param];
                }
                break;
        }
        return null;
    }
    public function __set($name, $value)
    {
        $trueName = '_' . $name;
        if (isset($this->$trueName)) {
            $this->$trueName = $value;
        }
    }
    private function _makeImage($dir, $code)
    {
        // 图片位置
        $img_file = $this->imagePath . $dir . '/' . $code . $this->imageExtension;
        $img_base64 = '';
        if (file_exists($img_file)) {
            // 图片路径
            $app_img_file = $img_file;
            // 取得图片的大小，类型等
            $img_info = getimagesize($app_img_file);
            // 图片是否可读权限
            $fp = fopen($app_img_file, 'r');
            if ($fp) {
                $filesize = filesize($app_img_file);
                $content = fread($fp, $filesize);
                // base64编码
                $file_content = chunk_split(base64_encode($content));
                // 判读图片类型
                switch ($img_info[2]) {
                    case 1:
                        $img_type = 'gif';
                        break;
                    case 2:
                        $img_type = 'jpg';
                        break;
                    case 3:
                        $img_type = 'png';
                        break;
                }
                // 合成图片的base64编码
                $img_base64 = 'data:image/' . $img_type . ';base64,' . $file_content;
            }
            fclose($fp);
        }
        return $img_base64;
    }

    private function _makePlatform()
    {

        $this->_data['platform'] = &$this->_data['device'];
        if ($this->_data['device']['title'] != '') {
            $this->_data['platform'] = &$this->_data['device'];
        } elseif ($this->_data['os']['title'] != '') {
            $this->_data['platform'] = &$this->_data['os'];
        } else {
            $this->_data['platform'] = [
                'link' => '#',
                'title' => 'Unknown',
                'code' => 'null',
                'dir' => 'browser',
                'type' => 'os',
                'image' => $this->_makeImage('browser', 'null'),
            ];
        }
    }
    public function analyze($string)
    {
        $this->_data['useragent'] = $string;
        $classList = array('device', 'os', 'browser');
        foreach ($classList as $value) {
            $class = '\\think\\userAgent\\detect\\' . ucfirst($value);
            $this->_data[$value] = call_user_func($class . '::analyze', $string);
            $this->_data[$value]['image'] = $this->_makeImage($value, $this->_data[$value]['code']);
        }
        // platform
        $this->_makePlatform();
    }
}

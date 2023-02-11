## thinkphp6.1+ 根据HTTP_REFERER获取：浏览器信息、操作系统、驱动器 的扩展包

### 环境

1. php >= 7.2.5
2. thinkphp >=6.1

# think-useragent

A User-agent analyze project.

## 安装

> composer require hulang/think-useragent

## Supported Browsers/Platforms

> Tested Browsers: Amazon Silk / Android Webkit / Avant Browser / Comodo Dragon / curl / Firefox / Google Chrome / Internet Explorer / Microsoft Edge / Links / Lynx / Maxthon / MxNitro / Opera / QQBrowser / Safari SRWare Iron / Teleca Q7 / UC Browser / Vivaldi / W3M / wget / Yandex.Browser and so on..

> OS: Android / Arch Linux / CentOS / Chrome OS / Debain / Fedora / FreeBSD / OSX / Red Hat / openSUSE / SymbianOS / Unix / Palm webOS / Windows 3.1 - 10 / Ubuntu / Linux and so on..

> Devices: Xiaomi / BlackBerry / Nexus / HTC / Huawei / Kindle / Lenovo / LG / Motorola / Nokia / OnePlus / PlayStation / Samsung / Sony Xperia / ZTE / Ubuntu / Windows Phone / Apple Family and so on.

## Example & API

### 后台

```
<?php
$useragent = \think\UserAgent::analyze();
?>
```

### 模板

```
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>UserAgent</title>
</head>

<body>
    <h1>Test UserAgent</h1>
    <p>UserAgent: <?php echo $useragent->useragent; ?></p>
    <p>Platform Type: <?php echo $useragent->platform['type'] ?>
    <p>Device: <img src="<?php echo $useragent->device['image'] ?>"/><?php echo $useragent->device['title'] ?>(Brand: <?php echo $useragent->device['brand'] ?>, Model: <?php echo $useragent->device['model'] ?>) </p>
    <p>OS: <img src="<?php echo $useragent->os['image'] ?>"/><?php echo $useragent->os['title'] ?> (Name = <?php echo $useragent->os['name'] ?>, Version = <?php echo $useragent->os['version'] ?>)</p>
    <p>Browser: <img src="<?php echo $useragent->browser['image'] ?>"/><?php echo $useragent->browser['title'] ?> (Name = <?php echo $useragent->browser['name'] ?>, Version = <?php echo $useragent->browser['version'] ?>)</p>
</body>
</html>
```

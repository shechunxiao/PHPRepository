<?php


namespace app\manual;

use app\interfaces\Base;

class GD implements Base
{
    public function index()
    {

        $this->createEmpty();
    }
    /**
     * imagecreatetruecolor //创建一张空白的
     * imagecolorallocate分配给这幅图片颜色
     * imagefill 给图片填充颜色
     * imagepng 如果不加图片地址，则是输出图片到浏览器，前提是加header
     * imagedestroy 销毁文件资源
     * imageline 划线
     * imagestring 水平地画一行字符串，而且不支持中文，所以尽量不要用
     * imagesx 图片的宽度
     * imagesy 图片的高度
     * imagecopyresampled //重新采样图片并重新绘制
     *
     */
    /**
     * 创建一张空白的图片
     */
    public function createEmpty()
    {
        $dir = dirname(dirname(__DIR__));
        $fileName = $dir.'/image/little.png';
        $pic = imagecreatetruecolor(400,600);
        $white = imagecolorallocate($pic, 255, 255, 255);
        $black = imagecolorallocate($pic, 0, 0, 0);
        $black2 = imagecolorallocatealpha($pic,0,0,0,0.2);
        $pick = imagecolorallocate($pic,212,36,98);
        imagefill($pic,0,0,$white);
        imageline($pic,0,0,400,600,$black);
        imageline($pic,0,600,400,0,$black);
        imagestring($pic,30,0,0,'imagestring',$pick);
        //处理上面的windows图,重新采集某个尺寸
        $little = imagecreatefrompng($fileName);
        $x = imagesx($little);
        $y = imagesy($little);
        $new = imagecreatetruecolor(50,50);
        imagecopyresampled($new,$little,0,0,50,50,50,50,50,50);
        imagecopy($pic,$new,175,125,0,0,50,50);
        //处理马图,直接缩放了
        $ma = imagecreatefromjpeg($dir.'/image/ma.jpeg');
        $new_ma = imagecreatetruecolor(50,50);
        imagecopyresized($new_ma,$ma,0,0,0,0,50,50,887,1024);
        imagecopy($pic,$new_ma,20,275,0,0,50,50);
        //上面两种比较麻烦，而且必须重新生成.imagecopy可以对原图素材裁剪,imagecopymerge可以对原图进行缩放并且合并到dst上
        imagecopy($pic,$little,175,425,60,60,50,50);
        imagecopymerge($pic,$new_ma,330,275,0,0,50,50,100);

        imagepng($pic,'pic.png');
        imagedestroy($little);
        imagedestroy($new);
        imagedestroy($pic);
    }
}
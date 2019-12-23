<?php


namespace app\manual;

use app\interfaces\Base;

class Directory implements Base
{

    public function index()
    {
        // TODO: Implement index() method.
        $this->dirMy();
    }

    public function dirMy()
    {
//        if (chdir('./dir')){
//            @mkdir('last2');
//        }
//        @mkdir('tss2');
//        $current = getcwd();
//        var_dump($current);
//        $dirObject = dir('./dir');
//        var_dump($dirObject->path);
//        var_dump($dirObject->read());
//        var_dump($dirObject->read());
//        var_dump($dirObject->read());
//        var_dump($dirObject->read());
//        var_dump($dirObject->read());
//        var_dump($dirObject->read());
//        var_dump($dirObject->handle);
//        var_dump($dirObject->rewind());
//        var_dump($dirObject->read());
//        var_dump($dirObject->handle);
//        $dirObject->close();
//        $handle = @opendir('./dir');
//        while (false != ($filename = readdir($handle))){
//            echo $filename;
//        }
//        closedir($handle);
//
//        var_dump(scandir('./dir'));
//        var_dump(basename('/dir/test.txt','.txt'));
//        var_dump(basename('/dir/test.txt'));
//        var_dump(dirname('/dir/test.txt'));
//        var_dump(file_exists('file.txt'));
        /**
         *  file_put_contents
         *      int file_put_contents( string $filename, mixed $data[, int $flags = 0[, resource $context]] )   和依次调用 fopen()，fwrite() 以及 fclose() 功能一样。
         *      返回值:该函数将返回写入到文件内数据的字节数，失败时返回FALSE
         *      filename
                    要被写入数据的文件名。
                data
                    要写入的数据。类型可以是 string，array 或者是 stream 资源（如上面所说的那样）。
                    如果 data 指定为 stream 资源，这里 stream 中所保存的缓存数据将被写入到指定文件中，这种用法就相似于使用 stream_copy_to_stream() 函数。
                    参数 data 可以是数组（但不能为多维数组），这就相当于 file_put_contents($filename, join('', $array))。
                flags
                    flags 的值可以是以下 flag 使用 OR (|) 运算符进行的组合。
                    Available flags
                    Flag
                    描述
                    FILE_USE_INCLUDE_PATH  在 include 目录里搜索 filename。更多信息可参见 include_path。
                    FILE_APPEND  如果文件 filename 已经存在，追加数据而不是覆盖。
                    LOCK_EX  在写入时获得一个独占锁。
                context
                一个 context 资源。
         */
//        $filename = 'file.txt';
//        $content = "张三、李四\r\n";
//        $num = file_put_contents($filename,$content,FILE_APPEND|LOCK_EX);
//        var_dump($num);
        /**
         *  string file_get_contents( string $filename[, bool $use_include_path = false[, resource $context[, int $offset = -1[, int $maxlen]]]] )
         *      该函数和file函数类似,只是file_get_contents返回的是一个字符串,file返回的是数组
         *      filename
                    要读取的文件的名称。
         *      offset和maxlen是偏移量和字节数，UTF8编码汉字是3个字节

         */
//        $filename = 'file.txt';
//        $content = file_get_contents($filename,false,null,0,100);
//        var_dump($content);
        /**
         *  array file( string $filename[, int $flags = 0[, resource $context]] )
         *      返回值:每一个项都是一行数据
         *      filename
                    文件的路径。
         *      flags
                    可选参数 flags 可以是以下一个或多个常量：
                    FILE_USE_INCLUDE_PATH 在 include_path 中查找文件。
         *          FILE_IGNORE_NEW_LINES 在数组每个元素的末尾不要添加换行符
         *          FILE_SKIP_EMPTY_LINES 跳过空行
         *
         */
//        $filename = 'file.txt';
//        $arr = file($filename,FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
//        var_dump($arr);

        /**
         * int fileatime( string $filename) 取得文件的上次访问时间
         *      返回文件上次被访问的时间， 或者在失败时返回 FALSE。时间以 Unix 时间戳的方式返回。
         */
//        $filename = 'file.txt';
//        $timestamp = fileatime($filename);
//        var_dump(date('Y-m-d H:i:s',$timestamp));
//        $filename = 'file.txt';
//        $timestamp = filectime($filename);
//        var_dump(date('Y-m-d H:i:s',$timestamp));
//        $inode = fileinode('file.txt');
//        var_dump($inode);
//        $owner = fileowner('file.txt');
//        var_dump($owner);
//        $auth = fileperms('file.txt');
//        var_dump($auth);
//        $size = filesize('file.txt');
//        var_dump($size);
//        $type = filetype('file.txt'); //返回文件的类型。 可能的值有 fifo，char，dir，block，link，file 和 unknown。
//        var_dump($type);
//        $stat = stat('file.txt');
//        var_dump($stat);
        /**
         * bool rmdir( string $dirname[, resource $context] )
         *  删除目录
         */
//        $rm = @rmdir('rm');
//        var_dump($rm);
        /**
         *  bool rename( string $oldname, string $newname[, resource $context] )
         *      成功时返回TRUE，或者在失败时返回FALSE
         *      重命名一个文件或目录
         *      oldname 用于 oldname 中的封装协议必须和用于 newname 中的相匹配。
         *      newname 新的名字。
         */
//        $bo = @rename('my.txt','file.txt');
//        var_dump($bo);
        /**
         * string realpath( string $path) 返回规范化的绝对路径名
         */
//        var_dump(realpath('file.txt'));
        /**
         * int readfile( string $filename[, bool $use_include_path = false[, resource $context]] )
         *      读取文件并写入到输出缓冲
         *      返回从文件中读入的字节数。如果出错返回 FALSE 并且除非是以 @readfile() 形式调用，否则会显示错误信息。
         */
//        readfile('file.txt');
//        $file = 'file.txt';
//        header('Content-Description: File Transfer');
//        header('Content-Type: application/octet-stream');
//        header('Content-Disposition: attachment; filename="'.basename($file).'"');
//        header('Expires: 0');
//        header('Cache-Control: must-revalidate');
//        header('Pragma: public');
//        header('Content-Length: ' . filesize($file));
//        readfile($file);
//        exit;
        /**
         *  pathinfo( string $path[, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME] )
         *  返回文件路径的信息
         *  path
                要解析的路径。
                options
                如果指定了，将会返回指定元素；它们包括：PATHINFO_DIRNAME，PATHINFO_BASENAME 和 PATHINFO_EXTENSION 或 PATHINFO_FILENAME。
                如果没有指定 options 默认是返回全部的单元。
         */
//        $pathInfo = pathinfo('file.txt',PATHINFO_FILENAME);
//        var_dump($pathInfo);
        /**
         *  bool mkdir( string $pathname[, int $mode = 0777[, bool $recursive = false[, resource $context]]] )
         *      尝试新建一个由 pathname 指定的目录。
         *      mode
                    默认的 mode 是 0777，意味着最大可能的访问权。
         */
//        if (!is_dir('upload/test')){
//            mkdir('upload/test');
//        }
        /**
         *  bool is_readable( string $filename) 判断给定文件名是否存在并且可读。
         *  如果由 filename 指定的文件或目录存在并且可读则返回 TRUE，否则返回 FALSE。
         */
//        var_dump(is_readable('file.txt'));
        /**
         *  bool is_writable( string $filename) 如果文件存在并且可写则返回 TRUE。filename 参数可以是一个允许进行是否可写检查的目录名。
         *      如果文件 filename 存在并且可写则返回 TRUE。
         */
//        var_dump(is_writeable('file.txt'));
        /**
         * bool is_file( string $filename)  判断给定文件名是否为一个正常的文件。
         */
//        var_dump(is_file('file.txt'));
        /**
         * bool is_dir( string $filename) 判断给定文件名是否是一个目录
         *  如果文件名存在并且为目录则返回 TRUE
         */
//        var_dump(is_dir('./'));
        /**
         * array_map
         * 方法一:如果回调函数存在
         * 方法二:如果回调函数不存在
         */
//        $a = [1,2,3];
//        $b= [4,5,6];
//        $d = [7,8,9,10,11];
//        $c = array_map(function($n1,$n2,$n3){
//            return $n1.'-'.$n2.'-'.$n3;
//        },$a,$b,$d);
//        var_dump($c);
        /**
         * 方法一结果
         * array (size=5)
            0 => string '1-4-7' (length=5)
            1 => string '2-5-8' (length=5)
            2 => string '3-6-9' (length=5)
            3 => string '--10' (length=4)
            4 => string '--11' (length=4)
         */
//         $c = array_map(null,$a,$b,$d);
//         var_dump($c);
        /**
         * 方法二结果
         *  array (size=5)
                0 =>
                    array (size=3)
                    0 => int 1
                    1 => int 4
                    2 => int 7
                1 =>
                    array (size=3)
                    0 => int 2
                    1 => int 5
                    2 => int 8
                2 =>
                    array (size=3)
                    0 => int 3
                    1 => int 6
                    2 => int 9
                3 =>
                    array (size=3)
                    0 => null
                    1 => null
                    2 => int 10
                4 =>
                    array (size=3)
                    0 => null
                    1 => null
                    2 => int 11
         */

        /**
         *  array glob( string $pattern[, int $flags = 0] )
         *  flags
                有效标记有：
                ◦ GLOB_MARK - 在每个返回的项目中加一个斜线
                ◦ GLOB_NOSORT - 按照文件在目录中出现的原始顺序返回（不排序）
                ◦ GLOB_NOCHECK - 如果没有文件匹配则返回用于搜索的模式
                ◦ GLOB_NOESCAPE - 反斜线不转义元字符
                ◦ GLOB_BRACE - 扩充 {a,b,c} 来匹配 'a'，'b' 或 'c'
                ◦ GLOB_ONLYDIR - 仅返回与模式匹配的目录项
                ◦ GLOB_ERR - 停止并读取错误信息（比如说不可读的目录），默认的情况下忽略所有错误
         */
//        $files = glob('./app/*.php',GLOB_NOESCAPE);
//        $files = array_map('basename',$files);
//        var_dump($files);
        /**
         * 文件操作
         *  1.fopen
         *      resource fopen( string $filename, string $mode[, bool $use_include_path = false[, resource $context]] )
         *      mode
         *          "r" （只读方式打开，将文件指针指向文件头）
                    "r+" （读写方式打开，将文件指针指向文件头）
                    "w" （写入方式打开，清除文件内容，如果文件不存在则尝试创建之）
                    "w+" （读写方式打开，清除文件内容，如果文件不存在则尝试创建之）
                    "a" （写入方式打开，将文件指针指向文件末尾进行写入，如果文件不存在则尝试创建之）
                    "a+" （读写方式打开，通过将文件指针指向文件末尾进行写入来保存文件内容）
                    "x" （创建一个新的文件并以写入方式打开，如果文件已存在则返回 FALSE 和一个错误）
                    "x+" （创建一个新的文件并以读写方式打开，如果文件已存在则返回 FALSE 和一个错误）
         */
//        $handle = fopen('file.txt','r+');
////        $int = fwrite($handle,'放假可视对讲洛克菲勒跨境电商考虑');
////        var_dump($int);
////        $content = fread($handle,30);
////        var_dump($content);
//        while (!feof($handle)){
//            var_dump(fgets($handle));
//        }
//        fclose($handle);




    }
}
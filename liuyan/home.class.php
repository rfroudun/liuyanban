<?php
//创建一个类，用来实现留言板效果
//继承tishi 这个类，方便调用提示功能
class home extends tishi{
//    定义属性，用来存着数据库的值
    private $data;
//    构造方法：实例化类的时候就自动加载数据库
    public function __construct(){
//        把数据库的值返给$data这个变量，便于后期调用
        $this->data= include "./data.php";
    }

//    显示
//    创建方法：用来实现留言的显示功能
    public function index(){
//    加载留言显示的页面
        include "./tpl/index.php";
    }

//    添加
//    创建方法：用来收集用户输入的留言内容
    public function form(){
//        判断：当用户点击了 添加留言 按钮的时候才会执行大括号里面的代码
        if(IS_POST){
//        把用户输入的留言向数组的末尾追加
            $this->data[]=$_POST;
//        把用户输入的留言存入数据库
            $this->todata();
//         提示用户提交成功并且返回到显示页面
            $this->ts("留言添加成功","index.php");
        }
//        加载留言框内容
        include "./tpl/form.php";
    }

//    删除
//    创建方法：用来实现删除留言的功能
    public function del(){
//        删除用户点击的相对应的留言
        unset($this->data[$_GET["id"]]);
//        把删除后的剩下的内容存进数据库
        $this->todata();
//        提示用户删除成功，并且返回index.php页面
        $this->ts("删除成功","index.php");
    }

//    编辑
//    创建方法：用来实现留言的修改功能
    public function bianji(){
//        判断：如果用户点击了 修改留言 按钮就会执行大括号里面的代码
        if(IS_POST){
//            修改用户点击的相应的留言，被修改的内容由$_PODT来返回
            $this->data[$_GET["id"]]=$_POST;
//            把修改的内容存进数据库
            $this->todata();
//            提示用户修改成功，并且返回到index.php这个页面
            $this->ts("修改成功","index.php");
        }
//        加载编辑的内容
        include "./tpl/bianji.php";
    }

//    创建方法：用来把数据存入数据库
    public function todata(){
//        把数据存入数据库
        file_put_contents("./data.php","<?php return " . var_export($this->data,true) . ";");
    }

}

?>
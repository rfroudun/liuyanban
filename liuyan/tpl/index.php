<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container" style="width: 800px;">

    <a href="?a=form">添加留言</a>
    <hr>
    <table class="table table-condensed">
        <tr>
            <td>楼层</td>
            <td>ID</td>
            <td>内容</td>
            <td>操作</td>
        </tr>
<!--    遍历数组，获得里面所有的键名和键值-->
    <?php foreach($this->data as $k=>$v): ?>
            <tr>
                <td><?php echo $k?></td>
                <td><?php echo $v["nickname"]?></td>
                <td><?php echo $v["content"]?></td>
                <td>
                    <a href="?a=del&id=<?php echo $k?>" class="btn btn-info btn-xs">删除</a>
                    <a href="?a=bianji&id=<?php echo $k?>" class="btn btn-danger btn-xs">修改</a>
                </td>
            </tr>
    <?php endforeach ?>
    </table>

</div>

</body>
</html


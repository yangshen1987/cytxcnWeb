<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatiable" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="/mainWeb/Public/js/jquery-2.1.1.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/mainWeb/Public/js/bootstrap.min.js"></script>
    <style type="text/css">
        .title{margin:10px;}
    </style>
</head>
<body>
    <div class="title">
        <a class="btn btn-default" href="<?php echo U('Admin/Access/add_role');?>" >添加角色</a>
    </div>
    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>描述</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                        <td><?php echo ($v['id']); ?></td>
                        <td><?php echo ($v['name']); ?></td>
                        <td><?php echo ($v['remark']); ?></td>
                        <td>
                            <a href="<?php echo U('Admin/Access/access',array('id'=>$v['id']));?>">权限配置</a>
                            <a href="<?php echo U('Admin/Access/del_role',array('id'=>$v['id']));?>">删除</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
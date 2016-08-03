<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="/mainWeb/Public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="/mainWeb/Public/js/bootstrap.min.js"></script>
    <style type="text/css">
        .title{
            border-bottom: 1px dotted #ccc;
            height:auto;
            text-align: center;
            font-weight: bolder;
            font-size: 21px;
            color: #000;
            padding: 5px;
            margin-bottom:5px; 
        }
        .control-label{
            padding: 7px 2px;
        }
    </style>
</head>
<body>
    <div class="title">添加用户</div>
    <div class="container-fluid">
        <form class="form-horizontal" method="post" action="<?php echo U('Admin/Access/do_user');?>">
            <div class="form-group">
                <label for="inputEmail3" class="col-md-1 control-label">名称:</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="name" value="<?php echo ($data['name']); ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-md-1 control-label">密码:</label>
                <div class="col-md-3">
                   <input type="text" class="form-control" name="passwd" disabled="disabled">

                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-md-1 control-label">角色:</label>
                <div class="col-md-3">
                    <select class="form-control" name="role_id">
                        <?php if(is_array($role)): foreach($role as $key=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php if($v['id'] == $role_id): ?>selected="selected"<?php endif; ?>><?php echo ($v['name']); ?></option><?php endforeach; endif; ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-1 col-md-3">
                    <input type="hidden" name="user_id" value="<?php echo ($data['id']); ?>">
                    <button type="submit" class="btn btn-default">保存</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3 col-md-offset-9">
        <form action="" method="get">
          <div class="input-group">
            <input class="form-control" name="keyword" type="text" value="" placeholder="角色名"/>
            <span class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="center w10p">ID</th>
          <th class="center w50p">角色名称</th>
          <th class="center w15p">状态</th>
          <th class="center">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php if($roles && is_object($roles)) {
        foreach ($roles as $role) {?>
        <tr class="gradeX">
          <td class="center"><?php echo $role->roleId;?></td>
          <td class="center"><?php echo $role->name;?></td>
          <td class="center"><?php echo $role->getStatus();?></td>
          <td class="center">
            <a name="edit" data-link="" ><i class="glyphicon glyphicon-pencil"> </i>修改</a>
            <a name="privilege" data-link="" ><i class="glyphicon glyphicon-lock"> </i>权限</a>
            <a name="account" data-link="" ><i class="glyphicon glyphicon-user"> </i>成员</a>
            <?php if($role->status == 0) { ?>
                <a name="remove" data-link="" ><i class="glyphicon glyphicon-remove"> </i>屏蔽</a>
            <?php }else { ?>
                <a name="renew" data-link="" ><i class="glyphicon glyphicon-ok"> </i>恢复</a>
            <?php }?>
          </td>
        </tr>
        <?php 
          }
        }?>
      </tbody>
    </table>
  </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-md-12 m-pagination" style="margin: 0 auto;" id="paginator">
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    var pageData = [];
    pageData.push(<?php echo $pagination->pageData();?>);
    Common.paginator("#paginator", pageData);
</script>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3 col-md-offset-9">
        <form action="" method="get">
          <div class="input-group">
            <input class="form-control" name="keyword" type="text" value="" placeholder="用户名"/>
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
          <th class="center w15p">用户名</th>
          <th class="center w15p">姓名</th>
          <th class="center w20p">邮箱</th>
          <th class="center w15p">手机</th>
          <th class="center">状态</th>
          <th class="center">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php if($accounts && is_object($accounts)) {
        foreach ($accounts as $account) {?>
        <tr class="gradeX">
          <td class="center"><?php echo $account->accountId;?></td>
          <td class="center"><?php echo $account->name;?></td>
          <td class="center"><?php echo $account->givenName;?></td>
          <td class="center"><?php echo $account->email;?></td>
          <td class="center"><?php echo $account->mobile;?></td>
          <td class="center"><?php echo $account->getStatus();?></td>
          <td class="center">
            <a name="edit" data-link="" ><i class="glyphicon glyphicon-pencil"> </i>修改</a>
            <?php if($account->status == 0) { ?>
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
      <div class="col-md-12 center">
      </div>
    </div>
  </div>
</div>

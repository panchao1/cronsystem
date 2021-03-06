<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
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
      <?php if($account && is_object($account)) { ?>
        <tr class="gradeX">
          <td class="center"><?php echo $account->accountId;?></td>
          <td class="center"><?php echo $account->name;?></td>
          <td class="center"><?php echo $account->givenName;?></td>
          <td class="center"><?php echo $account->email;?></td>
          <td class="center"><?php echo $account->mobile;?></td>
          <td class="center"><?php echo $account->getStatus();?></td>
          <td class="center">
            <a name="edit" data-link="" ><i class="glyphicon glyphicon-pencil"> </i>修改</a>
          </td>
        </tr>
        <?php 
        }?>
      </tbody>
    </table>
  </div>
  <div class="panel-footer">
    <div class="row">
    </div>
  </div>
</div>

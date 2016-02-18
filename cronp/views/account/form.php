<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('account/save')?>">
      <div class="form-group">
        <label class="col-md-2 control-label">姓名</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="given_name" value="" placeholder="输入姓名"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">用户名</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" placeholder="输入用户名"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">密码</label>
        <div class="col-md-6">
          <input class="form-control" type="password" name="password" value="" placeholder="输入密码"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">电子邮件</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="email" value="" placeholder="输入邮箱"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">手机号码</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="mobile" value="" placeholder="输入手机号码"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">电话号码</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="phone" value="" placeholder="输入电话号码"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">角色（*按ctrl多选）</label>
        <div class="col-md-6">
          <select class="form-control" id="role_ids" name="role_ids[]" multiple="multiple" size="8">
            <?php if($roles && is_object($roles)) {
                foreach ($roles as $role) {?>
                <option value="<?php echo $role->roleId;?>"><?php echo $role->name;?></option>
                <?php
              }
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-actions">
        <div class="col-md-offset-2 col-md-10">
          <input type="button" value="保存" class="btn btn-success" onclick="Form.ajaxSubmit(this.form)" />
        </div>
      </div>
  </form>
  </div>
</div>
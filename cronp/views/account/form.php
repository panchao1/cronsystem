<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('account/save')?>">
      <div class="form-group">
        <label class="col-md-2 control-label">姓名</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="given_name" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">用户名</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">密码</label>
        <div class="col-md-6">
          <input class="form-control" type="password" name="password" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">电子邮件</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="email" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">手机号码</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="mobile" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">电话号码</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="phone" value="" />
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
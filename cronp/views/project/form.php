<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('project/save')?>">
      <input type="hidden" name="account_id" value="" />
      <div class="form-group">
        <label class="col-md-2 control-label">项目名称</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">项目描述</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="describe" value="" />
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
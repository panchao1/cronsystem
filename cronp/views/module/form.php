<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('module/save')?>">
      <div class="form-group">
        <label class="col-md-2 control-label">名称</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" placeholder="输入名称"/>
        </div>
      </div>
       <div class="form-group">
        <label class="col-md-2 control-label">模块</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="module" value="" placeholder="输入模块"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">图标</label>
        <div class="col-md-6">
          <input class="icon-picker" type="text" name="icon" value="" placeholder="选择图标"/>
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
<script type="text/javascript">
  $(".icon-picker").iconPicker();
</script>

<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('privilege/save')?>">
      <div class="form-group">
        <label class="col-md-2 control-label">权限名</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" placeholder="输入权限名称"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">类型</label>
        <div class="col-md-6">
          <select class="form-control" name="type">
            <option value="navigator">导航</option>
            <option value="menu">菜单</option>
            <option value="controller">控制器</option>
          </select>
        </div>
      </div>
      <div class="form-group hidden" id="parent_id">
        <label class="col-md-2 control-label">上级</label>
        <div class="col-md-6">
          <select class="form-control" name="parent_id">
            <option value="0">请选择</option>
            <?php if($privileges && is_object($privileges)) {
              foreach ($privileges as $privilege) {
                if($privilege->type == 'navigator') {
                    echo "<option value='$privilege->privilegeId'>$privilege->name</option>";
                }else if($privilege->type == 'menu'){
                    echo "<option value='$privilege->privilegeId'>&nbsp&nbsp&nbsp&nbsp$privilege->name</option>";
                }
              }
            }?>
          </select>
        </div>
      </div>
      <div class="form-group hidden" id="controller">
        <label class="col-md-2 control-label">控制器</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="controller" value="" placeholder="输入控制器名"/>
        </div>
      </div>
      <div class="form-group hidden" id="action">
        <label class="col-md-2 control-label">动作</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="action" value="" placeholder="输入动作名"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">图标</label>
        <div class="col-md-6">
          <input class="icon-picker" type="text" name="icon" value="" placeholder="选择图标"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">是否显示</label>
        <div class="col-md-6">
          <div class="radio-inline">
            <label>
              <input type="radio" name="is_display" value="0" />不显示
            </label>
          </div>
          <div class="radio-inline">
            <label>
              <input type="radio" name="is_display" value="1" checked="checked" />显示
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">排序(*数字小靠前)</label>
        <div class="col-md-6">
          <input type="text" class="form-control" name="sequence" value="" placeholder="数字小靠前"/>
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
$(document).ready(function() {

    $("select[name='type']").change(function() {
        var type = $(this).children('option:selected').val();
        $("#parent_id").addClass("hidden");
        $("#controller").addClass("hidden");
        $("#action").addClass("hidden");
        if(type == 'navigator') {
        }else if(type == 'menu') {
           $("#parent_id").removeClass("hidden");
        }else if(type == 'controller') {
            $("#parent_id").removeClass("hidden");
            $("#controller").removeClass("hidden");
            $("#action").removeClass("hidden");
        }
    });
});

</script>

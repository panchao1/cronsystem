<div class="panel panel-default">
  <div class="panel-body">
    <form  class="form-horizontal" method="post" action="<?php echo URL::site('task/save')?>">
      <div class="form-group">
        <label class="col-md-2 control-label">项目</label>
        <div class="col-md-2">
          <select class="form-control" name="project_id" onchange="">
            <option value="0">请选择</option>
            <?php if($projects && is_object($projects)) {
              foreach ($projects as $project) {?>
            <option value="<?php echo $project->projectId;?>"><?php echo $project->name;?></option>
            <?php }}?>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">名称</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="name" value="" placeholder="输入任务名称"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">描述</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="describe" value="" placeholder="输入任务描述"/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">策略</label>
        <div class="col-md-6">
        <table class="table table-bordered table-hover">
         <thead>
          <tr>
            <th class="center">时间</th>
            <th class="center">通配符</th>
            <th class="center">值</th>
          </tr>
         </thead>
         <tbody>
         <tr>
           <td class="center">分</td>
           <td>
             <select class="form-control" name="minute_wildcard" onchange="">
              <option value="">*</option>
              <option value="">/</option>
              <option value="">-</option>
              <option value="">,</option>
            </select>
          </td>
           <td>
            <input class="form-control" type="text" name="describe" value="" />
           </td>
         </tr>
         <tr>
           <td class="center">时</td>
           <td>
             <select class="form-control" name="hour_wildcard" onchange="">
              <option value="">*</option>
              <option value="">/</option>
              <option value="">-</option>
              <option value="">,</option>
            </select>
           </td>
           <td>
             <input class="form-control" type="text" name="describe" value="" />
           </td>
         </tr>
         <tr>
           <td class="center">日</td>
           <td>
             <select class="form-control" name="day_wildcard" onchange="">
              <option value="">*</option>
              <option value="">/</option>
              <option value="">-</option>
              <option value="">,</option>
            </select>
           </td>
           <td>
            <input class="form-control" type="text" name="describe" value="" />
           </td>
         </tr>
         <tr>
           <td class="center">月</td>
           <td>
             <select class="form-control" name="mouth_wildcard" onchange="">
              <option value="">*</option>
              <option value="">/</option>
              <option value="">-</option>
              <option value="">,</option>
            </select>
           </td>
           <td>
             <input class="form-control" type="text" name="describe" value="" />
           </td>
         </tr>
         <tr>
           <td class="center">周</td>
           <td>
             <select class="form-control" name="week_wildcard" onchange="">
              <option value="">*</option>
              <option value="">/</option>
              <option value="">-</option>
              <option value="">,</option>
            </select>
           </td>
           <td>
             <input class="form-control" type="text" name="describe" value="" />
           </td>
         </tr>
         <tr>
           <td colspan="3" style="color: red">通配符含义：“*” 代表每的意思；“/” 代表每隔一段时间；“-” 代表连续一段时间；“，”代表多个时间段；</td>
         </tr>
         </tbody>
        </table>
        <label class="col-md-2 "></label>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">类型</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="email" value="" />
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-2 control-label">url地址</label>
        <div class="col-md-6">
          <input class="form-control" type="text" name="mobile" value="" />
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
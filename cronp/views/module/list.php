<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3 col-md-offset-9">
        
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <th class="center w10p">ID</th>
          <th class="center w15p">名称</th>
          <th class="center w15p">模块</th>
          <th class="center w15p">创建时间</th>
          <th class="center W10p">状态</th>
          <th class="center">操作</th>
        </tr>
      </thead>
      <tbody>
      <?php if($modules && is_object($modules)) {
        foreach ($modules as $module) {?>
        <tr class="gradeX">
          <td class="center"><?php echo $module->moduleId;?></td>
          <td class="center"><?php echo $module->name;?></td>
          <td class="center"><?php echo $module->module;?></td>
          <td class="center"><?php echo date('Y-m-d',$module->createTime);?></td>
          <td class="center"><?php echo $module->getStatus();?></td>
          <td class="center">
            <a name="edit" data-link="" ><i class="glyphicon glyphicon-pencil"> </i>修改</a>
            <?php if($module->status == 0) { ?>
                <a name="remove" data-link="" ><i class="glyphicon glyphicon-remove"> </i>删除</a>
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
      <div class="col-md-12" id="paginator">
      </div>
    </div>
  </div>
</div>
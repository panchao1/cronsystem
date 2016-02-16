<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <div class="col-md-3 col-md-offset-9">
        <form action="" method="get">
          <div class="input-group">
            <input class="form-control" name="keyword" type="text" value="" placeholder="项目名称"/>
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
          <th class="center w8p">ID</th>
          <th class="center w25p">名称</th>
          <th class="center w45p">描述</th>
          <th class="center w10p">状态</th>
          <th class="center">操作</th>
        </tr>
      </thead>
      <tbody>
       <?php if($projects && is_object($projects)) {
        foreach ($projects as $project) {?>
        <tr class="gradeX">
          <td class="center"><?php echo $project->projectId;?></td>
          <td class="center"><?php echo $project->name;?></td>
          <td class="center"><?php echo $project->describe;?></td>
          <td class="center"><?php echo $project->getStatus();?></td>
          <td class="center">
            <a name="edit" data-link="" ><i class="glyphicon glyphicon-pencil"> </i>修改</a>
            <a name="remove" data-link="" ><i class="glyphicon glyphicon-remove"> </i>删除</a>
          </td>
        </tr>
        <?php 
          }
        }?>
      </tbody>
    </table>
  </div>
  <div class="panel-footer">
    <div class="row" >
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
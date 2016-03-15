<div class="panel-body">
  <?php if($navigators && is_object($navigators)) {
    foreach ($navigators as $navigator) { ?>
      <div data-value="1">
  <h4><span class="label label-default"><?php echo $navigator->name;?></span> <span class="small"><a href="">改</a> | <a onclick="Common.confirm('确定删除这条记录吗？', '/privilege/delete?privilege_id=<?php echo $navigator->privilegeId?>');">删</a></span></h4>
    <?php if($menus && is_object($menus)) {
      foreach ($menus as $menu) { 
        if($navigator->privilegeId == $menu->parentId) {
        ?>
      <ul class="list-group inline-group w240">
        <li class="list-group-item"><strong><?php echo $menu->name;?></strong> <span class="pull-right"><a href="/privilege/edit?privilege_id=2">改</a> | <a onclick="Common.confirm('确定删除这条记录吗？', '/privilege/delete?privilege_id=2');">删</a></span></li>
        <?php if($controllers && is_object($controllers)) {
          foreach ($controllers as $controller) {
            if($menu->privilegeId == $controller->parentId) { ?>
                <li class="list-group-item"><?php echo $controller->name;?> <span class="pull-right"><a href="/privilege/edit?privilege_id=4">改</a> | <a onclick="Common.confirm('确定删除这条记录吗？', '/privilege/delete?privilege_id=4');">删</a></span></li>
        <?php }
          }
        }?>
      </ul>
      <?php } } 
    } ?>
  </div>
    <?php
    } } ?>
</div>
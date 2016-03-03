<div class="panel panel-default">
  <div class="panel-body">
    <div class="row-flow">
      <div class="w100p" id="PrivilegeTree"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
var data = [];
<?php 
if($privileges && is_object($privileges)) {
  foreach ($privileges as $privilege) {
      echo "data.push({'id' : '$privilege->privilegeId', 'name' : '$privilege->name', 'value' : '', 'parent' : '$privilege->parentId',  'operate': ''});";
  }
}
?>
var privilegeTree = new Tree('PrivilegeTree', data);
privilegeTree.display(1);
</script>


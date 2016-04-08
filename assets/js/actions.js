$(document).ready(function(){
  $("input[name=selecionar_todos]").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
  });
});

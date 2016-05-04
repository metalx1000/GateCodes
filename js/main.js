$(document).ready(function(){
  updateList();
  $("#filter").on("input",filter);
});

function updateList(){
  $.get("getList.php",function(data){
    data = JSON.parse(data);
    data.forEach(function(i){
      $("#main").append('<div class="well items"><h3>'+i.neighborhood+'</h3><div>'+i.code+'</div></div>');
    });
  });
}

function filter(){
  $(".items").each(function(i, item){  
    var input = $("#filter").val().toLowerCase();
    var text = $(this).html().toLowerCase();
      if(text.indexOf(input)>=0){
        $(this).show();
      }else{
        $(this).hide();
      }
  });
}

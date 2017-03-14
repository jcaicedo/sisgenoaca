$(".btn-floating").click(function(e){

var action = $(this).data('action');
switch(action){
  case "universal-access":
$('#myModal').modal('show')
  break;

  case "invert-colors":
console.log('2');
  break;

  case "size-minus":
console.log('3');
  break;

  case "size-plus":
  console.log('4');
  break;

}

});

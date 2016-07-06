function myFunction() {
console.log("API block active");

}

function load(operation) {
if (operation == "createT") {
  codegenrator(false);
}
}


function myFunction1(boxNo) {
  // on click this function reload the given URL
  //window.location.href = document.URL;
  $("#box-element").fadeOut("slow");
  $("#box-element").hide()
  $("#box-element" + boxNo).fadeIn("slow");
  $("#box-element" + boxNo).show()
}
$(window).load(function() {
  // Animate loader off screen
  $(".se-pre-con").fadeOut("slow");
});


function reload() {
window.location.reload();
}
function onlyint(value) {
  var reg = /^\d+$/;
  if (reg.test(value)) {
      return true;
  } else {
    $("#notification").show();
    document.getElementById("notification").innerHTML = "Numbers Only";
    return false;
  }
}



function codegenrator(test) {
        $("#checklist").contents().remove();
        var textbox = document.getElementById("usernametext1");

        var value = textbox.value;
        test = onlyint(value);
        if (test == true){
          $("#notification").hide();
          for(i=0;i<value; i ++){
                $('#footer').hide();
                $("#checklist").append('<br><div class="input-group"><input type="text" class="form-control"><span class="input-group-btn"><button class="btn btn-default" type="button" id="button'+(i+1)+'" onclick=setButtonColor('+(i+1)+',"button") >Button</button><button class="btn btn-default" type="button" id="checkbox'+(i+1)+'" onclick=setButtonColor('+(i+1)+',"checkbox")>Checkbox</button><button class="btn btn-default" type="button" id="textbox'+(i+1)+'" onclick=setButtonColor('+(i+1)+',"textbox")>TextBox</button></span></div>');
         document.getElementById("button-click1").setAttribute( "onClick", "javascript:myFunction();")
         }

        }
        else {
          document.getElementById("notification").innerHTML = "Numbers Only";
        }
}


var test = false;
$(document).ready(function(){
    $('#usernametext1').keypress(function(e){
      if(e.charCode!='13'){
        test = onlyint(String.fromCharCode(e.which));    
      }
      if(e.charCode=='13'){
      codegenrator(test)
      }
    });
});

function setButtonColor(number, type) {
  var property = "#" + type + number
  $("#button" + number).css({'color':'black', "background-color":"white"});
  $("#checkbox" + number).css({'color':'black', "background-color":"white"});
  $("#textbox" + number).css({'color':'black', "background-color":"white"});
  
  $(property).css('color', 'white');
  $(property).css('background-color', 'green');

}



$(document).ready(function(){
    $('#usernametext2').keypress(function(e){
      if(e.keyCode==13)
      $("input[value='Delete']").click();
    });
});
$(document).ready(function(){
    $('#usernametext3').keypress(function(e){
      if(e.keyCode==13)
      $("input[value='Deactivate']").click();
    });
});

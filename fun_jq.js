$(document).ready(function() {

  $("#form").submit(function() {
    $.ajax({
      type: "POST",
      url: "mail.php",
      data: $(this).serialize()
    }).done(function() {
      $(this).find("input").val("");
      alert("Заявка отправлена!");
      $("#form").trigger("reset").delay(1000);
           
      
    });
    return false;
  });


  $("#form").submit(function() {
    setTimeout(function(){

    function tt(){
   var i = 1;
   var timerId = setInterval(function() {
   $('#k2').trigger("click");
   removNewChild1(1,21);

  if (i == 2) clearInterval(timerId);
  i++;
  }, 300);
  }
  tt();
  }, 50);

  });

  $('#k1').click(function () {
    if ($("#h").is(":hidden")) {
    $("#h").slideDown("slow");
     $("#h").attr("display", "block");
     $("#k2").show();
     $("#k2").attr("display", "block");
     for(var i =201; i<212; i++){
             
     $("#tr"+i).attr("required", "required");}
             
      }

     else{

      $("#h1").slideDown("slow");
      $("#h1").attr("display", "block");
      $("#k1").hide();
      $("#k1").attr("display", "none");
      for(var i =301; i<312; i++){
       $("#tr"+i).attr("required", "required");}

           }

    });

      $('#k2').click(function () {
      if ($("#h1").is(":visible")) {
      $("#h1").slideUp();
      $("#h1").attr("display", "none");
       $("#k1").show();
       for(var i =301; i<312; i++){
             
       $("#tr"+i).removeAttr("required");
       if  (i==303) continue ;
            $("#tr"+i).val(""); 
         }
        $("#tr303").val("");
        $("#tr303").removeClass("class02");
        $("#tr303").addClass("class01");
               
        for(var i =51; i<65; i++){
        if  (i>54 && i<61) continue ;
        $("#tr"+i).val("");

       }
        function tt(){
        var i = 1;
        var timerId = setInterval(function() {
        removNewChild1(5,61);
        if (i == 2) clearInterval(timerId);
        i++;
         }, 100);
        }
        tt();
             
           }

           else{

         $("#h").slideUp();
         $("#k1").show();
         $("#k2").hide();
         for(var i =201; i<212; i++){
             
        $("#tr"+i).removeAttr("required");
                
         $("#tr"+i).val(""); 
              }
         $("#tr203").val("");
         $("#tr203").removeClass("class02");
         $("#tr203").addClass("class01");
          for(var i =31; i<45; i++){
         if  (i>34 && i<41) continue ;
         $("#tr"+i).val("");
          }

        function tt(){
        var i = 1;
        var timerId = setInterval(function() {
        removNewChild1(3,41);
        if (i == 2) clearInterval(timerId);
        i++;
         }, 100);
        }
        tt();
        

           }

       

 });


       

  
});




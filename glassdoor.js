$(document).ready(function(){
    console.log("hello");
    $.ajax({
      type: "POST",
      dataType: 'json',
      url: "glassdoor.php",
      success: function(data){
        data = $.parseJSON(data);
        console.log("hit");
        console.log(data);
      }
    });
});
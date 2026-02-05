<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <table id= "main" border= "0" cellspacing= "0">
        <tr>
            <td>
                <h1>Insert AJAX Example</h1>
                <p>This is a simple example of how to use AJAX to insert data into a database.</p>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form action="" id="addform">
                First Name: <input type="text" id="fname" name = "first_name">&nbsp; &nbsp; &nbsp; &nbsp; 
                <!-- &nbsp; use for spacing-->
                 Last Name: <input type="text" id="lname" name="last_name">
                 <input type="submit" id="save-button" value="Save">
                 </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
            
                </table>
            </td>
        </tr>
    </table>
    <div id="error"></div>
    <div id="success"></div>
   <div id="model">
     <div id="model-form">
        <h2>Edit Form</h2>  
        <table cellpadding="0" width="100%">
            
        </table>
        <button id="close">X</button>
    </div>
   </div>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
        //Load Table
        function loadtable(){
            $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data){
                    $("#table-data").html(data);
                }
            });
        }
        loadtable();

        //Insert new record
        $("#save-button").on("click",function(e){
            e.preventDefault();
          var fname =  $("#fname").val();
          var lname =  $("#lname").val();
          if(fname == "" || lname == ""){
            $("#error").html("All fields are required").slideDown();
            $("#success").slideUp();
          }else{
             $.ajax({
                url : "ajax-insert.php",
                type: "POST",
                data: {first_name:fname, last_name: lname},
                success: function(data){
                    if(data == 1){
                        
                        $("#addform").trigger("reset");
                        $("#success").html("Successfully save records").slideDown();
                        $("#error").slideUp();
                    }
                        else if(data == 2){
                            alert("Username already exists.");
                     $("#error").html("Can't save records").slideDown();
                     $("#success").slideUp();
                                        }
                  }
                });
          }

           
        });

        //Delete Record
        $(document).on("click", ".delete-btn", function(){  // for dynamic data we use event like this
            if(confirm("Do you really want to delete Record")){
            var studentid = $(this).data("id");
            var element = this; // here the element is

             $.ajax({
                url: "delete.php",
                type: "POST",
                data:{id: studentid},
                success: function(data){
                    if(data == 1){
                        $(element).closest("tr").fadeOut();
                    }else{
                           $("#error").html("Can't delete").slideDown();
            $("#success").slideUp();
                    }
                }
        });
    }
    });

    //Show Model Box
    $(document).on("click", ".update-btn", function(){
        $("#model").show();
        var studentId = $(this).data("id"); // id from update button
        
      $.ajax({
        url:"ajax-update.php",
        type:"POST",
        data:{id:studentId},
        success:function(data){
            $("#model-form table").html(data);
            
        }
      });
    });
    //Hide Model Box
        $(document).on("click", "#close", function(){
        $("#model").hide();
    });
    //save update form
    $(document).on("click", "#edit-submit", function(){
        var stuId = $("#edit-id").val();
        var fname = $("#edit-fname").val();
        var lname = $("#edit-lname").val();

        $.ajax({
            url:"ajax-update-form.php",
            type:"POST",
            data:{id: stuId, first_name: fname, last_name: lname},
            success:function(data){
                 
                 if( data == 1 ){
                    $("#model").hide();
                 }
            }
        });
    });

});
  </script>


</body>
</html>
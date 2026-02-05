

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 500px;
            height: 300px;
            border: 1px solid black;
            padding: 10px;
            margin: 20px auto;
            background-color: #f0f0f0;
        }
        h2{
            text-align: center;
            color: #333;
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }
        p{
            font-size: 16px;
            line-height: 1.5;
            color: #555;
            font-family: 'Courier New', Courier, monospace;
            white-space: pre-wrap; /* Preserve whitespace and line breaks */
            word-wrap: break-word; /* Break long words to fit within the container */
            text-align: left;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    

<div>
    <h2>student data</h2>
    <p id="load-data">

    </p>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    // $.getJSON("Json_encode.php",
    // function(data){
    // console.log(data);
    // $.each(data, function(key, value){
    //     $("#load-data").append("id: " + value.id + " Name: " + value.first_name + " age: " + value.age + " City: " + value.city + "\n");
    // })
        
    // });

    
    $.ajax({
        url: "Json_encode.php",
        type: "POST",
        dataType: "json", // we use it because we get data in json format, its optional but good to use
        success: function(data)
        {
            console.log(data);
            $.each(data, function(key, value){
                $("#load-data").append("id: " + value.id + " Name: " + value.first_name + " age: " + value.age + " City: " + value.city + "\n");
            })
        }
    }); 
</script>
</body>
</html>
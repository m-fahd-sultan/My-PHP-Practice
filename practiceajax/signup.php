
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    form {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    textarea {
      resize: vertical;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <form id="contactForm" method="POST">
    <h2>Contact Form</h2>


    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" required>

    <label for="message">Message:</label>
    <textarea name="message" id="message" rows="5" required></textarea>

    <button type="submit">Submit</button>
  </form>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function(){
        $("form").submit(function(event){
            event.preventDefault();
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var message = $("#message").val();

            $.ajax({
                url: "upload.php",
                type: "POST",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message    
                },
                dataType: "text",
                success: function(e) {
                    if(e.trim() == "1"){
                        alert("Data Inserted Successfully");
                        $("#contactForm")[0].reset();
                    } else {
                        alert("Error in Inserting Data");
                    }
                },
                error: function(xhr, status, error) {
                    alert("AJAX Error: " + error);
                }
            });
        })
    })
  </script>
</body>
</html>

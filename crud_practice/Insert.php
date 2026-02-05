
<?php include 'header.php'; ?>

<div class="main">
    <form action="form.php" method="post">
        <h2>Insert Data</h2>
        <label for="ID">ID</label>
        <input type="text" name="ID" id="ID" required>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone"  required>
        
        <button type="submit" name="submit">Insert</button>
    </form>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .main {
        width: 50%;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    form {
        display: flex;
        flex-direction: column;
    }
    label {
        margin-bottom: 5px;
    }
    input {
        margin-bottom: 15px;
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
    button {
        padding: 10px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
</style>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "", "practiceajax");

$sql = "SELECT * FROM restapi";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $output = '<table width="100%" cellpadding="10px"  border="1">
          <tr>
            <th width="40px">Id</th>
            <th>Name</th>
            <th width="50px">Age</th>
            <th width="150px">City</th>
            <th width="60px">Edit</th>
            <th width="70px">Delete</th>
          </tr>
         
    ';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "  <tbody id='load-table'>
        <tr>
                <td class='center'>{$row['id']}</td>
                <td>{$row['Name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['city']}</td>
                <td class='center'><button class='edit-btn' data-id='{$row['id']}'>Edit</button></td>
                <td class='center'><button class='delete-btn' data-id='{$row['id']}'>Delete</button></td>
              </tr>
              </tbody>";
    }
    $output .= "</table>";
    echo $output;
}

?>

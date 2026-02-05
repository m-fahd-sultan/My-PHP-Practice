<?php
 $conn =  mysqli_connect("localhost", "root", "", "practice") or die("Connection failed: ");
 $sql = "SELECT * FROM practice_data;";
 $result = mysqli_query($conn, $sql) or die("Query failed: ");
 if(mysqli_num_rows($result) > 0) {
    ?>
    <?php include 'header.php'; ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Adress</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td>
                            <?php echo $row['ID']; ?>
                        </td>
                        <td>
                            <?php echo $row['Name']; ?>
                        </td>
                        <td>
                            <?php echo $row['Address']; ?>
                        </td>
                        <td>
                            <?php echo $row['Phone']; ?>
                        </td>
                        </td>

                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </body>

    </html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="newMember.css">
    <title>Show Data</title>
</head>

<body>
    <?php $base_url = "http://localhost/gym_project/myproject/" ?>
    <div class="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "newmember";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM member_data";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {?>
        <table>
            <tr>
                <th>
                    <td>reg_no</td>
                    <td>Full Name</td>
                    <td>Email</td>
                    <td>profile</td>
                </th>
            </tr>
  
        <?php
            // output data of each row
            while ($row = $result->fetch_assoc()) {
               
                // echo "reg no: " . $row["reg"] . "<br>" ." Full Name: " . $row["Name"].$row["Surname"];
                echo  "<tr><th><td>". $row["reg no"] ."</td><td>".$row["Name"].$row["Surname"]."</td><td>".$row["Email"]."</td><td>".$row["Profile"]."</td></th> </tr>" ;          
             }
        }
        ?>
      </table>

    </div>
    <script src="script.js"></script>

</body>

</html>
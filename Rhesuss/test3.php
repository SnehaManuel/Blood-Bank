<!DOCTYPE html>
<html>
    <head>
        <title>Table Display</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                color: #d96459;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th {
                background-color: #d96459;
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>user_name</th>
                <th>Bloodgroup</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>town</th>
                <th>password</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost","root", "", "rhe");
            if ($conn-> connect_error) {
                die("Connection failed:".$conn-> connect_error);
            }

            $sql = "SELECT Name, Age, user_name, Bloodgroup, Phone, Gender, town, password from dr";
            $result = $conn -> query($sql);

            if ($result-> num_rows > 0){
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>". $row["Name"] . "</td><td>". $row["Age"] . "</td><td>". $row["user_name"] . "</td><td>". $row["Bloodgroup"] . "</td><td>". $row["Phone"] ."</td><td>". $row["Gender"] ."</td><td>". $row["town"] ."</td><td>". $row["password"] ."</td></tr>";
                }
            
                echo "</table>";
            }
            else{
                echo"0 result";
            }
            $conn-> close();
            ?>
        </table>
    </body>
</html>

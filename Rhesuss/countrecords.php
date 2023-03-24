<!DOCTYPE html>
<html>
    <head>
        <title>Row Count</title>
    </head>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="rhe";
        $con=mysqli_connect($servername,$username,$password,$dbname);
 
        $sql="SELECT COUNT(*) as total FROM dr";
        $result=mysqli_query($con,$sql);
        $values=mysqli_fetch_assoc($result);
        $num_rows=$values['total'];
         echo "$num_rows";
    
        ?>
    </table>
</body>
</html>

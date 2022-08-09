<html> 
    <body> 
        <table>
            <tr>
                <th> Antigen ID </th>
                <th> Chemical Representation </th>
                <th> 2D Representation </th>
                <th> Repeated Unit Size </th>
                <th> Species of Origin </th>
                <th> Link to Paper </th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost:3306","root","MyNewPass","db_");
            $sql = "SELECT * FROM db_.new_table";
            $result = $conn -> query($sql);
            
            if ($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>" . $row["antigenid"] . "</td><td>" . $row["chemicalrepresentation"] . "</td><td>" .$row["twodrepresentation"] . "</td><td>" .$row["repeatedunitsize"] . "</td><td>" .$row["speciesorigin"]. "</td><td>" .$row["doilink"]  . "</td></tr>";
                }
            }
            else{
                echo "No results";
            }
            $conn->close();
            ?>
        </table>
    </body>
</html>

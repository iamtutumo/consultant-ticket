        <select name="name" id="name">

<?php
        $table = "contacts";
        $name =$_GET['name'];
        include("../php/connect.php");

        $sql= mysql_query("SELECT * FROM $table ORDER BY name");
        //$sql= mysql_query("SELECT * FROM `lowes` WHERE name LIKE \"%$qname%\"") AND ("WHERE date BETWEEN STR_TO_DATE('$startDate','%d-%m-%Y') AND STR_TO_DATE('$endDate','%d-%m-%Y')");

        while($row = mysql_fetch_array($sql)){
                $id = $row["id"];
                $name = $row["name"];

                print "<option value='$name'>$name</option>";
        };

?>
        </select>

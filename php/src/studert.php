<?php
    $sql_studert = "SELECT * FROM studert";

    if ($result = $conn->query($sql_studert)) {
        while($data = $result->fetch_object()) {
            $studerts[] = $data;
        }
    }

    echo "<ul>";
    foreach($studerts as $studert) {
        echo "<li>";
        echo  $studert->first_name . " " .$studert->last_name;
        echo "</li>";
    }
    echo "</ul>";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <?php


$result ;
$i;
$number=7;

for($i=1; $i<=10; $i++){
  $result = $number * $i;
if ($result %2==0){
 echo "<table border='1' width ='50%'>" ;
    // echo "<thead border =1 >" ;
        // echo " <tr border =1>";
        //     echo "<th>Table</th>";
        //     echo "<th>Multiply</th>";
        //     echo "<th>Even</th>";
        //     echo "<th>Equal</th>";
        //     echo "<th>Result</th>";
        // echo " </tr>";
        // echo "<tbody >";
        echo "<tr >";
            echo "<td >7</td>";
            echo "<td >x</td>";
            echo "<td >$i</td>";
            echo "<td >=</td>";
            echo "<td >$result</td>";

        echo "</tr>";
        // echo "</tbody>";

    // echo "</thead>" ;
 echo "</table>";

}

    
}
    ?>

<table class="table">
        <thead>
            <tr>

                <th scope="col">Table</th>
                <th scope="col">Multiply</th>
                <th scope="col">Even</th>
                <th scope="col">Equal</th>
                <th scope="col">Result</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7</td>
                <td>x</td>
                <td>$i</td>
                <td>=</td>
                <td>$result</td>

            </tr>
           
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
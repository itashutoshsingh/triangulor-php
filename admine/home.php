<?php include("sessioncheck.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 mt-5">
               Welcome
<?php echo $_SESSION["sessdata"]["name"];?>
               click here to <a href="admin-logout.php"><button type="button" class="btn btn-primary">Logout</button>
</a>
<a href="home.php?load_data=1"><button type="button" class="btn btn-success">Load Data</button></a>

            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
<?php
if(isset($_GET["load_data"])){
    include_once("db.php");
    //$conn = mysqli_connect("localhost","root","","tri-contact");
    $sql = 'SELECT * FROM full_detail';
    $result = mysqli_query($conn,$sql);
    $output = "";
    if(mysqli_num_rows($result)>0){
    $output = '<table border="1" width="100%" cellspacing="0" cellpading="10px">
             <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Course</th>
                <th>Text-Area</th>
             </tr>';
             while ($row=mysqli_fetch_assoc($result)) {
                $output .= "<tr><td>$row[Id]</td><td>$row[Name]</td><td>$row[Email]</td><td>$row[Phone_No]</td>
                <td>$row[Course]</td><td>$row[Text_Area]</td></tr>";
             }
             $output .="</table>";
             mysqli_close($conn);
             echo $output;
    }
    else{
    echo("<h2>No Record Found.</h2>");
    }
}
?>
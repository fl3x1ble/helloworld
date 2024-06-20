

<html>

<head>
    <title> Home </title>
</head>
<form action="search_results.php" method="GET">
    <input type="text" name="search_query" placeholder="Search...">
    <input type="submit" value="Search">
</form>

<body>
    <?php


    
    //echo "Thank you for filling the form " . "! <br>\n";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test_db";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // $sql = "SELECT m.id, m.firstname, m.lastname, j.job
    //     FROM myguests m
    //     JOIN myguests_jobs mj ON m.id = mj.myguests_id
    //     JOIN jobs j ON mj.jobs_id = j.job_id";

    // $result = $conn->query($sql);
    

    // $whos_jobs = [];

    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {

    //         if(empty($whos_jobs[$row["id"]])){
    //             $whos_jobs[$row["id"]] = [
    //                 "firstname"=> $row["firstname"],
    //                 "lastname"=> $row["lastname"],
    //                 "job"=> [$row["job"]],
    //             ];
    //         }else{
    //             $whos_jobs[$row["id"]]["job"][] = $row["job"];
    //         }

    //     }
    // } else {
    //     echo "No results found.";
    // }


    
    // echo '<table border="2" cellspacing="0" cellpadding="10"> 
    // <tr> 
    //     <th> <font face="Arial">Id</font> </th> 
    //     <th> <font face="Arial">Firstname</font> </th> 
    //     <th> <font face="Arial">Lastname</font> </th> 
    //     <th> <font face="Arial">Email</font> </th> 
    // </tr>';

    
    // foreach ($whos_jobs as $id => $whos_job) {
    //     // echo "Firstname: ". $whos_job["firstname"] ." - ".     
    //     //      "Lastname: ". $whos_job["lastname"] ." - ".
    //     //      "JOB: ";
    //     $firstname = $whos_job["firstname"];
    //     $lastname = $whos_job["lastname"];
    //     $jobs = "";
    //     for($i = 0; $i < (count($whos_job["job"]) ); $i++) {
    //         $jobs = $jobs . $whos_job["job"][$i];
    //         if($i < count($whos_job["job"]) - 1 ) {
    //             $jobs = $jobs . ", ";
    //         }
    //     }

    //     echo '<tr> 
    //             <td>'.$id.'</td> 
    //             <td>'.$firstname.'</td> 
    //             <td>'.$lastname.'</td> 
    //             <td>'.$jobs.'</td> 
    //         </tr>';
    
    // }   

    
    

    //$sql = "SELECT id, firstname, lastname, email FROM MyGuests ORDER BY lastname";
    $sql = "SELECT id, firstname, lastname, email FROM MyGuests ";
    $result = mysqli_query($conn, $sql);    




    echo '<table border="2" cellspacing="0" cellpadding="10"> 
    <tr> 
        <th> <font face="Arial">Id</font> </th> 
        <th> <font face="Arial">Firstname</font> </th> 
        <th> <font face="Arial">Lastname</font> </th> 
        <th> <font face="Arial">Email</font> </th> 
    </tr>';
  
    if ($result -> num_rows > 0)  
    { 
        // OUTPUT DATA OF EACH ROW 
        while($row = $result->fetch_assoc()) 
        {  
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];

            echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$firstname.'</td> 
                    <td>'.$lastname.'</td> 
                    <td>'.$email.'</td> 
                </tr>';
        } 
    }  

    // $sql = "SELECT * FROM myguests RIGHT JOIN jobs ON myguests.id = jobs.myguests_id;";
    // $result = mysqli_query($conn, $sql);   

    // echo '<table border="2" cellspacing="0" cellpadding="10"> 
    // <tr> 
    //     <th> <font face="Arial">Id</font> </th> 
    //     <th> <font face="Arial">Firstname</font> </th> 
    //     <th> <font face="Arial">Lastname</font> </th> 
    //     <th> <font face="Arial">Email</font> </th> 
    //     <th> <font face="Arial">Job</font> </th> 
    //     <th> <font face="Arial">Job 2</font> </th> 
    // </tr>';

    // if ($result -> num_rows > 0)  
    // { 
    //     while($row = $result->fetch_assoc()) 
    //     {  
    //         $id = $row['id'];
    //         $firstname = $row['firstname'];
    //         $lastname = $row['lastname'];
    //         $email = $row['email']; 
    //         $job = $row['Job'];
    //         $job_2 = $row['Job_2'];
    //         echo '<tr> 
    //                 <td>'.$id.'</td> 
    //                 <td>'.$firstname.'</td> 
    //                 <td>'.$lastname.'</td> 
    //                 <td>'.$email.'</td> 
    //                 <td>'.$job.'</td> 
    //                 <td>'.$job_2.'</td> 
    //             </tr>';
    //     } 
    // }  
  

   

    
    ?>
</body>

</html>

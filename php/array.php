<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
    // indexed array, associative, multi-dimension
    // $students = array("Ali", "Ahmed", "Usman", "Raza", "Shahzaib", "Maaz", "Mubsir");
    // echo $students[3];
    // echo $students[4];
    // echo $students[0];
    // print_r($students);

    // foreach($students as $stu){
    //     echo $stu."<br>";
    // }

    // $students = array(1 => "Taha", 5 => "Sami", 8 => "Ahmed");
    // echo $students[1];
    // echo $students[5];
    // echo $students[8];

    // foreach($students as $k => $stu){
    //     echo $k." ".$stu."<br>";
    // }

    // $studentsRecord = array("Taha" => "Intermediate", "Wasi" => "Metric", "Shahzaib" => "Graduation");
    // // echo $studentsRecord["Taha"];
    // foreach($studentsRecord as $key => $value){
    //     echo "Name: <b>".$key . "</b> Qualification: <b>" . $value ."</b><br>";
    // }



    // echo "<table class='table table-bordered w-25'>
    //     <thead>
    //         <tr>
    //             <th>Names</th>
    //             <th>Qualification</th>
    //         </tr>
    //     </thead>
    //     <tbody>
    //         ";


    //         foreach($studentsRecord as $key => $value){
    //                 echo "<tr>
    //                         <td>".$key."</td>
    //                         <td>".$value."</td>
    //                     </tr>";
    //         }

    //     echo "
    //         </tbody>
    //     </table>";
    


    $students = array(
            array("id"=>1, "name"=>"Sana", "qualification"=> "Graduation"),
            array("id"=>2, "name"=>"Maha", "qualification"=> "Intermediate"),
            array("id"=>3, "name"=>"Hafsa", "qualification"=> "Metric"),
            array("id"=>4, "name"=>"Mahnoor", "qualification"=> "Masters"),
            array("id"=>5, "name"=>"Hina", "qualification"=> "Ph.D")
        );
    
        foreach($students as $stu){
            foreach($stu as $key => $value){
                echo $key . " " . $value ."<br>";
            }
        }

        foreach($students as $stu){
            echo $stu["id"]. " ". $stu["name"] ." ". $stu["qualification"]."<br>";
        }
        // echo $students[2]["name"];
?>

<table class="table table-bordered w-50 mx-auto mt-5 bg-dark text-light">
    <thead>
        <tr class="bg-warning text-dark">
            <th>Id</th>
            <th>Name</th>
            <th>Qualification</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($students as $stu){
        ?>
            <tr>
                <td><?php echo $stu["id"]?></td>
                <td><?php echo $stu["name"]?></td>
                <td><?php echo $stu["qualification"]?></td>
            </tr>
        <?php
            }
        ?>
    </tbody>
</table>
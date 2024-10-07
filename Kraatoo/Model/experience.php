<?php
// require_once('../Entity/experience.php');
require_once('/opt/lampp/htdocs/Kraatoo/Entity/experience.php');

function retrieveExperience ($userID)
{
    $conn = getConnection();
    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
    $query = "SELECT * FROM experience WHERE userid = '$userID';";
    $status = mysqli_query($conn, $query);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['pastJob'] = [];
    $_SESSION['currentJob'] = [];
    $numberOfExperience = mysqli_num_rows($status);
    if ($numberOfExperience > 0)
    {
        $p = 0;
        $c = 0;
        for ($i = 0; $i < $numberOfExperience; $i++)
        {
            $row = mysqli_fetch_assoc($status);
            $experience = new experience($row['company'], $row['position'], $row['startedFrom'], $row['to']);
            if ($row['to'] == 0)
            {
                $_SESSION['currentJob'][$c] = $experience;
                $c += 1;
            }
            else
            {
                $_SESSION['pastJob'][$p] = $experience;
                $p += 1;
            }
        }
    }
    // foreach($status as $value)
    // {
    //     echo $index. " - \n"; 
    //     print_r($row);
    //     $index += 1;
    //     // $experience = new experience($row['company'], $row['position'], $row['startedFrom'], $row['to']);
    //     // $experience->display();
    //     // if ($row['resigningyear'])
    //     // {
    //     //     $_SESSION['CurrentJob'][$index] = $row;
    //     // }
    // }
}
?>
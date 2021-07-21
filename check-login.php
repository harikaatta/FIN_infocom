<?php

    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $mail = isset($_POST['mail']) ? $_POST['mail'] : '';
    $mnumber = isset($_POST['mnumber']) ? $_POST['mnumber'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $school = isset($_POST['school']) ? $_POST['school'] : '';
    $course = isset($_POST['course']) ? $_POST['course'] : '';
    $year = isset($_POST['year']) ? $_POST['year'] : '';
    $percentage = isset($_POST['percentage']) ? $_POST['percentage'] : '';
    $rownum = isset($_POST['rownum']) ? $_POST['rownum'] : '';
    $coursearr = isset($_POST['coursearr']) ? $_POST['coursearr'] : '';
    $schoolarr = isset($_POST['schoolarr']) ? $_POST['schoolarr'] : '';
    $yeararr = isset($_POST['yeararr']) ? $_POST['yeararr'] : '';
    $percentagearr = isset($_POST['percentagearr']) ? $_POST['percentagearr'] : '';

    $ok = true;
    $messages = array();

    $messages = $name."||^||".$mail."||^||".$mnumber."||^||".$age."||^||".$gender."||^||".$address."||^||".$school."||^||".$course."||^||".$year."||^||".$percentage."||^||".$rownum;

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages,
            'coursearr' => $coursearr,
            'schoolarr' => $schoolarr,
            'yeararr' => $yeararr,
            'percentagearr' => $percentagearr
        )
    );

?>

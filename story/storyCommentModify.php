<?php
    include "../connect/connect.php";

    $commentID = $_POST['commentID'];
    $commentMsg = $_POST['msg'];
    $myMemberID = $_POST['memberID'];


    $sql = "UPDATE myComment SET commentMsg = '{$commentMsg}' WHERE myCommentID = '{$commentID}' AND myMemberID = {$myMemberID}";
    $connect -> query($sql);

    echo json_encode(array("info" => $commentID));
    
?>
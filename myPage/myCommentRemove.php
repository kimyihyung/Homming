<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    $myMemberID = $_SESSION['myMemberID'];
    $commentID = $_POST['commentID'];

    echo $commentID;
    echo $myMemberID;

    $sql = "DELETE FROM myComment WHERE myCommentID = {$commentID}";
    $result = $connect -> query($sql);
    
    echo json_encode(array("info" => $sql));
?>

<script>
location.href = "myComment.php";
</script>
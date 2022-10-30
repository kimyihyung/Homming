<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myMemberID = $_SESSION['myMemberID'];

    $sql = "DELETE FROM myAdminMember WHERE myMemberID = '$myMemberID'";
    $result = $connect -> query($sql);

    unset($_SESSION["myMemberID"]);
    unset($_SESSION["youName"]);
    
?>

<script>
location.href = "../main/main.php";
</script>
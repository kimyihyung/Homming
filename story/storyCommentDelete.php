<?php
    include "../connect/connect.php";
    // include "../connect/session.php";
    // include "../connect/sessionCheck.php";
    
    $commentID = $_POST['commentID'];
    $myStoryID = $_POST['storyID'];
    $myMemberID = $_POST['memberID'];


    // $memberSql = "SELECT * FROM myAdminMember WHERE myMemberID  = {$myMemberID}";
    // $memberResult = $connect -> query($memberSql);
    // $memberInfo = $memberResult -> fetch_array(MYSQLI_ASSOC);

    // $storySql = "SELECT * FROM myStory WHERE myStoryID = {$myStoryID}";
    // $storyResult = $connect -> query($storySql);
    // $storyInfo = $storyResult -> fetch_array(MYSQLI_ASSOC);

    $commentSql = "SELECT * FROM myComment WHERE myStoryID = '$myStoryID' ORDER BY myCommentID DESC";
    $commentResult = $connect -> query($commentSql);
    $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC); 
    // echo $commentInfo;

    // if($commentResult['myMemberID'] === $myMemberID && $commentResult['myCommentID'] === $commentID && $commentResult['myStoryID'] === $storyID){
    //     $sql = "DELETE FROM myComment WHERE myCommentID = {$commentID} && myMemberID = {$myMemberID}";
    //     $result = $connect -> query($sql);
    // } 
    $sql = "DELETE FROM myComment WHERE myCommentID = {$commentID} && myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);

    echo json_encode(array("info" => $sql));
?>
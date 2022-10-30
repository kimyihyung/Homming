
<?php
    include "../connect/connect.php";


    $myStoryID = $_POST['storyID'];    
    $myMemberID = $_POST['memberID'];
    $commentInfo = $_POST['commentInfo'];

    $commentSql = "SELECT * FROM myComment WHERE myStoryID = '$myStoryID' ORDER BY myCommentID DESC";
    $commentResult = $connect -> query($commentSql);
    $commentInfo = $commentResult -> fetch_array(MYSQLI_ASSOC); 

    $sql = "UPDATE myComment SET commentDelete = commentDelete + 1 WHERE myStoryID = {$myStoryID}";
    $connect -> query($sql);


    // $sql = "SELECT myStoryID, myMemberID FROM myStory WHERE myMemberID = {$myMemberID} AND myStoryID = {$myStoryID}";
    // $result = $connect -> query($sql);

    // $sql = "SELECT s.myStoryID, c.myStoryID FROM myStory s JOIN myComment c ON (s.myStoryID = c.myStoryID) WHERE s.myStoryID "

    $sql = "DELETE FROM myStory WHERE myStoryID = {$myStoryID} AND myMemberID = {$myMemberID}";
    $result = $connect -> query($sql);
    // Header("Location: story.php");
    echo json_encode(array("info" => $sql));


    // echo "<script>location.href='story.php;'</script>";
?>

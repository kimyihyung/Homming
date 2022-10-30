<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";

    $myStoryID = $_GET['storyID'];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>스토리</title>
</head>
<body>
<?php
    $myStoryID = $_GET['storyID'];
    $myMemberID = $_SESSION['myMemberID'];
    
    $storyTitle = $_POST['storyTitle'];
    $storyContents = nl2br($_POST['storyContents']);
    $storyCategory = $_POST['storyCategory'];
    // $storyImgFile = $_POST['storyImgFile'];
    // $storyImgSize = $_POST['storyImgSize'];


    $storyTitle = $connect -> real_escape_string($storyTitle);
    $storyContents = $connect -> real_escape_string($storyContents);

    $storyImgFile = $_FILES['storyFile'];
    $storyImgSize = $_FILES['storyFile']['size'];
    $storyImgType = $_FILES['storyFile']['type'];
    $storyImgName = $_FILES['storyFile']['name'];
    $storyImgTmp = $_FILES['storyFile']['tmp_name'];


    $sql = "SELECT storyTitle, myMemberID FROM myStory WHERE myStoryID = {$myStoryID}";
    $result = $connect -> query($sql);
    // echo "<pre>";
    // var_dump($storyImgTmp);
    // echo "</pre>";

    // echo $youPass;
    // echo $memberInfo['youPass'];

    if($storyImgType){
        $fileTypeExtension = explode("/", $storyImgType);
        $fileType = $fileTypeExtension[0];      //image
        $fileExtension = $fileTypeExtension[1]; //png

        //이미지 타입 확인하기
        if($fileType == "image"){
            if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                $storyImgDir = "../assets/img/story/";
                $storyImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                $sql = "UPDATE myStory SET storyTitle = '{$storyTitle}', storyContents = '{$storyContents}', storyCategory = '{$storyCategory}', storyImgFile = '{$storyImgName}', storyImgSize = '{$storyImgSize}' WHERE myStoryID = '{$myStoryID}' && myMemberID = '{$myMemberID}'";
            } else {
                echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
            }
        } 
    } else {
        $sql = "UPDATE myStory SET storyTitle = '{$storyTitle}', storyContents = '{$storyContents}', storyCategory = '{$storyCategory}' WHERE myStoryID = '{$myStoryID}' AND myMemberID = '{$myMemberID}'";
    }
    //이미지 사이즈 확인
    if($storyImgSize > 1000000){
        echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
        exit;
    }
    $result = $connect -> query($sql);


    $result = move_uploaded_file($storyImgTmp, $storyImgDir.$storyImgName);
    Header("Location: story.php");
?>


<!-- <script>
    location.href="story.php";
</script> -->
</body>
</html>
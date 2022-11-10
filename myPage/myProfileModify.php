<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $myMemberID = $_SESSION['myMemberID'];

    $youPhone = $_POST['youPhone'];
    $youNickName = $_POST['youNickName'];
    $youEmail = $_POST['youEmail'];
    $youPass = $_POST['youPass']; 
    $regTime = time();

    $youImgFile = $_FILES['youFile'];
    $youImgSize = $_FILES['youFile']['size'];
    $youImgType = $_FILES['youFile']['type'];
    $youImgName = $_FILES['youFile']['name'];
    $youImgTmp = $_FILES['youFile']['tmp_name'];

    $youPhone = $connect -> real_escape_string(trim($youPhone));
    $youNickName = $connect -> real_escape_string(trim($youNickName));
    $youEmail = $connect -> real_escape_string(trim($youEmail));
    $youPass = $connect -> real_escape_string(trim($youPass));
    $youPass = sha1("web".$youPass);
    

    // // 정보 수정
    // $sql = "UPDATE myAdminMember SET youPhone = '{$youPhone}', youNickName = '{$youNickName}', youEmail = '{$youEmail}', youPass = '{$youPass}', youImgFile = '{$youImgFile}' WHERE myMemberID = '{$myMemberID}' ";
    // $connect -> query($sql);

        //이미지 파일명 확인
        if($youImgType){
            $fileTypeExtension = explode("/", $youImgType);
            $fileType = $fileTypeExtension[0];      //image
            $fileExtension = $fileTypeExtension[1]; //png

            //이미지 사이즈 확인
            if($youImgSize > 1000000){
                echo "<script>alert('이미지 용량이 1메가를 초과했습니다.'); history.back(1)</script>";
                exit;
            }
    
            //이미지 타입 확인
            if($fileType == "image"){
                if($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png" || $fileExtension == "gif"){
                    $youImgDir = "../assets/img/member/";
                    $youImgName = "Img_".time().rand(1,99999)."."."{$fileExtension}";
                    $sql = "UPDATE myAdminMember SET youPhone = '{$youPhone}', youNickName = '{$youNickName}', youEmail = '{$youEmail}', youPass = '{$youPass}', youImgFile = '{$youImgName}' WHERE myMemberID = '{$myMemberID}' ";
                    echo "<script>
    
                    alert('정보가 수정되었습니다.')
                    
                    </script>";
    
                } else {
                    echo "<script>alert('지원하는 이미지 파일이 아닙니다.'); history.back(1)</script>";
                    // echo "no이미지 노 파일";
                }
            }
        } 
    
        
    
        // echo $sql;
    
        // $result = $connect -> query($sql);

        $result = $connect -> query($sql);
        $result = move_uploaded_file($youImgTmp, $youImgDir.$youImgName);
?>
<script>
location.href = "myProfile.php";
</script>
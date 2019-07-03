<?php
if (!isset($_FILES['Upload'])) exit(0);
$Upload = $_FILES['Upload'];
if ($Upload['error'] == 0){
    //<傳統作業方式>
    // if(copy($Upload['tmp_name'],"upload/{$upload['name']}")){
    //     echo 'upload Succese';

    // }else{
    //     echo 'upload failure'
    // }
    //<傳統作業方式>
    //<新的作業方式>    
    if(is_uploaded_file($Upload['tmp_name'])){
        echo 'upload Succese';

    }else{
        echo 'upload failure'
    }


}else{
    echo 'Ooop!';
}
?>
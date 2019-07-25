<?php

    include_once "base.php";

    $do=(!empty($_GET['do']))?$_GET['do']:"";

    switch($do){

        case "login":

            $acc=$_POST['acc'];
            $pw=$_POST['pw'];
            // $mail=$_POST['mail'];

            $chkAcc=nums("user",['acc'=>$acc]);

            if($chkAcc>0){

                $chkPass=nums("user",['pw'=>$pw]);
                if($chkPass>0){

                    $_SESSION['login']=$acc;

                    if($acc == 'admin'){
                        echo 1;
                    }else{
                        echo 2;
                    }

                }else{
                    echo 3;
                }

            }else{
                echo 4;
            }

        break;

        case "reg":

            $acc=$_POST['acc'];
            $pw=$_POST['pw'];
            $mail=$_POST['mail'];

            $chkAcc=nums("user",['acc'=>$acc]);

            if($chkAcc>0){
                echo 3;
            }else{

                $chkMail=nums("user",['mail'=>$mail]);
                if($chkMail>0){
                    echo 2;
                }else{
                    $data=['acc'=>$acc,'pw'=>$pw,"mail"=>$mail];
                    $data['file']='default-avatar.png';
                    save("user",$data);
                    echo 1;
                }
            }

        break;

        case "val":

            $city=[
                '臺北市','基隆市','新北市','宜蘭縣','新竹市','新竹縣','桃園縣','苗栗縣','臺中市','彰化縣','南投縣','嘉義市','嘉義縣','雲林縣','臺南市','高雄市','屏東縣','臺東縣','花蓮縣'
            ];
            // print_r($_POST);
            $cvl=$_POST['cvl'];
            $num=$_POST['citynums'];

            //字串轉陣列
            $arr=explode(",",$cvl);
            $arr1=explode(",",$num);

            $data=[];
            $nums=[];

            //利用for迴圈重組陣列 欄位=>縣市名稱, 值=>post過來的值
            for($i=0;$i<count($city);$i++){
                $data[$city[$i]]=$arr[$i];
                $nums[$city[$i]]=$arr1[$i];
            }
            $data['id']='1';
            print_r($data);
            $nums['id']='2';
            print_r($nums);

            save("percentagetw",$data);
            save("percentagetw",$nums);

        break;

        case "editUser":
        
        $data=find("user",['acc'=>$_POST['acc']]);
        
         $data['fname']=$_POST['fname'];
         $data['lname']=$_POST['lname'];
         $data['addr']=$_POST['addr'];
         $data['city']=$_POST['city'];
         $data['country']=$_POST['country'];
         $data['pos']=$_POST['pos'];
         $data['mess']=$_POST['mess'];

        //  print_r($data);
        save("user",$data);    

        break;

        case "editImg":

            $data=find("user",['acc'=>$_POST['acc']]);

            if(!empty($_FILES['file']['tmp_name'])){
                $data['file']=$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'],"./assets/img/faces/".$data['file']);
            }
            
            // print_r($data['file']);
            save("user",$data);

        break;
        
        case "del":

            del("user",$_POST['x']);

        break;
    }





?>
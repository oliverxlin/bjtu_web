<span style="font-size:14px;"><?php  
Session_Start();  
$_SESSION["name"]=$_POST["name"];   
    // if(!session_is_registered("name")){ //判断当前会话变量是否注册  
    //     echo "未登录";    
    // }else{  
    echo "欢迎".$_SESSION["name"];  

?>
</span> 
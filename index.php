<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
require_once("connect_db.php");
$Login["USER_ID"]="";
$Login["BOO"]="";
$_SESSION["BOO"]="";
$_SESSION["POSITION_ID"]="";
function conV($C)
{
    return iconv("utf-8", "tis-620", $C);
}


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++




?>
<!DOCTYPE html>
<html lang="en">

    <head>

         <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <style type="text/css">
    body,td,th {
	font-family: Roboto, sans-serif;
}
    </style>
    </head>

<body>

        <!-- Top content -->
  <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    		<div class="row"> <!--  row1 begin -->
                        		 <div class="col-md-12 ">
									<h2 style="color:#6F0;" ><strong>ระบบบันทึกบัญชีเงินฝากคู่โอน</strong></h2>
                             		<h2 style="color:#6F0;" ><strong>กรณีรอคืนเงินชดเชยโครงการต่างๆ</strong></h2>

                        		</div>
                    		</div><!--  row1 end -->
                    		<div class="row"> <!--  row2 begin -->
                             <div class="col-md-3 "></div>
                        		    <div class="col-md-3 "><!--  col-md-3 begin -->
                        			<div class="form-top">
                        				<div class="form-top-left">
                        					<h3 style="color:#F00;">ควรเปิดเว็ปผ่าน CHROME</h3>
                            				<p>กรุณากรอก ชื่อ และ รหัสเพื่อเข้าระบบ:</p>
                        				</div>
                        				<div class="form-top-right">
                        					<i class="fa fa-key"></i>
                        				</div>
                            		</div>
                            		<div class="form-bottom">
			                    			<form role="form" action="" method="post" class="login-form">
                                  				<input type="hidden" name="_action" value="Loging...">
			                    					<div class="form-group">
			                    					<label class="sr-only" for="form-username">Username</label>
			                        				<input  type="text"  maxlength="7" name="UserID" placeholder="Username..." class="form-username form-control" id="form-username">
			                        				</div>
			                        				<div class="form-group">
			                        				<label class="sr-only" for="form-password">Password</label>
			                        				<input type="password" name="UserPWD" placeholder="Password..." class="form-password form-control" id="form-password">
			                        				</div>
			                       				 <button type="submit" class="btn">Sign in!</button>
			                    			</form>
		                    		</div>
                                    <a href=เอกสารแนบ_คู่มือระบบฯ.DOC><h2 style="color:#FF0000;" >  Download คู่มือ</h2></a>
                  				</div><!--  col-md-3 end -->
                              <div class="col-md-3 "><!--  col-md-3 begin -->
                 
                   
                    <div class="chat-panel panel panel-default"><!--  chat-panel panel panel-default begin -->
                        <div class="panel-heading"> <!--  panel-heading begin -->
                            <i class="fa fa-comments fa-fw"></i> ประกาศ !
                            
                        </div><!--  panel-heading end -->
                       
                        <div class="panel-body"> <!--  panel-body begin -->
                            <ul class="chat">
                                <li class="left clearfix">
                                   
                                    <div class="chat-body clearfix">
                                     
                                        <p align="left">
                                           - กรณีไม่มีบัญชีเงินฝาก หรือไม่สามารถติดต่อลูกค้าได้ เช่น กรณีลูกค้าเสียชีวิต ให้สาขายืนยันแบบไม่มีเลขที่บัญชี 
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                   
                                    <div class="chat-body clearfix">
                                       
                                           <p align="left">
                                           - กรณีไม่มีข้อมูลหลังจากที่มีการ login เข้าระบบเนื่องจากสาขานั้นไม่มีข้อมูลเพื่อรอการบันทึก
                                        </p>
                                    </div>
                                </li>
                                <li class="left clearfix">
                                   
                                     <div class="chat-body clearfix">
                                       
                                       <p align="left">
                                         	-  หากมีสัญญาตั้งฐานเพิ่มเติม ฝทส. จะแจ้งบันทึกให้ทราบทุกครั้งที่มีการตั้งฐาน
                                        </p>
                                    </div>
                                        
                                </li>
                                <li class="left clearfix">
                                   
                                     <div class="chat-body clearfix">
                                       
                                       <p align="left">
                                         	- เพื่อความสะดวกในการใช้งานเข้าหน้าเว็บบันทึกบัญชีคู่โอนควรเปิดใช้ในChrome
                                        </p>
                                    </div>
                                        
                                </li>
                            </ul>
                        </div> <!--  panel-body end -->
            
            
                  				</div><!--  chat-panel panel panel-default end -->
                                
     					  </div><!--  col-md-3 end -->
                    
    <?php 
	   if (!empty($_POST['_action'])){
	  	   if ($_POST['_action'] == "Loging...") {
				
					//++++++++++++++++++BEGIN++++++++++++++++USER FROM EOW+++++++++++++++++++++++++++++	

try {
	
        $client = new SoapClient("http://redwing/authen/Ws_Login_checkEmp_UTF8.php?wsdl", array('login' => "wsemp001",
            'password' => "wsemp@123",
            'encoding' => 'UTF-8'));
    $parameter = array('Username' => $_POST['UserID'], 'Pwd' => $_POST['UserPWD'], 'System_code' => "subsidy");
    $result = $client->__soapCall("HR_AUTHEN", $parameter);
    $emp_info["EMP_CODE"] = $result[0]->EMP_CODE;
    $emp_info['EMP_POSITION_NAME_LEVEL'] = $result[0]->EMP_POSITION_NAME_LEVEL;
    $emp_info['EMP_POSITION_LEVEL'] = $result[0]->EMP_POSITION_LEVEL;
    $emp_info['EMP_PROFILECODE'] = $result[0]->EMP_PROFILECODE;
    $emp_info['EMP_PROFESSIONAL_CODE'] = $result[0]->EMP_PROFESSIONAL_CODE;
    $emp_info['EMP_AUTHORIZE'] = $result[0]->EMP_AUTHORIZE;
    $emp_info["EMP_Welcome"] =  $result[0]->EMP_FNAME . " " . $result[0]->EMP_LNAME;
    $emp_info["EMP_NAME"] = $result[0]->EMP_FNAME . " " . $result[0]->EMP_LNAME;

    $emp_info["EMP_DIVISION_CODE"] = $result[0]->EMP_DIVISION_CODE;
    $emp_info["EMP_DIVISION_NAME1"] = $result[0]->EMP_DIVISION_NAME1;
    $emp_info["EMP_DIVISION_NAME2"] = $result[0]->EMP_DIVISION_NAME2;
    $emp_info["EMP_DIVISION_AREA"] = $result[0]->EMP_DIVISION_AREA;
    $emp_info["EMP_BR_CODE"] = $result[0]->EMP_BR_CODE;
    $emp_info["EMP_POSITION_CODE"] = $result[0]->EMP_POSITION_CODE;
    $emp_info["EMP_POSITION_NAME"] = $result[0]->EMP_POSITION_NAME;
    $emp_info["EMP_DEPARTMENT"] = $result[0]->EMP_DEPARTMENT;

	$arr_userProfessional = array('041');
    $arr_userLevel = array('8', '9', '10');
	$arr_userLOWLevel = array('4', '5', '6','7','4-7');
	$arr_highuserLevel = array('9', '10');
 
		echo "<p style='color:#000000;'>EMP_PROFESSIONAL_CODE".$emp_info['EMP_PROFESSIONAL_CODE'];
	echo "<br>";
		echo "EMP_POSITION_LEVEL".$emp_info['EMP_POSITION_LEVEL'];
		echo "<br>";
		echo "EMP_DEPARTMENT".$emp_info['EMP_DEPARTMENT']."</p>";
 if ((in_array($emp_info['EMP_PROFESSIONAL_CODE'], $arr_userProfessional) || in_array($emp_info['EMP_POSITION_LEVEL'], $arr_highuserLevel)) and ($emp_info["EMP_DEPARTMENT"]=='3')) {
		echo "<p align=center class='w3-light-green'>";
										$_SESSION["USER_NAME"]= $emp_info["EMP_CODE"];
										//$Login[NAME]=$row1[NAME];
										//$_SESSION["NAME"]= $Login[NAME];
										//$Login["BOO"]=$row1["BRANCH_ID"];
										//$Login[BRANCH]=$row1[DESCRIPTION];
										//$_SESSION["USERNAME"] = $row1[USER_NAME];
										$_SESSION["BOO"] = $emp_info["EMP_PROFILECODE"] ;
										//$_SESSION["BRNAME"] = $row1[DESCRIPTION];
										$_SESSION["POSITION_ID"] =  $emp_info["EMP_PROFESSIONAL_CODE"]; 
										$_SESSION["LEVEL"] =  $emp_info["EMP_POSITION_LEVEL"]; 
										$_SESSION["EMP_Welcome"] =  $emp_info["EMP_Welcome"];	//
										//$_SESSION["POSITION_NAME"] = $row1["POSITION_FULL_NAME"]; //
										//$_SESSION['ROLE_ID'] = $row1["ROLE_ID"];
		
									echo $emp_info["EMP_Welcome"];
									if ( in_array($emp_info['EMP_POSITION_LEVEL'], $arr_userLOWLevel)){
										echo "ผู้ปฎิบัติ : สาขา ".$emp_info["EMP_PROFILECODE"];

										 echo "<META http-equiv='refresh' CONTENT='1; URL=operator.php''>";	
										}elseif(in_array($emp_info['EMP_POSITION_LEVEL'], $arr_userLevel)){
												echo "ผู้อนุมัติ : สาขา".$emp_info["EMP_PROFILECODE"];
					
												 echo "<META http-equiv='refresh' CONTENT='1; URL=operator.php''>";	
										}
	
		}else{
		echo "<br><br><br><p style='color:#000000;'>1################################################################</p><h2 style='color:#FFFF00;' >";
		echo "ตำแหน่งนี้ไม่สามารถเข้าใช้ระบบได้";}
		echo "</h2> </p>";
} catch (SoapFault $fault) {
    echo "<p style='color:#000000;'>1###{$fault->faultstring}###{$fault->detail}##</p><h2 style='color:#FFFF00;' >รหัสไม่ถูกต้อง</h2>";

    //echo "SOAP Fault: (faultcode: {$fault->faultcode}, faultstring: {$fault->faultstring})";
    //session_destroy();EMP_POSITION_LEVEL
} //80000335  
	//if($emp_info["EMP_PROFESSIONAL_CODE"] == 80000171 ||  $emp_info["EMP_POSITION_CODE"] == 80000255){
	
		

       
				//++++++++++++++++++END++++++++++++++++USER FROM EOW+++++++++++++++++++++++++++++	
			
		}
			}
	   	
		?>            
					
                  
                </div><!--  row2 end -->
            </div><!--  container end -->
            
      <!--   </div> inner-bg end -->
      <!--  </div> top-content-->
       

        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
         <script src="../dist/js/sb-admin-2.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php 
	
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>JomaShop</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/font-awesome.min.css">

	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="../../assets/css/line-awesome.min.css">

	<!-- Chart CSS -->
	<link rel="stylesheet" href="../../assets/plugins/morris/morris.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<?php include '../sidebar.php' ?>
		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<!-- Page Content -->
			<div class="content container-fluid">

                <?php include '../template.php' ?>

                <div>
                    <?php
                        $n = "" ;
                        function TaoMang($n) {     
                            $arr = array();
                            for($i = 0;$i<$n;$i++) {
                            $arr[$i] = random_int(-50,150);
                            }
                            return $arr;
                        }
                        function DemSoChan($arr) {
                            $a =0;
                            foreach($arr as $value) {
                                if($value % 2 == 0) {
                                    $a++;
                                }
                            }
                            return $a;
                        }
                        function NhoHon100($arr) {
                            $a =0;
                            foreach($arr as $value) {
                                if($value <  100) {
                                    $a++;
                                }
                            }
                            return $a;
                        }
                        function TongSoAm($arr) {
                            $S =0;
                            foreach($arr as $value) {
                                if($value <  0) {
                                $S = $S + $value;
                                }
                            }
                            return $S;
                        }
                        function ViTriZeRo($arr) {
                            $vt=array();
                            $vt1= array();
                            $dem=0;
                            foreach($arr as $vitri=>$value) {
                                if($value ==  0) {
                                $vt[]=$vitri;
                                $dem++;
                                }
                            }
                            if($dem!=0){
                                $vt1= implode(' ',$vt);
                                echo "<br>Vị trí số 0 là".$vt1;
                            }
                            else{
                                echo "<br>Không có số 0";
                            }
                        }
                        function SapXepTang(&$arr) {
                            for($i=0;$i<(count($arr)-1);$i++) {
                            for($j=$i+1;$j<count($arr);$j++) {
                                if($arr[$i] > $arr[$j]) {
                                    $tam = $arr[$i];
                                    $arr[$i] = $arr[$j];
                                    $arr[$j] = $tam;
                                }
                            }

                            }
                            foreach($arr as $value) {
                                echo $value," ";
                            }
                        }
                    ?>
                    <form action="" method="post">
                        <h3>Nhập số phần tử: </h3>
                        <input type="text" name="n" value="<?php  echo $n ?>">
                        <input type="submit" value="Thực hiện" name="submit">
                        <?php 
                            if(isset($_POST['submit'])) {
                                if(isset($_POST["n"]) and $_POST["n"]==(int) $_POST["n"] and $_POST['n']>0) {
                                    $n=$_POST['n'];
                                        
                                    $mang =  TaoMang($n);
                                    echo "<br>Mảng: ";
                                    $Mang1 = implode(' ',$mang);
                                    echo $Mang1;
                                    $c = DemSoChan($mang);
                                    echo "<br>Số phần tử chẵn là ", $c;
                                    $d = NhoHon100($mang);
                                    echo "<br>Số phần tử nhỏ hơn 100 là ", $d;
                                    $e = TongSoAm($mang);
                                    echo "<br>Tổng số âm là ", $e;
                                    ViTriZeRo($mang);
                                    echo "<br>Sắp xếp tăng ";
                                    SapXepTang($mang);
                                }
                                else {
                                    echo "N không phải là số nguyên dương ";
                                }
                            }
                        ?>
                    </form>
                </div>
			</div>
			<!-- /Page Content -->

		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="../../assets/js/jquery-3.5.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="../../assets/js/jquery.slimscroll.min.js"></script>

	<!-- Chart JS -->
	<script src="../../assets/plugins/morris/morris.min.js"></script>
	<script src="../../assets/plugins/raphael/raphael.min.js"></script>
	<script src="../../assets/js/chart.js"></script>

	<!-- Custom JS -->
	<script src="../../assets/js/app.js"></script>

</body>

</html>
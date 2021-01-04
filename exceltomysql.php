<?php
require_once "Classes/PHPExcel.php";
require('fpdf.php');

        $excelReader = PHPExcel_IOFactory::createReaderForFile($_FILES['file']['tmp_name']);
        $excelObj = $excelReader->load($_FILES['file']['tmp_name']);
       // $path=$_POST['directory'];
        $worksheet = $excelObj->getSheet(0);
        $lastRow = $worksheet->getHighestRow();
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname="timetable";
        $conn = new mysqli($servername,$username,$password,$dbname);
        $i=7;
        $day = array("B"=>"monday", "C"=>"tuesday", "D"=>"wednesday", "E"=>"thursday", "F"=>"friday", "G"=>"saturday");
		for ($row = 2; $row <= $lastRow; $row++) {

			for($j='B';$j<'H';$j++)
			{
				if($worksheet->getCell($j.$row)->getValue()!=null)
				{
					$val=$worksheet->getCell($j.$row)->getValue();
					if(stripos($val,"CR"))
					{
						$cr=(substr($val,stripos($val,"CR")+3,3));
						$ans=substr($val,0,stripos($val,"CR"));
						$sql = "update ".$day[$j]." set t".$i."30='".$ans."' where cr=".$cr."";
						//echo $sql."<br>";
						$conn->query($sql);
						

					}
				}
			}$i++;
			}
			?>
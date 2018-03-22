<!DOCTYPE html>
<html>
<head>
<style>
#datas {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#datas td, #datas th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
    width: 25%;
}

#datas tr:nth-child(even){background-color: #f2f2f2;}

#datas tr:hover {background-color: #ddd;}

#datas th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>




<?php
ini_set('display_errors', 1);
require_once('connect.php');

$option = (int)$_GET["myfield"];


$selected1 = "SELECT s.fname, s.lname, g.name,g.tel_no FROM STUDENT s JOIN Guardian g ON s.studentNo= g.studentNo";

if(($is_query_run = $conn->query($selected1)) and $option === 1) 
{
	 echo '<table id="datas"> <tr><th>FNAME</th><th>LNAME</th><th>GAURDIAN_NAME</th><th>Guardian_TEL_NO</th></tr></table>';
	while($query_execute = $is_query_run->fetch_assoc()) 
	{
		 echo '<table id="datas" > <tr><td>'. $query_execute['fname'] . '</td> <td>' . $query_execute['lname'] .'</td> <td>' . $query_execute['name'] .  '</td> <td>' . $query_execute['tel_no'] . '</td></tr></table>';
	}

}

$selected2 = "SELECT l.leaseNo, l.studentNo, i.payment, i.payment_type FROM Lease l JOIN Invoice i ON l.leaseNo= i.leaseNo";

if(($is_query_run = $conn->query($selected2)) and $option === 2) 
{
	echo '<table id="datas"> <tr><th>LeaseNO</th><th>StudentNO</th><th>Payment</th><th>Payment_type</th></tr></table>';
	while($query_execute = $is_query_run->fetch_assoc()) 
	{
		 echo '<table id="datas" > <tr><td>'. $query_execute['leaseNo'] . '</td> <td>' . $query_execute['studentNo'] .'</td> <td>' . $query_execute['payment'] .  '</td> <td>' . $query_execute['payment_type'] . '</td></tr></table>';
	}

}

$selected3 = "SELECT i.flatNo, i.remarks, s.fname,s.position FROM Inspection i JOIN Staff s ON i.staffid= s.staffid";

if(($is_query_run = $conn->query($selected3)) and $option === 3) 
{
	echo '<table id="datas"> <tr><th>FlatNo</th><th>Remarks</th><th>Fname</th><th>Position</th></tr></table>';
	while($query_execute = $is_query_run->fetch_assoc()) 
	{
		 echo '<table id="datas" > <tr><td>'. $query_execute['flatNo'] . '</td> <td>' . $query_execute['remarks'] .'</td> <td>' . $query_execute['fname'] .  '</td> <td>' . $query_execute['position'] . '</td></tr></table>';
	}

}

$selected4 = "SELECT r.roomNo,r.rent, f.flatNo,f.faddr FROM Room r JOIN Flat f ON r.flatNo= f.flatNo" ;

if(($is_query_run = $conn->query($selected4)) and $option === 4) 
{
	echo '<table id="datas"> <tr><th>RoomNO</th><th>Rent</th><th>FlatNo</th><th>Faddr</th></tr></table>';
	while($query_execute = $is_query_run->fetch_assoc()) 
	{
		 echo '<table id="datas" > <tr><td>'. $query_execute['roomNo'] . '</td> <td>' . $query_execute['rent'] .'</td> <td>' . $query_execute['flatNo'] .  '</td> <td>' . $query_execute['faddr'] . '</td></tr></table>';
	}

}

$selected5 = "SELECT flatNo, rent FROM Room WHERE rent= (SELECT MIN(rent) FROM Room)" ;

if(($is_query_run = $conn->query($selected5)) and $option === 5) 
{
	echo '<table id="datas"> <tr><th>FlatNo</th><th>Rent</th></tr></table>';
	while($query_execute = $is_query_run->fetch_assoc()) 
	{
		 echo '<table id="datas"> <tr><td>'. $query_execute['flatNo'] . '</td> <td>' . $query_execute['rent'] .'</td></tr></table>';
	}

}


?>
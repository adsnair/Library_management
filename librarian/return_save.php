<?php 
	$link = mysqli_connect("127.0.0.1", "root","", "lib_management");
	$id=$_GET['id'];
	$book_id = $_GET['book_id'];
	mysqli_query($link, "update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysqli_error($link));						
	header('location:view_borrow.php');
?>	
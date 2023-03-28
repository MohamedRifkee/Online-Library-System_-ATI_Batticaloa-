<?php 

		include('connect.php');

		$ISBN=$TITLE=$LANGUAGE=$MRP=$PUB_DATE=$QUANTITY=$PUBLISHER="";

		$ISBN_ERR=$TITLE_ERR=$LANGUAGE_ERR=$MRP_ERR=$PUB_DATE_ERR=$QUANTITY_ERR=$PUBLISHER_ERR="";

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{

			//ROLL NUMBER
			if(empty(trim($_POST["ISBN"])))
			{
				$ISBN_ERR = "Kindly enter a ISBN";
			}
			else
			{
				$ISBN=$_POST["ISBN"];
			}
			//TITLE
			if (empty(trim($_POST["TITLE"]))) 
			{
				$TITLE_ERR = "Enter TITLE of a Book";
			}
			else
			{
				$TITLE=trim($_POST["TITLE"]);
			}
			//LANGUAGE
			if (empty(trim($_POST["LANGUAGE"]))) 
			{
				$LANGUAGE_ERR = "Enter LANGUAGE of a Book";
			}
			else
			{
				$LANGUAGE=trim($_POST["LANGUAGE"]);
			}
			//PUBLISHER
			if (empty(trim($_POST["PUBLISHER"]))) 
			{
				$PUBLISHER_ERR = "Enter PUBLISHER of a Book";
			}
			else
			{
				$PUBLISHER=trim($_POST["PUBLISHER"]);
			}
			//MRP
			if (empty(trim($_POST["MRP"]))) 
			{
				$MRP_ERR= "Enter Price of Book";
			}
			else
			{
				$MRP=trim($_POST["MRP"]);
			}
			//PUB_DATE
			if (empty(trim($_POST["PUB_DATE"]))) 
			{
				$PUB_DATE_ERR= "Enter Published Date of Book";
			}
			else
			{
				$PUB_DATE=trim($_POST["PUB_DATE"]);
			}
			//QUANTITY
			if (empty(trim($_POST["QUANTITY"]))) 
			{
				$QUANTITY_ERR= "Please select quantity of book";
			}
			else
			{
				$QUANTITY=trim($_POST["QUANTITY"]);
			}
			
			if (empty($ISBN_ERR) &&empty($TITLE_ERR) &&empty($LANGUAGE_ERR)&&empty($MRP_ERR)&&empty($QUANTITY_ERR)&&empty($PUB_DATE_ERR)) 
			{
				$query1="INSERT INTO book(ISBN,TITLE,LANGUAGE,PUBLISHER,MRP,PUB_DATE,QUANTITY)VALUES('$ISBN','$TITLE','$LANGUAGE','$PUBLISHER',$MRP,'$PUB_DATE',$QUANTITY)";
				mysqli_query($conn,$query1);
			}
			mysqli_close($conn);
		}
		?>
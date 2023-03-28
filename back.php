<?php
require_once('connect.php');
session_start();
include 'header.php';
include('navbar.php');?>

<div class="main-content-inner">
<div class="row">
<div class="col-12">
            <div class="card mt-5">
                <div class="card-body table-responsive">
	
	<table class="table table-striped text-center">
	  <thead>
	    <tr>
	      <th scope="col">ISBN</th>
	      <th scope="col">TITLE</th>
	      <th scope="col">AVAILABILITY</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
            if(isset($_POST['searchquery']) && $_POST['searchquery'] != ""){
			$searchquery = preg_replace('#[^a-z 0-9?!]#i', '', $_POST['searchquery']);
			$query = "(SELECT * FROM book WHERE TITLE LIKE '%$searchquery%') UNION (SELECT * FROM book WHERE ISBN IN (SELECT ISBN FROM written WHERE AUTH_ID IN (SELECT AUTH_ID FROM author WHERE AUTH_NAME LIKE '%$searchquery%')))";
	
			}
			else
			{
				echo "0 Results";
			}
            if(!($result = mysqli_query($conn,$query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){
                	if(!empty($row["ISBN"]))
                	{
                		echo "<tr><td>".$row["ISBN"]."</td><td>".$row["TITLE"]."</td><td>".$row["QUANTITY"]."</td></tr>";
                	}
                    
                }
            }
            else{

                echo "0 Results";
            }

            mysqli_close($conn)?>
        </tbody>
	</table>
</div>
</div>
</div>
</div>
</div>
<?php include('footer.php');?>
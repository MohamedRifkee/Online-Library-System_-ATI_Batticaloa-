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
	<?php echo "<h3>All books currently issued by ".$_SESSION['key']." :</h3>" ?>
	<table class="table table-striped text-center">
	  <thead>
	    <tr>
	      <th scope="col">Book ID</th>
	      <th scope="col">Book Title</th>
	      <th scope="col">Fine</th>
	    </tr>
	  </thead>
	  <tbody>
		<?php 
            include('connect.php');
            $a=$_SESSION['key'];
			$query="SELECT * FROM book,issued_books WHERE book.ISBN = issued_books.ISBN AND student_rollno=$a";

            if(!($result = mysqli_query($conn,$query))){

                echo "Retrieval of data from database failed".mysql_error();
            }
            if(mysqli_num_rows($result)>0){

                while ($row=mysqli_fetch_assoc($result)){

                    echo "<tr><td>".$row["ISBN"]."</td><td>".$row["TITLE"]."</td><td>".$row["FINE"]."</td></tr>";
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
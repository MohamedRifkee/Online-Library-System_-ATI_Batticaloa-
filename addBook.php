<?php
require_once('connect.php');
session_start();
include 'header.php';
include('navbar.php');
?>
<div class="main-content-inner">
	<div class="row">
		<div class="col-12">
    		<div class="card mt-5">
                <h2 class="card-header">Add Book</h2>
		        <div class="card-body">
		        	<form class="needs-validation" novalidate action="bookauthenticate.php" method="post">
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">ISBN</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="ISBN" name="ISBN" required>
                                <div class="valid-feedback">
                                    <?php echo $ISBN_ERR; ?>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">TITLE</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="TITLE" name="TITLE" required>
                                <div class="valid-feedback">
                                    <?php echo $TITLE_ERR; ?>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">LANGUAGE</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="LANGUAGE" name="LANGUAGE" required>
                                <div class="valid-feedback">
                                    <?php echo $LANGUAGE_ERR; ?>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">MRP</label>
                                <input type="number" min="0" class="form-control" id="validationCustom01" placeholder="MRP" name="MRP" required>
                                <div class="valid-feedback">
                                    <?php echo $MRP_ERR; ?>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">PUBLISHER</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="PUBLISHER" name="PUBLISHER" required>
                                <div class="valid-feedback">
                                    <?php echo $PUBLISHER_ERR; ?>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">PUB_DATE</label>
                                <input type="date" class="form-control" id="validationCustom01" placeholder="PUB_DATE" name="PUB_DATE" required>
                                <div class="valid-feedback">
                                    <?php echo $PUB_DATE_ERR; ?>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">QUANTITY</label>
                                <input type="number" min="0" class="form-control" id="validationCustom01" placeholder="QUANTITY" name="QUANTITY" required>
                                <div class="valid-feedback">
                                    <?php echo $QUANTITY_ERR; ?>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>

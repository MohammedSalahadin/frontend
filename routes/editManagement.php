<?php
    $MgtCompName = array(
        "Hotel XYZ" => array("","",""),
        "ABC Inc."  => array("","",""),
        "Sample Co."  => array("","","")
        );

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <title>Falcontrac</title>
</head>
<body>
<?php require('../components/navbar.php') ?>

<?php require('../components/menu.php') ?>
<main class="pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header fw-bold text-center text-uppercase bg-light">Edit Management Company</div>
                    <div class="card-body bg--primary">
                        <form name="" action="editManagement.php" method="POST">
                            <div class="form-group row px-4 my-2">
                                <label for="mgtCompanyName" class="col-md-4 col-form-label text-md-right">Management Company</label>
                                <div class="col-md-8 px-0 d-flex justify-content-between">
                                    <select class="form-select bg-light" name="editCompany" id="editCompany">
                                        <option selected>Choose</option>
                                        <?php
                                            foreach($MgtCompName as $key => $value) {
                                        ?>
                                        <option><?php echo $key; ?></option>
                                                <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center px-4 my-2">
                                <label for="mgtCompanyName" class="justify-content-start col-md-4 col-form-label text-md-right">Management Company Name</label>
                                <div class="col-md-8 px-0">
                                    <input type="text" id="mgtCompanyName" class="form-control rounded-0 bg-light" name="mgtCompanyName" >
                                </div>
                            </div>

                            <div class="form-group row px-4 my-2">
                                <label for="shippingAddress" class="col-md-4 col-form-label text-md-right">Shipping Address</label>
                                <div class="col-md-5 px-0 d-flex justify-content-between">
                                    <select class="form-select bg-light">
                                        <option selected></option>
                                        <option value="a">AA</option>
                                        <option value="b">AB</option>
                                        <option value="c">AC</option>
                                    </select>
                                </div>
                                <div class="col-md-2 d-flex">
                                    <button type="button" class="btn btn-primary btn-addModal" data-bs-toggle="modal" data-bs-target="#addAddress">Add</button>
                                    <!-- add address Modal -->
                                    <?php  require('addShippingAddressModal.php')?>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAddress">Edit</button>
                                    <!-- edit address Modal -->
                                    <?php  require('editShippingAddressModal.php')?>
                                </div>   
                            </div>   

                            <div class="form-group row px-4 my-2">
                                <label for="billingAddress" class="col-md-4 col-form-label text-md-right">Billing Address</label>
                                <div class="col-md-5 px-0">
                                    <select class="form-select bg-light">
                                        <option selected></option>
                                        <option value="a">AA</option>
                                        <option value="b">AB</option>
                                        <option value="c">AC</option>
                                    </select>
                                </div> 

                            <div class="form-group row px-4 my-2">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">Main Phone</label>
                                <div class="col-md-4 px-0">
                                    <input type="text" id="tel" class="form-control rounded-0 bg-light" name="tel">
                                </div>
                            </div>

                            <div class="form-group row px-4 my-2">
                                <label for="fax" class="col-md-4 col-form-label text-md-right">Fax</label>
                                <div class="col-md-4 px-0">
                                    <input type="text" id="fax" class="form-control rounded-0 bg-light" name="fax">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center px-4 my-2">
                                <label for="url" class="col-md-4 col-form-label text-md-right">Web Address</label>
                                <div class="col-md-8 px-0">
                                    <input type="text" id="url" class="form-control rounded-0 bg-light" name="url">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center px-4 my-2">
                                <label for="" class="col-md-4 col-form-label">Notes</label>
                                <div class="col-md-8 px-0">
                                    <textarea class="form-control rounded-0 bg-light" name="comment" placeholder=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-8 mx-auto offset-md-4 text-center">
                                <button type="submit" class="btn btn-primary">
                                Save Company Details
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="../assets/js/myjquery.js"></script>
<script src="../assets/js/falcon.js"></script>

</body>
</html>
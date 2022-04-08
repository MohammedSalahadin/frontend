<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

    <title>Falcontrac</title>
    <link rel="stylesheet" href="../../../assets/css/font-awesome.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.css"> -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
    <link rel="stylesheet" href="../../../assets/css/widgets.css">
    <link href="../../../assets/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../../assets/css/daterangepicker.css" />
    <!-- site font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="icon" href="../../../assets/images/favicon.png">

</head>

<body>
    <?php
    require_once '../../../components/navbar.php';
    ?>


    <main class="pt-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header fw-bold text-center text-uppercase bg-light">Edit User</div>
                        <div class="card-body bg--primary">
                            <form name="" action="" method="get">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-primary" type="button">Choose User</button>
                                    </div>
                                    <div class="col form-gourp d-flex justify-content-end">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <!-- First Col -->
                                    <div class="col col-4">
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="userName" class="justify-content-start  col-form-label text-md-right"> User Name:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="userName" class="form-control rounded-0 bg-light" name="userName" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="lastLoginDate" class="justify-content-start  col-form-label text-md-right"> Last Login Date:</label>
                                            <div class="col-md-10 px-0">
                                                <input disabled type="text" id="lastLoginDate" class="form-control rounded-0 bg-light" name="lastLoginDate" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="managementCompanyName" class="justify-content-start  col-form-label text-md-right">Management Company Name:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="managementCompanyName" class="form-control rounded-0 bg-light" name="managementCompanyName" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="firstName" class="justify-content-start  col-form-label text-md-right"> First Name:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="firstName" class="form-control rounded-0 bg-light" name="firstName" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="lastName" class="justify-content-start  col-form-label text-md-right"> Last Name:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="lastName" class="form-control rounded-0 bg-light" name="lastName" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="email" class="justify-content-start  col-form-label text-md-right"> Email Address:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="email" class="form-control rounded-0 bg-light" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="maintinanceEmail" class="justify-content-start  col-form-label text-md-right">Maintenance Email:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="maintinanceEmail" class="form-control rounded-0 bg-light" name="maintinanceEmail" required>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left px-1">
                                            <label for="timeIDCard" class="justify-content-start  col-form-label text-md-right">Time ID Card:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="timeIDCard" class="form-control rounded-0 bg-light" name="timeIDCard" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Col -->
                                    <div class="col col-4">

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="UserGroup" class="justify-content-start col-form-label text-md-right"> User Group:</label>
                                            <div class="col-md-10 px-0">
                                                <select class="form-select bg-light" name="UserGroup" id="UserGroup">
                                                    <option selected>Select Group</option>
                                                    <option value="c-pManager">Group 1</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="securityRole" class="justify-content-start  col-form-label text-md-right">Security Role :</label>
                                            <div class="col-md-10 px-0">
                                                <select class="form-select bg-light" name="securityRole" id="securityRole">
                                                    <option selected>Select Role</option>
                                                    <option value="e-g">Employee Guard</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="address" class="justify-content-start  col-form-label text-md-right"> Address:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="address" class="form-control rounded-0 bg-light" name="address" required>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="cityStateZip" class="justify-content-start col-form-label text-md-right"> City State Zip:</label>
                                            <div class="px-0">
                                                <div class="row col-10" id="cityStateZip">
                                                    <div class="col col-4 ">
                                                        <input type="text" id="city" class="form-control rounded-0 bg-light" name="city" required>
                                                    </div>
                                                    <div class="col col-4 ">
                                                        <select class="form-select bg-light" name="state" id="state">
                                                            <option selected value="tx">TX</option>
                                                            <option value="ak">AK
                                                            <option>
                                                        </select>
                                                    </div>
                                                    <div class="col col-4">
                                                        <input type="text" id="zip" class="form-control rounded-0 bg-light" name="zip" required>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="phoneNumber" class="justify-content-start  col-form-label text-md-right"> Phone Number:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="phoneNumber" class="form-control rounded-0 bg-light" name="phoneNumber" required>
                                            </div>
                                        </div>

                                        <div class="form-group row justify-content-left px-1">
                                            <label for="cellNumber" class="justify-content-start  col-form-label text-md-right"> Cell Number:</label>
                                            <div class="col-md-10 px-0">
                                                <input type="text" id="cellNumber" class="form-control rounded-0 bg-light" name="cellNumber" required>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Theird Col -->
                                    <div class="col col-4">
                                        <div class="form-group row justify-content-center px-1">
                                            <img src="../../../assets/images/user.png" style="max-width: 250px; border: 1px solid;" alt="User image">
                                        </div>
                                        <div class="form-group row justify-content-left pt-2">
                                            <input type="file" name="userAvatar">
                                            <input type="hidden" name="imageName" value="userAvatar">
                                        </div>
                                        <div class="form-group row justify-content-left pt-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="allowSecurityAssignments" name="allowSecurityAssignments">
                                                <label class="form-check-label" for="allowSecurityAssignments">
                                                    Allow Security Assignments
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="allowParkingAssignments" name="allowParkingAssignments">
                                                <label class="form-check-label" for="allowParkingAssignments">
                                                    Allow Parking Assignments
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="allowMaintinanceAssignments" name="allowMaintinanceAssignments">
                                                <label class="form-check-label" for="allowMaintinanceAssignments">
                                                    Allow Maintinance Assignments
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="allowUserToViewGPSData" name="allowUserToViewGPSData">
                                                <label class="form-check-label" for="allowUserToViewGPSData">
                                                    Allow User to View GPS data
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-left">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="allowEmails" name="allowEmails">
                                                <label class="form-check-label" for="allowEmails">
                                                    Allow Emails
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="row pt-3 d-flex justify-content-center">
                                    <div class="col p-2">
                                        <button type="submit" class="col btn btn-primary d-flex justify-content-center">
                                            Save
                                        </button>
                                    </div>
                                    <div class="col p-2">
                                        <button type="submit" class="col btn btn-primary d-flex justify-content-center">
                                            Reset Password
                                        </button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
     -->
    <script src="../../../assets/js/jquery.min.js"></script>
    <script src="../../../assets/js/bootstrap.js"></script>
    
    <script src="js/myquery.js"></script>

</body>

</html>
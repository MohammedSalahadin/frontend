<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">

    <title>Falcontrac</title>
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/widgets.css">
    <link href="css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css" />
    <!-- site font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="../monitor.php">
                <img src="images/logo.jpg" alt="" class="nav-logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Issues
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sub menu</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Properites
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sub menu</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reporting
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">All Reports</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Users
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sub menu</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            System
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sub menu</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Management
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">sub menu</a>
                            <a class="dropdown-item" href="#">sub menu</a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/user-avatar.jpg" class="user-avatar" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Account Settings</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="report-section">

        <div class="report">
            <div class="col-12">
                <div class="report-title">
                    <h4>Reporting</h4>
                </div>
                <div class="forms">
                    <div class="row mb-4">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Choose Report</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="report_name">
                                    <option value="0">Choose Report</option>
                                    <option value="all_properties">All properites List</option>
                                    <option value="checkpoint_report">Checkpoints List</option>
                                    <option value="checkpoint_summary">Checkpoints Summary Report</option>
                                    <option value="checkpoint_timeline">Checkpoints Timeline Report</option>
                                    <option value="daily_activity">Daily Acivites Report</option>
                                    <option value="daily_activity_compact">Daily Acivity Report(compact)</option>
                                    <option value="daily_activity_grouped">Daily Acivity Report(Grouped)</option>
                                    <option value="issues_history">Issues History (with notes) </option>
                                    <option value="issues_history_without_notes">Issues History (without notes)
                                    </option>
                                    <option value="issues_summary_report">Issues Summary Report</option>
                                    <option value="issues_summary_report_top_10">Issues Summary Report Top 10</option>
                                    <option value="login_history_customers">Login History of Customers</option>
                                    <option value="login_history_employee">Login History of Employees</option>
                                    <option value="issue_time_slice">New Issues Timeslice</option>
                                    <option value="properity_profile">Propery Profile</option>
                                    <option value="property_task">Propery Tasks Report</option>
                                    <option value="registered_devices">Registred Devices</option>
                                    <option value="resident_list">Resident List</option>
                                    <option value="user_notification">User Notification</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-section">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Users Table Model Start -->
    <div class="modal fade" id="user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="user-form mb-3">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Search First/Last/Username</label>
                                    <input type="name" class="form-control" name="user_name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">Management Company</label>
                                    <select class="form-control" id="exampleFormControlSelect1"
                                        name="company_management">
                                        <option value="">choose</option>
                                        <option value="facebook">facebook</option>
                                        <option value="twitter">twitter</option>
                                        <option value="youtube">youtube</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Include</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input user_type" type="checkbox" id="inlineCheckbox1"
                                            value="Guards" name="user_type">
                                        <label class="form-check-label" for="inlineCheckbox1">Guards</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input user_type" type="checkbox" id="inlineCheckbox2"
                                            value="admin" name="user_type">
                                        <label class="form-check-label" for="inlineCheckbox2">Sup/Admins</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input user_type" type="checkbox" id="inlineCheckbox2"
                                            value="dispatcher" name="user_type">
                                        <label class="form-check-label" for="inlineCheckbox2">Dispatcher</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input user_type" type="checkbox" id="inlineCheckbox2"
                                            value="customer" name="user_type">
                                        <label class="form-check-label" for="inlineCheckbox2">Customers</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input user_type" type="checkbox" id="inlineCheckbox2"
                                            value="inactive" name="user_type">
                                        <label class="form-check-label" for="inlineCheckbox2">Inactive</label>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="user-table">
                        <table class="table table-striped" id="users">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"></th>
                                    <th scope="col">name</th>
                                    <th scope="col">type</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody id="testBody"></tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Users Table Model end -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>
    <!-- jquery Code Start -->
    <script>
    $(document).ready(function() {
        $("select[name='report_name']").change(function() {
            var report_val = this.value;
            if (report_val != 0) {
                $(".form-section").html(" ");
                $(".form-section").append("<img src='images/loader.gif'  width='300px'/>");
                $.get("reports_forms/" + report_val + ".php", function(data,
                    status) {
                    $(".form-section").html(data);
                }).fail(function() {
                    alert('woops!! Something went wrong !!'); // or whatever
                    $(".form-section").html(" ");
                    $(".form-section").append(
                        "<div class='alert alert-danger' role='alert'>Something went wrong, please try again later !!</div>"
                    );
                });
            }

        });
    });
    </script>
    <script type="text/javascript">
    // users original array
    const users_arr = [{
            id: 1,
            title: "ahmed magdi",
            user_type: "Guards",
            status: "active",
            image: "images/user-avatar.jpg",
            company: "none",
        },
        {
            id: 2,
            title: "Mohammed Omer",
            user_type: "Guards",
            status: "active",
            image: "images/1.png",
            company: "none",
        },
        {
            id: 3,
            title: "Kamal Ali",
            user_type: "Guards",
            status: "active",
            image: "images/2.png",
            company: "none",
        },
        {
            id: 4,
            title: "Rodwan samih",
            user_type: "admin",
            status: "active",
            image: "images/3.png",
            company: "none",
        },
        {
            id: 5,
            title: "Mahmoud khalil",
            user_type: "admin",
            status: "active",
            image: "images/4.png",
            company: "none",
        },
        {
            id: 6,
            title: "baraa eisa",
            user_type: "customer",
            status: "inactive",
            image: "images/user-avatar.jpg",
            company: "twitter",
        },
        {
            id: 7,
            title: "sami massik",
            user_type: "customer",
            status: "active",
            image: "images/4.png",
            company: "twitter",
        },
        {
            id: 8,
            title: "rwda gadir",
            user_type: "dispatcher",
            status: "inactive",
            image: "images/3.png",
            company: "none",
        },
        {
            id: 9,
            title: "Mahmoud mohammed",
            user_type: "customer",
            status: "active",
            image: "images/2.png",
            company: "twitter",
        },
        {
            id: 10,
            title: "ahmed farah",
            user_type: "customer",
            status: "active",
            image: "images/2.png",
            company: "twitter",
        },
        {
            id: 11,
            title: "Kamal Ali",
            user_type: "customer",
            status: "active",
            image: "images/user-avatar.jpg",
            company: "facebook",
        },
        {
            id: 12,
            title: "Omer alghali",
            user_type: "customer",
            status: "active",
            image: "images/1.png",
            company: "facebook",
        },
        {
            id: 13,
            title: "magdi azez",
            user_type: "customer",
            status: "active",
            image: "images/2.png",
            company: "youtube",
        },
        {
            id: 14,
            title: "gadir ali",
            user_type: "customer",
            status: "inactive",
            image: "images/3.png",
            company: "youtube",
        },
    ];

    // empty array to store filtred array
    var filtred_array = [];

    // starting with push all array to the table
    this.push_to_table(users_arr);

    // keyup event when user input characters on user_name field
    $("input[name='user_name']").keyup(function() {
        var user_name = this.value;
        filterByName(user_name);
    });

    //store checked boxes in array , dispatch when user checked
    $("input[name='user_type']").change(function() {
        var userTypesSelected = [];
        $("input[name='user_type']:checked").each(function() {
            userTypesSelected.push($(this).val());
        });
        filterByUserType(userTypesSelected);
    });

    // management company
    $("select[name='company_management']").change(function() {
        var select_val = this.value;

        if (select_val === "") {
            $("input:checkbox[name=user_type]").each(function() {
                $(this).prop('checked', false);
            });
            filtred_array.length = 0
            push_to_table(users_arr);
        } else {
            filterByCompany(select_val);
        }
    });


    // set selected user in user input
    function set_selected(param) {
        $("input[name='user_name']").val(param);
    }

    // reset user input
    function reset_user_input() {
        $("input[name='user_name']").val(" ");
    }

    // filter methods ...... start

    // 1- first method {filter by first / last / username}
    // - first check if filtred array is empty
    // - if filtred array empty , will filter in original array {users_arr}
    // - else will fillter in filtred array

    const filterByName = (query) => {
        if (filtred_array.length > 0) {
            var filtred_arr = filtred_array.filter(el => el.title.toLowerCase().indexOf(query.toLowerCase()) !== -
                1);
        } else {
            var filtred_arr = users_arr.filter(el => el.title.toLowerCase().indexOf(query.toLowerCase()) !== -1);
        }

        return push_to_table(filtred_arr);;
    }


    // 2- second method {filter by user type / guards / dispatcher ...}
    // - first make filtred array empty !!;
    // - then filter the original array {users_arr}
    // - foreach to push element from {users_arr} to filtred array
    // - if any of checkbox not checked , it will return original array (users_arr)
    // - if checked any box will return filtred array

    const filterByUserType = (userTypesSelected) => {
        filtred_array.length = 0
        var getUserTypes = users_arr.filter(function(users) {
            return userTypesSelected.indexOf(users.user_type) > -1 || userTypesSelected.indexOf(users
                .status) > -1;
        });
        getUserTypes.forEach(push_to_array);

        function push_to_array(item) {
            filtred_array.push(item);
        }

        if (filtred_array.length === 0) {
            this.push_to_table(users_arr);
        } else {
            this.push_to_table(filtred_array);
        }

        return filtred_array;
    }


    // 3- third method {filter by company / facebook / twitter ...}

    // - first make filtred array empty !!.
    // - then filter the original array {users_arr}.
    // - foreach to push element from {users_arr} to filtred array.
    // - get all checkbox values.
    // - first : pick the checkbox has customer value and checked.
    // - second : unchecked other checkbox.

    const filterByCompany = (query) => {
        filtred_array.length = 0;
        var filtred_arr = users_arr.filter(el => el.company.toLowerCase().indexOf(query.toLowerCase()) !== -1);
        filtred_arr.forEach(push_to_array);

        function push_to_array(item) {
            filtred_array.push(item);
        }
        $("input:checkbox[name=user_type]").each(function() {
            if ($(this).val() === "customer") {
                $(this).prop('checked', true);
            } else {
                $(this).prop('checked', false);
            }
        });
        return push_to_table(filtred_array);
    }


    // 4- forth method {push data to table}

    // - this method responsible from push data to users table.
    // - first make {tbody} in table empty.
    // - second get array , and push to the table by foreach.
    // - insertRow to add new {tr} html tag.
    // - insertCell to add new {td} html tag.
    // - innerHTML to html element between {td} element.

    function push_to_table(arr) {
        $("#testBody").html("");
        const table = document.getElementById("testBody");

        arr.forEach(users => {
            let row = table.insertRow();

            let id = row.insertCell(0);
            id.innerHTML = users.id;

            var image_tag = "<img src=" + users.image + " class='user-avatar'>";
            let image = row.insertCell(1);
            image.innerHTML = image_tag;

            let title = row.insertCell(2);
            title.innerHTML = users.title;

            let user_type = row.insertCell(3);
            user_type.innerHTML = users.user_type;

            let status = row.insertCell(4);
            status.innerHTML = users.status;

            let company = row.insertCell(5);
            company.innerHTML = users.company;

            var action_btn =
                "<button class='btn btn-success btn-sm user_name_btn' data-dismiss='modal'  aria-label='Close'  onclick=\'set_selected(\"" +
                users.title +
                "\")\'   ><i class='fa fa-check'></i></button>";
            let action = row.insertCell(6);
            action.innerHTML = action_btn;
        });
    }
    </script>


    <!-- jquery Code end -->
</body>

</html>
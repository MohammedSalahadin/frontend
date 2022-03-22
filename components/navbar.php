<nav class="navbar navbar-light px-5 ">
    <div class="container-fluid">
        <a class="navbar-brand logo"><img src="<?=$global->SITE_URL?>/assets/images/logo.png" alt=""></a>
        <div>
            <div class="d-flex my-3">

                <button class="btn mx-3 rounded btn-primary ">
                    issue monitor
                </button>
                 <a href="<?=$actual_link?>/logout.php">
                     <button  class=" btn mx-3 rounded btn-primary">
                         logout
                     </button>

                 </a>
                <button class="btn mx-3 rounded btn-primary">
                    help
                </button>
            </div>
            <div class="LoggedinAdminName mx-3">
                <p>USer: (A) <?=$_SESSION['user']->userName?></p>
                <p>ID: <?=$_SESSION['user']->userId?></p>
            </div>
        </div>
    </div>
</nav>
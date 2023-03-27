<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quantanics Login</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/client.css">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php require_once "Header.php"; ?>

    <div class="container">

        <!-- icon header -->
        <div class="row">
            <div class="col-lg-5 col-md-4 "></div>
            <div class="col-lg-2 col-md-4 col-sm-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true"><i class="fa fa-mortar-board fa-2x"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false"><i class="fa fa-vcard fa-2x"></i></button>
                    </li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-4 "></div>
        </div>
        <!-- jumbotron file -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Student Login ehhhhhhhhhhh</h2>
                            <br>
                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" id="form2Example11 reg_no" name="reg_no" class="input"
                                        placeholder=" " />
                                    <label for="form2Example11" class="placeholder label">Register No </label>
                                </div>
                            </div>

                            <div class="m-3">
                                <div class="form-outline mb-4 input-container">
                                    <input type="text" name="sdate" id="form2Example22" class="input" placeholder=" "
                                        onfocus="datefun()" onblur="hideDatePicker()" />
                                    <label for="form2Example22" class="placeholder">Date of Birth</label>
                                </div>
                            </div>

                            <div class="row m-3">
                                <div class="col-6"><a href="">Create An Account?</a></div>
                                <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="">Forgot
                                        Password?</a></div>
                            </div>

                            <div class="m-3">
                                <input type="submit" value="Login"
                                    class="btn btn-lg border-2 border border-info  rounded text-info"
                                    style="width:100%;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="jumbotron border border-2 border border-info rounded rounded-o shadow shadow-md">
                            <br>
                            <h2 class="text-center text-success ">Admin Login</h2>
                            <br>
                            <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                    <input type="text" id="form2Example11 reg_no" name="reg_no" class="input"
                                        placeholder=" " />
                                    <label for="form2Example11" class="placeholder label">Enter User Id</label>
                                </div>
                            </div>

                            <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                    <input type="text" id="form2Example11 reg_no" name="reg_no" class="input"
                                        placeholder=" " />
                                    <label for="form2Example11" class="placeholder label">Enter Password</label>
                            </div>

                            <div class="row m-3">
                                <div class="col-6"><a href="">Create An Account?</a></div>
                                <div class="col-6" style="display:flex;flex-direction:row-reverse;"><a href="">Forgot
                                        Password?</a></div>
                            </div>

                            <div class="m-3">
                                <input type="submit" value="Login"
                                    class="btn btn-lg border-2 border border-info  rounded text-info"
                                    style="width:100%;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>

    </div>



    <?php require_once "Footer.php"; ?>


    <script>
        function datefun() {
            var date = document.getElementById("form2Example22");
            date.type = "date";
        }

        function hideDatePicker() {
            var date = document.getElementById("form2Example22");
            if (date.value === "") {
                date.type = "text";
            }
        }
    </script>




</body>

</html>
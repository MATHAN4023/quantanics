<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insertnship Registeration</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/client.css">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/inter_register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
    <?php require_once "Header.php"; ?>
    <div class="container mb-4">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <!-- <form  action="<?php echo base_url('public/index.php/Intern_controller/demo_reg'); ?>" method="post" enctype="multipart/form-data"> -->
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-interval="false">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-info text-center">Intern Registeration</h2>
                                <br>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="form2Example11" name="reg_no" class="input" placeholder=" " onblur="Alphanumeric()" />
                                        <label for="form2Example11" class="placeholder label">Register No </label>
                                        <span id="studentUid_err"></span>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="reg_name" name="Enter Name" class="input" placeholder=" " onblur="validateName()" />
                                        <label for="reg_name" class="placeholder label">Enter Name</label>
                                        <span id="name_err"></span>
                                        <!-- form2Example11 Enter Name -->
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="form2Example11 email_id" name="email_id" class="input" placeholder=" " />
                                        <label for="form2Example11" class="placeholder label">Enter Email ID</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="form2Example11 dept" name="dept" class="input" placeholder=" " />
                                        <label for="form2Example11" class="placeholder label">Enter Department</label>
                                    </div>
                                </div>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="form2Example11 mobile" name="mobile" class="input" placeholder=" " />
                                        <label for="form2Example11" class="placeholder label">Enter Mobile</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container ">
                                        <input type="text" id="form2Example11 clg_name" name="clg_name" class="input" placeholder=" " />
                                        <label for="form2Example11" class="placeholder label">Enter College Name</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" id="form2Example11 Enter Year" name="Enter Year" class="input" placeholder=" " />
                                        <label for="form2Example11" class="placeholder label">Enter Year</label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click" style="width:100%">Next</button>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-center text-info">Second Page</h2>
                                <br>
                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="inputFile" id="InputFile" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Resume</label>
                                        <div class="pin" id="Pin"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="ipfile" id="IpFile" class="hidden form-control form-control-md">
                                        <span class="label_txt">Resume Lesser then 2KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>

                                </div>

                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="inputFile" id="InputFile1" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Bonafide</label>
                                        <div class="pin" id="Pin1"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="ipfile " id="IpFile1" class="hidden form-control form-control-md">
                                        <span class="label_txt">Bonafide Lesser then 2KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>

                                <div class="m-3">

                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="inputFile" id="InputFile2" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Id
                                            Card</label>
                                        <div class="pin" id="Pin2"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="ipfile" id="IpFile2" class="hidden form-control form-control-md">
                                        <span class="label_txt">ID Card Lesser then 2KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>


                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="inputFile" id="InputFile4" class="input" placeholder=" " readonly>
                                        <label for="form2Example11" class="placeholder label">Profile</label>
                                        <div class="pin" id="Pin4"><i class="fa-solid fa-paperclip pin-icon"></i></div>
                                        <input type="file" name="ipfile" id="IpFile4" class="hidden form-control form-control-md">
                                        <span class="label_txt">Profile Lesser then 2KB and its only pdf , jpg, jpeg
                                            aceept</span>
                                    </div>
                                    <br>
                                </div>
                                <div class="row m-3">
                                    <div class="col-lg-3 col-md-2 col-sm-1">
                                    </div>
                                    <div class="col-lg-6 col-md-8 col-sm-10 button-next-back d-flex">
                                        <button class="btn btn-lg mx-auto border border-2 border-primary rounded text-primary back_btn">Back</button>
                                        <button class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click">Next</button>
                                    </div>
                                    <div class="col-lg-3 col-md-2 col-sm-1"></div>
                                </div>
                            </div>
                        </div>



                        <div class="carousel-item">
                            <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                                <br>
                                <h2 class="text-center text-info">Third Page</h2>
                                <br>
                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="sdate" id="form2Example22" class="input date " placeholder=" " onfocus="datefun()" onblur="hideDatePicker()" />
                                        <label for="form2Example22" class="placeholder  label">Start Date</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <div class="form-outline mb-4 input-container">
                                        <input type="text" name="sdate" id="form2Example23" class="input date" placeholder=" " onfocus="datefun1()" onblur="hideDatePicker1()" />
                                        <label for="form2Example23" class=" placeholder  label">End Date</label>
                                    </div>
                                </div>

                                <div class="m-3">
                                    <select class="form-select" aria-label="Default select example" name="domain" id="domain">
                                        <option selected disabled>Select Domain</option>
                                        <option value="Web">Web</option>
                                        <option value="App">App</option>
                                        <option value="IOT">IOt</option>
                                    </select>
                                </div>

                                <div class="row m-3">
                                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                                    <div class="col-lg-6 col-md-6 col-sm-10 button-next-back d-flex ">
                                        <button class="btn btn-lg border border-2 border-primary rounded text-primary back_btn">Back</button>
                                        <input type="submit" value="Insert" class="btn btn-lg border border-2 border-info rounded text-info inter_register_btn">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-1"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <?php require_once "Footer.php"; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script>
    <script>
        // next button function
        $(document).on('click', '.next_click', function(event) {
            event.preventDefault();
            var get_tmp_index = $('.next_click');
            var get_index = get_tmp_index.index($(this));
            // alert(get_index);
            $('.carousel').carousel('next');
            $('.carousel').carousel({
                interval: false
            });
        });

        // previous button function
        $(document).on('click', '.back_btn', function(event) {
            event.preventDefault();
            $('.carousel').carousel('prev');
        })


        // ajax insertion intership registeration
        // $(document).on('click','.inter_register_btn',function(event){
        //     event.preventDefault();
        //     // alert('hi');
        //     var regno = $('#reg_no').val();
        //     var sname = $('#sname').val();
        //     var email_id = $('#email_id').val();
        //     var dept = $('#dept').val();
        //     var mobile = $('#mobile').val();
        //     var clg_name = $('#clg_name').val();
        //     var year = $('#syear').val();
        //     var st_date = $('#sdate').val();
        //     var ed_date = $('#edate').val();
        //     var domain = $('#domain').val();

        //     const resume_file = document.getElementById('resume_file').files[0];
        //     const bonafide_file = document.getElementById('bonafide_file').files[0];
        //     const id_card_file = document.getElementById('id_card_file').files[0];
        //     const profile_img = document.getElementById('profile_img').files[0];

        //     console.log("files");
        //     console.log(resume_file);
        //     console.log(bonafide_file);
        //     console.log(id_card_file);
        //     console.log(profile_img);
        //     console.log(regno);

        //     $.ajax({
        //         url:"<?php echo base_url('public/index.php/Intern_controller/demo_reg'); ?>",
        //         method:"POST",

        //         data:{
        //             regno:regno,
        //             sname:sname,
        //             email_id:email_id,
        //             dept:dept,
        //             mobile:mobile,
        //             clg_name:clg_name,
        //             year:year,
        //             st_date:st_date,
        //             ed_date:ed_date,
        //             domain:domain,
        //             resume_file:resume_file,
        //             bonafide_file:bonafide_file,
        //             id_card_file:id_card_file,
        //             profile_img:profile_img,

        //         },
        //         processData: false,
        //         contentType: false,
        //         cache: false,
        //         // data:new FormData(this),
        //         success:function(res){
        //             console.log("Intern Register Ajax");
        //             console.log(res);

        //         },
        //         error:function(er){
        //             console.log("Intern Registeration Error");
        //             console.log(er);
        //         }
        //     });


        // });




        $(document).ready(function() {
            $("#Pin").click(function() {
                $("#IpFile").trigger("click");
            });
            $("#IpFile").change(function() {
                $("#InputFile").val($("#IpFile")[0].files[0].name);
                //alert($("#IpFile")[0].files[0].name);

            });

            $("#Pin1").click(function() {
                $("#IpFile1").trigger("click");
            });
            $("#IpFile1").change(function() {
                $("#InputFile1").val($("#IpFile1")[0].files[0].name);
                //alert($("#IpFile")[0].files[0].name);
            });
            $("#Pin2").click(function() {
                $("#IpFile2").trigger("click");
            });
            $("#IpFile2").change(function() {
                $("#InputFile2").val($("#IpFile2")[0].files[0].name);
                //alert($("#IpFile")[0].files[0].name);
            });
            $("#Pin4").click(function() {
                $("#IpFile4").trigger("click");
            });
            $("#IpFile4").change(function() {
                $("#InputFile4").val($("#IpFile4")[0].files[0].name);
                //alert($("#IpFile")[0].files[0].name);
            });
        });



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

        function datefun1() {
            var date = document.getElementById("form2Example23");
            date.type = "date";
        }

        function hideDatePicker1() {
            var date = document.getElementById("form2Example23");
            if (date.value === "") {
                date.type = "text";
            }
        }

        function Alphanumeric() { //registerNumber(parameter)
            // alert("hai");
            var alphanumericRegex = /^[0-9a-zA-Z]+$/;
            var reg = document.getElementById("form2Example11").value;
            if (!alphanumericRegex.test(reg)) {
                $('#studentUid_err').text("Special Characters or empty sapace are not Allowed");
                $("#studentUid_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
            }
        }

        function validateName() {   //name(parameter)
            var regex = /^[a-zA-Z\s'-]+$/;
            var reg_name = document.getElementById("reg_name").value;
            if (name && regex.test(name)) {
                return true;
            } else {
                return false;
            }
        }
    </script>

</body>

</html>
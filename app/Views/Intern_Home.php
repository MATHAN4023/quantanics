<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quantanics Insertnship</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/client.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- profile cards css file -->
    <link rel="stylesheet" href="<?php echo  base_url(); ?>/assets/custom/css/profile_card.css?version=<?php echo rand(); ?>">

    <!-- chat css file -->
    <link rel="stylesheet" href="<?php echo  base_url(); ?>/assets/custom/css/chat.css?version=<?php echo rand(); ?>">

    <!-- chart js file -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/custom/js/chat.js?version=<?php echo rand(); ?>"></script>

</head>

<body>

    <?php require_once "Header.php"; ?>

    <div class="container-fluid">
        <!-- <div class="d-flex align-items-start"> -->
        <div class="row">
            <div class="col-lg-2 col-sm-3">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="fa fa-address-card fa-2x"></i></button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fa fa-edit fa-2x"></i></button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fa fa-commenting fa-2x"></i></button>
                </div>
            </div>
            <div class="col-lg-10 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="jumbotron border border-1 rounded">
                            <div class="card user-card-full">
                                <div class="row ">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="<?php echo base_url("assets/workimages/img1.jpg"); ?>" class="img-radius" alt="User-Profile-Image">
                                            </div>
                                            <br>
                                            <h6 class="f-w-600">User Name</h6>
                                            <p>Domain</p>
                                            <i class="fas fa-edit" id="edit"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Register Number</p>
                                                    <h6 class="text-muted f-w-400">123456789</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Department</p>
                                                    <h6 class="text-muted f-w-400">cse</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Year</p>
                                                    <h6 class="text-muted f-w-400">4</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">College name</p>
                                                    <h6 class="text-muted f-w-400">Anna University regional campus madurai</h6>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Start date</p>
                                                    <h6 class="text-muted f-w-400">Date</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">End date</p>
                                                    <h6 class="text-muted f-w-400">date</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400">Aurcm@gmail.com</h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-2 f-w-600">Mobile no.</p>
                                                    <h6 class="text-muted f-w-400">1234567890</h6>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="jumbotron border border-2 shadow shadow-sm rounded " style="">
                            <nav class="mt-4 m-3">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Today</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Tasks</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row mt-4">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="jumbotron border border-1 rounded mb-4">
                                                <br>
                                                <h2 class="text-center text-success">Today Tasks</h2>
                                                <br>
                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md" placeholder="Check In" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md" placeholder="Check Out" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md" placeholder="Task" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md" placeholder="Task Description" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md" placeholder="Task Status" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="submit" class="btn btn-lg border border-success rounded text-success" value="Insert">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <!-- table -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="jumbotron border border-2 shadow shadow-md rounded">
                            <!-- <h2 class="text-center text-info">Chat</h2> -->
                            <div id="framechat">
                                <div class="content">
                                    <div class="header">
                                        <i class="fa fa-comments"></i>
                                        <p>CHATBOX</p>
                                    </div>
                                    <div class="messages">
                                        <ul>
                                            <li class="sent">
                                                <img src="<?php echo base_url("assets/workimages/img4.jpg"); ?>" alt="username" />
                                                <p>hi</p>
                                            </li>
                                            <li class="replies">
                                                <img src="<?php echo base_url("assets/workimages/img3.jpg"); ?>" alt="username" />
                                                <p>Hello</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-0 col-md-0 col-sm-0"> </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 input-group ">
                                            <textarea class="Text-Box" id="message" type="text" placeholder="Write your message..." data-emojiable="true"></textarea>


                                            <button id="send" class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>

                                        </div>
                                        <div class="col-lg-0 col-md-0 col-sm-0"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- </div> -->


        <!-- <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div> -->
    </div>


    <script>
        $('.messages').animate({
            scrollTop: $('.messages ul').height()
        }, "fast");

        function newMessage() {

            var message = $('.input-group textarea').val();
            if ($.trim(message) == '') {
                message = $('.input-group .emoji-wysiwyg-editor').html();
                if ($.trim(message) == '') {
                    return false;
                }
            }
            $('<li class="sent"><img src="<?php echo base_url("assets/workimages/img2.jpg"); ?>" alt="username" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
            $('.input-group textarea').val('');
            $('.input-group .emoji-wysiwyg-editor').html('');

            $('.messages').animate({
                scrollTop: $('.messages ul').height()
            }, "fast");
        };

        $('.submit').click(function() {
            newMessage();
        });

        // $('#framechat .content .message-input ').on(function (e) {
        $('#framechat .content .input-group ').on('keydown', function(e) {
            if (e.which == send) {
                newMessage();
                return false;
            }
        });
    </script>
    <script>
        const image = document.querySelector(".img-radius");
        const input = document.querySelector("#edit");
        input.addEventListener('click', function() {
            // image.src = URL.createObjectURL(input.files[0]);
            console.log('Icon clicked!');
        });
    </script>
</body>

</html>
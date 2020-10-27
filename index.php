<?php
    function error($error_num)
    {
        if($error_num=0)echo 'Your message has been sent';
        else if($error_num=1)echo "Your e-mail isn't valid";
        else if($error_num=2)echo "You didn't enter the message";
        else if($error_num=3)echo 'Something went wrong please try again';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body
            {
                background-color: #F7F7F7;
            }
            hr
            {
                background-color: #1AA1FF; 
                height: 4px;
            }
            .jumbotron
            {
                background: transparent;
            }
            #first_row
            {
                background-image: url('img/backgrount.png');
                background-repeat: no-repeat;
                background-position: left;
            }
        </style>
    </head>

    <body >
        <nav class="navbar navbar-light navbar-expand-md">
            <a href="#" class="navbar-brand col-md-2 offset-md-1"><img src="img/logo.png" width="52" height="45"></a>
            <button class="navbar-toggler" type="button" data-target="#navbar" data-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse colapse text-center" id="navbar">
                <!-- <button class="btn btn-lg col-md-1 offset-sm-0 offset-md-1 offset-lg-2 offset-lx-3">Englisz</button> -->
                <ul class="col-md-9 offset-md-2 navbar-nav d-flex justify-content-end" >
                    <li class="nav-item col-lg-2"><button class="btn btn-lg"></button></li>
                    <li class="nav-item col-lg-2 offset-sm-0 offset-md-1 offset-lg-3 "><a href="#" class="nav-link btn btn-lg">Blog</a></li>
                    <li class="nav-item col-lg-2"><a href="#" class="nav-link btn btn-lg">Porojects</a></li>
                    <li class="nav-item col-lg-2"><a href="#" class="nav-link btn btn-lg">About me</a></li>
                    <li class="nav-item dropdown col-lg-2">
                        <a class="nav-link dropdown-toggle btn btn-lg" href="#" id="nav-dropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact me</a>
                        <div class="dropdown-menu" aria-labelledby="nav-dropdown">
                            <a class="dropdown-item"><button class="btn btn-lg">Contact form</button></a>
                            <span class="dropdown-item">Agnieszka Jankowy</span>
                            <span class="dropdown-item">tel: +48698765951</span>
                            <span class="dropdown-item">email: a.jankowy035@gmail.com</span>
                            <a href="" target="blank"><div class="d-flex float-left ml-5 mt-3"><img src="img/behance.png" width="45" height="45"></div></a>
                            <a href="https://linkedin.com/in/agnieszka-jankowy-9883771a8/" target="blank"><div class="d-flex float-left ml-3 mt-3"><img src="img/ilinkedin.png" width="45" height="45"></div></a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row d-flex mt-5" id="first_row">
                <div class="jumbotron col-12 col-md-5 offset-md-1">
                    <img src="img/logo.png" >
                    <p><h3>Design <span>the best</span> experience</h3></p>
                    <hr>
                    <p>For your Customer, for your Company, for your <span>User</span></p>
                    <a><button class="btn btn-lg btn-success">Contact me!</button></a>
                </div>
                <div class="col-12">
                    <div class="col-md-5 offset-md-1 d-flex align-content-start">
                        <a href="" target="blank"><div class="d-flex float-left ml-2 mt-2"><img src="img/behance.png" width="55" height="55"></div></a>
                        <a href="https://linkedin.com/in/agnieszka-jankowy-9883771a8/" target="blank"><div class="d-flex float-left ml-2 mt-2"><img src="img/ilinkedin.png" width="55" height="55"></div></a>
                    </div>
                </div>
            </div>

            <div class="row d-flex mt-5  text-center" >
                <p class=" col-11 offset-md-1 text-left">Services</p>
                <div class="col-11 col-md-3 offset-1 d-flex mb-5 align-items-center justify-content-center">
                    <div>
                        <img src="img/research.png" width="100" height="100"/>
                        <br/>
                        <p>Users needs research <br/>What do need your customers?</p>
                    </div>
                </div>
                <div class="col-11 col-md-3 offset-1 ">
                    <div >
                        <img src="img/dezign.png" width="100" height="100"/>
                        <br>
                        <p>Graphic design of interfce <br>How should it look like?</p>
                    </div>
                </div>
                <div class="col-11 col-md-3 offset-1 ">
                    <div>
                        <img src="img/settings.png" width="100" height="100"/>
                        <br/>
                        <p>Optimization solutions <br>How to improve performane?</p>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a><button class="btn btn-lg btn-success ">Contact me!</button></a>
                </div>
            </div>

            <div class="row d-flex mt-5">
                <div class="col-12 col-md-5 offset-md-1 d-flex align-self-center justify-content-center">
                    <img src="img/Photo.png" height="450" width="450">
                </div>
                <div class="col-12 col-md-3 d-flex align-self-center">
                    <div class="jumbotron">
                        <p>I am Agnieszka Jankowy and I am a freelance User Experience Designer. I work with all my heart and soul to improve people’s experiences of cantact with digital tools like laptops, computers or smartphones. </p>
                        <p>All my projects are based on users needs, feelings and behaviours. I find pain points of users and change it into a great user’s experiences. All of solutions are strongly biased on data. </p>
                        <p>So let’s try my services to make your website or app a better virtual place for your customers and to improve a performance of your products.</p>
                        <a><button class="btn btn-lg btn-success">Contact me!</button></a>
                        <a><button class="btn btn-lg border border-success">Download CV</button></a>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <p class="col-12">Blog</p>
                <div class="col-11 col-md-3 offset-1 ">1</div>
                <div class="col-11 col-md-3 offset-1 ">2</div>
                <div class="col-11 col-md-3 offset-1 ">3</div>
            </div> -->

            <div class="row d-flex justify-content-center" style="background-color: #fff;">
                <div class="col-12 col-md-6">
                    <p><h3>Contact me</h3></p>
                    <p>Please, feel free to ask me anything! There is no wrong questions! It would be a pleasure for me to answer!</p>
                    <div class="text-danger" ><?php if(isset($_GET['error']))error($_GET['error']) ?></div>
                    <form action="contact.php" method="POST">
                        <div class="form-group col-md-5">
                            <label for="email">Your e-mail</label>
                            <input class="form-control" type="email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="textarea">Message</label>
                            <textarea class="form-control" id="textarea" name="message"></textarea>
                        </div>
                        
                        

                        <a><button class="btn btn-lg btn-success">Contakt me</button></a>
                    </form>
                </div>
            </div>

            <div class="row d-flex mt-5" style="background-color: #a0a0a0;">
                <footer class="col-12">
                    <div>
                        <div id="logo" class="col-2 float-left d-flex mt-4">
                            <img src="img/logo.png" height="100" width="100">
                        </div>
                        <div id="content" class="col-8 float-left">
                            <div><span class="d-flex mt-2 justify-content-start">Contact</span><span class="d-flex justify-content-end">Share this</span></div> 
                            <hr>
                            <p>
                                <span class="d-flex float-left ml-5">Agnieszka Jankowy</span> 
                                <span class="d-flex float-left ml-5">tel: +48698765951</span> 
                                <span class="d-flex float-left ml-5 mr-5">e-mail: a.jankowy035@gmail.com</span>
                                <a href="" target="blank"><div class="d-flex float-left ml-5 mb-3"><img src="img/behance.png" width="45" height="45"></div></a>
                                <a href="https://linkedin.com/in/agnieszka-jankowy-9883771a8/" target="blank"><div class="d-flex float-left ml-3 mb-3"><img src="img/ilinkedin.png" width="45" height="45"></div></a>
                            </p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</html>
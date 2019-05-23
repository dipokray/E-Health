<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include('php/header.php'); 
    $doctor_id  = $_GET['id'];
    include('config/connection.php'); 
    	$doctor_info=mysqli_query($con,"SELECT doctor_info.*,specialist_type.* FROM doctor_info INNER JOIN specialist_type on doctor_info.doctor_id=specialist_type.doctor_id WHERE doctor_info.doctor_id=".$doctor_id);
    ?>
</head>

<!-- upper side-->

<body class="doc_body" style="background-color: #c6c6c6;">
    <div class="container">
        <div class="row bg-info pt-4">
            <div class="col-4">
                <div class="doctor_pic ">
                    <img class="doc_image px-auto" src="image/doctkamal.jpg" alt="ow no">

                </div>
            </div>
            <div class="col-8">
                <div class="doc_info mb-3">
                    <?php 
                    while ($row=mysqli_fetch_array($doctor_info,MYSQLI_ASSOC)) { 
    
                    echo '<h2>'.$row['name'].' </h2>';
                    echo '<hr>';
                    echo '<b> <i class="fas fa-hand-point-right"></i> '.$row['degree'].'</b> <br>';
                    echo '<b><i class="fas fa-hand-point-right"></i>  '.$row['specialist_type_name'].'</b><br>';
                    echo '<b><i class="fas fa-hand-point-right"></i>  '.$row['hospital_name'].'</b><br>';
                    echo '<b><i class="fas fa-hand-point-right"></i> Phone:0'.$row['tell_number'].'</b>';
  
                   ?>



                </div>
            </div>
        </div>
    </div>

    <!-- midle  side-->

    <div class="container">
        <div class="row bg-dark pt-4">
            <div class="col-8 pb-3">

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Select Your Booking Time</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                            </div>
                            <div class="modal-body">

                                <div class="card">
                                    <h5 class="card-header">
                                        <div id="demo" class="carousel slide" data-ride="carousel">

                                            <!-- Indicators  -->
                                            <ul class="carousel-indicators">
                                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                                <li data-target="#demo" data-slide-to="1"></li>
                                                <li data-target="#demo" data-slide-to="2"></li>
                                            </ul>

                                            <!-- The slideshow -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <button type="button" class="btn">Nov-01</button>
                                                    <button type="button" class="btn">Nov-02</button>
                                                    <button type="button" class="btn">Nov-03</button>
                                                    <button type="button" class="btn">Nov-04</button>
                                                    <button type="button" class="btn">Nov-05</button>

                                                </div>
                                                <div class="carousel-item">

                                                    <button type="button" class="btn">Nov-06</button>
                                                    <button type="button" class="btn">Nov-07</button>
                                                    <button type="button" class="btn">Nov-08</button>
                                                    <button type="button" class="btn">Nov-09</button>
                                                    <button type="button" class="btn">Nov-10</button>

                                                </div>
                                                <div class="carousel-item">


                                                    <button type="button" class="btn">Nov-11</button>
                                                    <button type="button" class="btn">Nov-12</button>
                                                    <button type="button" class="btn">Nov-13</button>
                                                    <button type="button" class="btn">Nov-14</button>
                                                    <button type="button" class="btn">Nov-15</button>

                                                </div>


                                    </h5>
                                    <div class="card-body">
                                    
                                    <div class="agenda">
        <div class="table-responsive">
            <table class="table table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Morning</th>
                        <th>Evening</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Single event in a single day -->
                     <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">6</div>
                            <div class="dayofweek">Tue</div>
                            <div class="shortdate text-muted">Nov, 2018</div>
                        </td>
                        <td class="agenda-time">
                        <button type="button" class="btn btn-outline-success">8:00-9:00 AM</button>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                               <button type="button" class="btn btn-outline-success">2:00-3:00 PM</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                         <button type="button" class="btn btn-outline-success">9:15-10:00 PM </button>  
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                            <button type="button" class="btn btn-outline-success">3:00-4:00 PM  </button>    
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                          <button type="button" class="btn btn-outline-success">10:00-11:00 PM </button>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                               <button type="button" class="btn btn-outline-success">4:00-5:00 PM </button> 
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Multiple events in a single day (note the rowspan) -->
                    <tr>
                        <td class="agenda-date" class="active" rowspan="3">
                            <div class="dayofmonth">7</div>
                            <div class="dayofweek">Wed</div>
                            <div class="shortdate text-muted">Nov, 2018</div>
                        </td>
                        <td class="agenda-time">
                         <button type="button" class="btn btn-outline-secondary">8:00-9:00 AM</button>    
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                       <button type="button" class="btn btn-outline-secondary">2:00-3:00 PM</button>        
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                         <button type="button" class="btn btn-outline-secondary">9:15-10:00 PM  </button>    
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                        <button type="button" class="btn btn-outline-secondary">3:00-4:00 PM </button>    
   
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="agenda-time">
                     <button type="button" class="btn btn-outline-secondary">10:00-11:00 PM </button>    
      
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
     <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#boking">4:00-5:00 PM </button>    
                       
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

                                   <!--
                                        <b>Morning :</b> <button type="button" class="btn">8.20 am</button>
                                        <button type="button" class="btn">9.20 am</button>
                                        <button type="button" class="btn">10.20 am</button> <br> <br>
                                        
                                        <b> Afternoon :</b> <button type="button" class="btn">02.20 pm</button>
                                        <button type="button" class="btn">03.20 Pm</button>
                                        <button type="button" class="btn">04.20 pm</button><br> <br>
                                        
                                         <b> Evening :</b> <button type="button" class="btn">07.20 pm</button>
                                        <button type="button" class="btn">08.20 Pm</button>
                                     -->


                                        <div class="modal fade" id="boking" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Doctors Booking</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter your name">

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Email:</label>
                                                            <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter your email" name="email"> </div>
                                                        <div class="form-group">
                                                            <label for="name">Phone No :</label>
                                                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Work Phone Number">

                                                        </div>

                                                        <h5>Please Ansure your Payment Our Bkash Number 01936197990</h5>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>


                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                          <span class="carousel-control-prev-icon"></span>
                                     </a>
                                    <a class="carousel-control-next" href="#demo" data-slide="next">
                                         <span class="carousel-control-next-icon"></span>
                                       </a>
                                    </div>

                                </div>
                                <!--
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
-->
                            </div>
                        </div>
                        <button type="button" class="btn btn-success mt-2 btn_margin float-right" data-toggle="modal" data-target="#exampleModal">ONLINE APPOINMENT</button>
                          <button type="button" class="btn btn-light" style="font-size:15px">  <i class="fa fa-phone"></i>  <strong> 3425(24 service)</strong> </button>
                   
                    </div>

                </div>
                </div>

                <div class="col-4">
                    

                </div>
            
        </div>








        <!--
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">ONLINE APPOINTMENT</button>
                
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> modal title</h5>
                                <button class="close" data-dismiss="modal">&times; </button>
                            </div>
                            <div class="modal-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sunt.
                            </div>
                            <div class="model-footer">
                                <button class="btn btn-secondary" data-dismiss="modal">close </button>
                            </div>
                        </div>   
                    </div>
                </div>
-->



        <!-- last side-->

        <div class="container">
            <div class="row bg-info">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link mr-5" href="">Personal Information <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="">Personal Qualification</a>
                                </li>
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Experience</a>
                                </li>
-->
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Chamber Details</a>
                                </li>
                                <!--
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Publication </a>
                                </li>
-->
                                <li class="nav-item">
                                    <a class="nav-link mr-5" href="#">Others Activity </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h4><strong style="color:blue;">Doctor Name :</strong>
                        <i> <?php echo $row['name'];?></i>
                    </h4> <br><br>

                    <h4><strong style="color:blue;">Hospital Name :</strong>
                        <i> <?php echo $row['hospital_name'];?></i>
                    </h4> <br><br>

                    <h4> <strong style="color:blue;">Degree :</strong>
                        <i><?php echo $row['degree'];?></i>
                    </h4> <br><br>

                    <h4> <strong style="color:blue;">Experience : </strong>
                        <i>8 years experience .</i>
                    </h4> <br><br>
                    <h4> <strong style="color:blue;">Fee for New Patient : </strong>
                        <i>600 Taka Only</i>
                    </h4> <br><br>
                    <h4> <strong style="color:blue;">Fee for old Patient : </strong>
                        <i>400 Taka Only</i>
                    </h4> <br><br>


                    <h4> <strong style="color:blue;">Location:</strong>
                        <i> <?php echo $row['doctor_location'];?></i>
                    </h4><br><br>

                    <h4> <strong style="color:blue;"> Working Address/Chamber-1 :</strong>
                        <i>  <?php echo $row['address'];?></i>
                    </h4><br><br>
                    <h4> <strong style="color:blue;"> Working Address/Chamber-2 :</strong>
                        <i> Null..</i>
                    </h4><br><br>


                    <!--                    <h4>Specialty :</h4><br><br>-->
                    <!--
                    <h4>Gender: </h4><br><br>
                    <h4>Date of Birth:</h4><br><br>
-->

                    <h4><strong style="color:blue;"> Doctor Short Summery :</strong> <br>
                        <h5>He is one of the best doctors in Bangladesh. He has been working efficiently for many years for the people of Bangladesh. He has some great achievement, which is why he is a familiar face to everyone, to all. He is a man of very soft nature.He has many love for patients.</h5>
                    </h4><br><br>

                    <!--
                    <h4><strong style="color:blue;"> Doctor Short Summery :</strong>
                          <?php echo $row['doctor_summery'];?>
                    </h4><br><br>
-->

                    <h4><strong style="color:blue;">Advice For Pation :</strong> <br>
                        <h5>
                            1.Don't Drink Sugar Calories. <br> 2.Eat Nuts. <br> 3.Avoid Processed Junk Food (Eat Real Food Instead) <br> 4.Don't Fear Coffee. <br> 5.Eat Fatty Fish.<br> 6.Get Enough Sleep.<br> 7.Take Care of Your Gut Health With Probiotics and Fiber.<br> 8.Drink Some Water, Especially Before Meals.<br>
                        </h5>
                    </h4><br>


                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">

                </div>
            </div>
        </div>




        <!-- footer-->

        <section id="contact_us">
            <div class="container">
                <div class="contact ">
                    <div class="row">
                        <div class="col-md-4 text-center text-success ">
                            <p> <i class="fas fa-copyright"></i>2018 E-Health by SDM, Made in Bangladesh.</p>
                            <div class="topnav">
                                <a href="about.php">About Us</a>
                                <a href="#news">Blog</a>
                                <a href="contact.php">Contact Us</a>
                                <a href="privacy.php">Privacy Policy</a>
                            </div>
                        </div>
                        <div class="col-md-4 text-center foterimage text-white">
                            <p>Dowenlode Our Free Mobaile App</p>
                            <a href="https://play.google.com/store/search?q=doctor%20app%20bd">
                    <img src="./image/Google.png" alt="..." class=""> </a>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="footer_icon">
                                <a href="#"><i class="fab fa-facebook-square"></i></a> &nbsp; &nbsp;
                                <a href="#"><i class="fab fa-twitter"></i></a> &nbsp; &nbsp;
                                <a href="#"><i class="fab fa-google-plus-g"></i></a> &nbsp; &nbsp;
                                <a href="#"> <i class="fab fa-linkedin"></i></a> &nbsp; &nbsp;
                                <!--                        <a href="#"> <i class="fab fa-youtube"></i></a> &nbsp; &nbsp;-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
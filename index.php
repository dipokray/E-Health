<?php include('config/connection.php'); 
  $symtom_types = mysqli_query($con,"select DISTINCT symptom_type from symptom");
  $distric_name = mysqli_query($con,"select district_name from district");
?>
<!doctype html>
<html lang="en">

<head>
    <?php include ( 'php/header.php'); ?>
    <title>Smart E-Health System</title>
    <link rel="icon" type="image/jpg" href="image/khab.png" </head>

    <body style="padding-left:0px;padding-right:0px;" class="container-fluid">
        <!--     Modal start -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                   
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Doctors Registration Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                    </div>
                    <div class="modal-body">
                     
                    <!-- from start -->
                     
                      <form action="registration.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Enter your name">

                        </div>
                        <div class="form-group">
                            <label for="name">Title/Designation</label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="(e.g Professor/Consultent)">

                        </div>

                        <div class="form-group">
                            <label for="exampleSelect1">Specialty</label>
                            <select class="form-control form-control-sm" id="exampleSelect1">
                                     <option>Medicine Specilist</option>
                                      <option>Gynocologist</option>
                                      <option>Dermatoliigst</option>
                                      <option>ENT</option>
                                      <option>Skine</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Gender</label>
                            <select class="form-control form-control-sm" id="exampleSelect1">
                                     
                                      <option>Male</option>
                                      <option>Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone No :</label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="Work Phone Number">

                        </div>
                        <div class="form-group">
                            <label for="name">BMDC Reg-No :</label>
                            <input type="text" class="form-control form-control-sm" id="name" placeholder="BMDC Registration Number">

                        </div>

                        <div class="form-group">
                           <label for="name">Email:</label>
                            <input type="email" class="form-control form-control-sm" id="email" placeholder="Enter your email" name="email"> </div>
                            
                        <div class="form-group">
                            <label for="exampleTextarea">Description (Professional Statement)</label>
                            <textarea class="form-control form-control-sm" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Profile Image</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            
                        </div>


                        <div class="checkbox">
                            <label>
                            <input type="checkbox" name="remember">Remember me</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary " data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal End -->
        <div class="container-fluid header">
            <div class="row ">
                <div class="col-lg-3 col-md-2 col-sm-12 text-center"> <img style="cursor:pointer;" src="image/khab.png" title="E-Health" class="img-fluid logo" alt="logo"> </div>
                <div class="col-lg-7 col-md-7 col-sm-12 text-center">
                    <h1 class="wow slideInRight title headtack" style="color:#FFFFFF;">An Smart <b>E-Health</b> System</h1>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-12 ">
                    <button type="button" class="btn btn-success mt-2 btn_margin float-right" data-toggle="modal" data-target="#exampleModal">Doctors's Login</button>
                </div>
            </div>
        </div>


        <div class="header-banner">
            <div class="container">
                <div class="banner-content">
                    <div class="ui-header-body">
                        <form action="" method="post" onSubmit="return formValidation();">
                            <div class="row">
                                <div class="col-lg-4  col-sm-12 col-md-5">
                                    <div class="ui-search-option">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="usr" list="location" placeholder="Location" name="location" required>

                                            <?php
                                    echo '<datalist id="location">';
                                     while($distric_name_row=mysqli_fetch_array($distric_name,MYSQLI_ASSOC)){
                                         echo '<option value="'.$distric_name_row['district_name'].'">'.$distric_name_row['district_name'].'</option>';
                                     }
                                    echo ' </datalist>';
                                    ?>

                                        </div>



                                    </div>
                                </div>
                                <div class="col-lg-4  col-sm-12 col-md-5">
                                    <div class="ui-search-option">
                                        <div class="form-group">

                                            <select class="form-control" id="symtom_type" name="symtom_type">
                                    <?php
                                        echo '<option value="default">Select Symtom Type</option>';
                                       
                                        while ($row=mysqli_fetch_array($symtom_types,MYSQLI_ASSOC)) {
                                           echo '<option value="'.$row['symptom_type'].'">'.$row['symptom_type'].'</option>';
                                        }
                                         echo '<option value="all">All Symtoms</option>';
                                    ?>
                                 </select>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4  col-sm-12 col-md-2">
                                    <div class="ui-right">
                                        <a href="" data-target-id="symtom_body"> <button type="submit" class="btn-success gtm-search" name="symtom_type_submit"><i class="fa fa-search" aria-hidden="true"></i>Search</button></a>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <?php if(isset($_POST['symtom_type_submit'])){ ?>
        <div class="container" id="select_symtom">
            <div class="row">
                <div class="col-md-10 offset-md-2 col-sm-12 text-center">
                    <h1 class="bounce wow bounce title2"> Select Your Symptoms </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid " id="symtom_body">
            <form action="" method="post" id="symptom_form">
                <div class="row">
                    <div class="col-md-2"></div>
                    <!-- ==start first clm== -->

                    <div class="col-md-9 col-sm-12">
                        <div id="whole_symtomp_body">
                            <div id="show_all_symtomps">
                                <table class="table table-hover">
                                    <!--display symptom name from database-->
                                    <?php 
                                $symtom_type_name = $_POST['symtom_type'];
                                $location = $_POST['location'];
                 $i=1; 
                  if($symtom_type_name == 'all'){
                 $select_symptom="select * from symptom order by symptom_name";
                  }
                else{
                 $select_symptom="select * from symptom where symptom_type='".$symtom_type_name."' order by symptom_name";
                }
                 $result=mysqli_query($con,$select_symptom);
                 while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                   
                    if($i==1 || $i % 2 !=0){
                    echo "<tr>"; 
                    }
                    echo "<td>"; 
                    echo ' <div class="form-check">'; 
                    echo '<label class="form-check-label">'; 
                    echo '<input type="checkbox" class="form-check-input" name="symptom[]" value="'.$row['symptom_name'].'"><h5>'.$row['symptom_name'].'</h5></label>'; 
                    echo "</div>"; 
                    echo "</td>"; 
                  if($i % 2 ==0){
                    echo "</tr>"; 
                    }
                    $i++;
                 }
                 echo '<input type="hidden" name="location" value="'.$location.'">';
                ?>
                                </table>
                            </div>

                        </div>
                    </div>


                </div>
            </form>
            <div class="row">
                <div class="col-md-11 offset-md-1 text-center">
                    <button onclick="symptom_submitt()" class="btn btn-lg btn-primary" name="symptom_submit" id="symptom_submit">Submit</button>
                </div>
            </div>
        </div>
        <?php } ?>

        <div id="display_doctor_list"></div>
        
        <?php include ( 'php/footer.php'); ?>
        <!-- Optional JavaScript -->
    </body>

</html>
<script>
    $("document").ready(function() {
        $("#submit").click(function() {
            $("#picture").slideToggle("slow");
        });
    });



    function formValidation() {
        var valueofsymtom = document.getElementById('symtom_type').value;
        if (valueofsymtom != "default") {
            window.location.href = '#select_symtom';
            //window.location.reload(true);
            return true;
        } else {
            return false;
        }
    }
</script>
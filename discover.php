     <!---------------------------------------------totall page-------------------------------------------- -->
<div class="clubdiv">    
<!-- ----------------------------------------searchdiv------------> 
<div class="searchdiv">   
<div class="container">
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>
</div>
  
</div>
<!--------------------------------------- club show div------------------------ -->
<div class="clubshowdiv">

<?php
for ($x = 0; $x <= 10; $x++) {
?>
    <div class="box-container"> 
    <form action="login.php" method="post" class="box">
    <img class="image" src="images/user.png" alt="club profilepic">
    <div class="name">Dhrupod</div>
    <div class="totall_member">60</div> 
    <input type="submit" value="Visit club" name="visitclub" class="btn">
    </form>
    </div>
<?php
}
?> 
  
</div>
  
</div>
</div>
</div>
</div>  
 
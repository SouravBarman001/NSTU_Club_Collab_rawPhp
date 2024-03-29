
<!-- Main member of the club -->
<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <h2>Main mamber of the club</h2>
            <?php

include './config.php';

$sql = "select id,name,picture,position,status from managemamber"; 

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0)
  {

?>


            <thead>
              <tr>
                <th>Name</th>
                <th class="text-center">Status</th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              
              while($row = mysqli_fetch_array($result))
              {
             
            
              ?>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#"><?php echo $row['name'] ?> </a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i><?php echo $row['position'] ?> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="candidate-list-favourite-time text-center">
                  <span class="candidate-list-time order-1"><?php echo $row['status'] ?></span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
              <?php } ?>
            </tbody>
            <?php } ?>
  <?php }?>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- General members -->

<div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm">
          <table class="table manage-candidates-top mb-0">
            <h2>General members</h2>
<?php

include './config.php';

$sql = "select id,name,status,wing from generalmember"; 

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0)
  {

?>

            <thead>
              <tr>
                <th>Name</th>
                <th class="text-center">Status</th>
                <th class="text-center">Wings</th>
                <th class="action text-right">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               while($row = mysqli_fetch_array($result))
               {
              
              ?>
              <tr class="candidates-list">
                <td class="title">
                  <div class="thumb">
                    <img class="img-fluid" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                  </div>
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#"><?php echo $row['name'] ?> </a></h5>
                      </div>

                    </div>
                  </div>
                </td>
                
                <td class="candidate-list-favourite-time text-center">
                  <span class="candidate-list-time order-1"><?php echo $row['status'] ?></span>
                </td>
                    
                <td class="candidate-list-favourite-time text-center">
                  <span class="candidate-list-time order-1"><?php echo $row['wing'] ?></span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-primary" data-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
                <?php } ?>

            </tbody>
  <?php } ?>
  <?php }?>


          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
   
    </div>
  </div>
</div>
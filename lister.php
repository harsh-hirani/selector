<?php
function load($type,$who,$name,$info,$skils,$phone,$rating,$id,$time,$url=""){
echo '
    
    <div class="col-lg-6 col-12"> <div class="card mb-3" ><div class="row g-0">
                  ';
      if ($url!="") {
        
          echo '<div class="col-md-4">
            <img src="'.$url.'" class="img-fluid w-100rounded-start" alt="...">
          </div>
          <div class="col-md-8">';
      }  else{
        echo '<div class="col-md-7 offset-lg-1">';
      }          

        $urltosend = ($type == 'Add again')?"addagain":'remove';
      echo '             <div class="card-body">
                      <h5 class="card-title">'.$name.'</h5>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">'.$info.'</li>
                        <li class="list-group-item">'.$skils.'</li>
                        <li class="list-group-item">'.$phone.'</li>
                      </ul>
                      <a href="update.php?id='.$id.'" class="card-link my-2 btn btn-outline-primary">'.$rating.'</a>
                      <a href="'.$urltosend.'.php?id='.$id.'" class="my-2 card-link btn-primary btn">'.$type.'</a>
                      <p class="card-text"><small class="text-muted">Created at '.$time.' by '.$who.' </small></p>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              
              ';
}
?>
<?php 

function limit_text($string, $limit) {
    $hacker =$string;
    $string = strip_tags($string);
    
    if (strlen($string) > $limit) {
    
        // truncate string
        $stringCut = substr($string, 0, $limit);
    
        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
    }
   return $string;
  }
function GetDataInfoUserByIdpost($id_user,$start,$page,$search){
    include_once "../../model/manager_user.php";
    $model_qlsv=new Model_qlsv();
  $data=$model_qlsv->GetPostConfessionUser($id_user,$start,$page,$search);

    return $data;
}

if(isset($_REQUEST["id_user"])){
    echo "Id user ".$_REQUEST["id_user"];
    
    isset($_REQUEST["search"])?$search=$_REQUEST["search"]:$search="";
    $id_user=$_REQUEST["id_user"];
    isset($_REQUEST["page"])?$current_page=$_REQUEST["page"]:$current_page=1;
   
    isset($_REQUEST["pageTotal"])?$page=$_REQUEST["pageTotal"]:$page=5;
    $start = ($current_page - 1)*$page ;
    $data=GetDataInfoUserByIdpost($id_user,$start,$page,$search);
    $CoutData=GetDataInfoUserByIdpost($id_user,0,435345345,$search);
    $cout=0;
    foreach ($CoutData as $row) {$cout++;}
    echo "
    
    <table class='table table-bordered  table-hover table-post'>
    <thead>
     <tr> 
     <th>  </th>
      <th>Avatar</th>
      <th style='color:#20c1c1' >User Name Post</th>
      <th> Title</th>
    <th class='click'>Content</th>
    
      
      <th  style='color:#20c1c1'>DateUp</th>
      <th> State</th>
     
   
    </tr >
    </thead><tbody class='containerCheck'>";
    foreach ($data as $row) 
         
      {
          if($row["view"]==1){
              $check="<p style='color:gray;font-weight: bold;'>NO CHECK</p>";
          }
          elseif($row["view"]==2){
              $check="<p style='color:#00FF00;font-weight: bold;'>VIEW SUCCESS</p>";
          }
          else{
              $check="<p style='color:red;font-weight: bold;'>DELETE TEMPORARY</p>";
          }
        
      
        if($row["Avatar"]=="")
        {
          $Avatar="deauft.jpg";
        }
        else{
          $Avatar=$row["Avatar"];
        }
      
        echo " 
      <tr style='transition: 1s;'    >
      <td> <input class='checkboxclass' idcheck=".$row["id_post"]." type='checkbox' value=''></td>
      <th style='text-align:center'><img style='width:60px;height:60px' src='./assets/images/".$Avatar."' ></th>
        
         
        <td style='color:#20c1c1' class='nameUserPost' >".htmlentities($row["UserName"])."</td>
   
        <td>".$row["Title"]."</td>
        <td style='width: 517px;' class='contentDetailView'  data-test='clickviewContent'  >".limit_text($row['Content'],100)." 
        <button data-toggle='modal' data-target='#viewDetailHistoryPost' class='btn-xs btn btn-info btn-view-history' text= '".$row['Content']."' >Detail</button>
        
        </td>
    
        <td  style='color:#20c1c1'>".$row['DateUp']."</td>
        <td>".$check."</td>
        
    
        
        
      </tr>
     
    ";
    }
    echo "</tbody></table>";
   
    
    
    echo '<div class="pagination">';
    
   $x=5;
    $a=$cout;
    echo "<ul class='pagination'>";
    $current_page=0;
     $total_page=ceil($a/$x);  
    if($current_page > 1 && $total_page > 1) {
        echo '<li  pagelimit='.$x.' class="active"><a pageCurrent='.( $current_page - 1 ) .' >Prev</a></li> ';
    }  
   
   
    for( $i = 1 ; $i <=$total_page ; $i++ ) {
      
        if($i == $current_page) {
            echo '<span>' . $i . '</span> | ';
        } else {
            echo '<li><a id_user= "'.$id_user.'"search="'.$search.'" pagelimit='.$x.' class="PagingHistory"  pageCurrent=' . $i . '>' . $i . '</a></li>';
        }
    }
   if($current_page < $total_page && $total_page > 1) {
        echo '<li><a pageCurrent=' . ( $current_page + 1 ) . ' pagelimit='.$x.'>Next</a> </li> ';
    }
    echo "</ul>";
    
   
   echo '</div>';



}

?>
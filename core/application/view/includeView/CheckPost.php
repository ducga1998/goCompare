<div class="alert alert-success text-center" role="alert">
  <strong>CHECH POST</strong>
</div>
 <div class='result'></div>
          <span class="input input--haruki">
					<input  placeholder="Search ..."  name="searchPost"  type="text" class="input__field input__field--haruki" type="text" id="input-2">
					<label class="input__label input__label--haruki" for="input-26">
            <span class="input__label-content input__label-content--haruki">Search User Name and Title</span>
           
					</label>
        </span>
        
        <div class='result2'></div>

   
        <button type="button" name="" id="" class="btn btn-primary btn-searchpostCheck">Search </button>
<button data-toggle='tooltip' title='Delete selected elements ' type='button' idcheck=".$row["id_post"]."   class='btn btn-danger btn-delete'><i class='fa fa-trash-o' aria-hidden='true'></i></button>
<button data-toggle='tooltip' title='Browse selected elements ' type='button' idcheck=".$row["id_post"]."  class='btn btn-browse btn-success'><i class='fa fa-check' aria-hidden='true'></i></i></button>
<div class="center">
  <label class="label">
    <input  class="label__checkbox checkAll" type="checkbox" > 
    <span class="label__text">
   
      <span class="label__check">
        <i class="fa fa-check icon"></i>
      </span>
    </span>
  </label>
</div><div class="labelCheckAll">:Check All</div>
<?php


                              
    echo " <div class='containerTable'> ";                      
    echo "<table class='table table-bordered  table-hover table-post'>
    <thead>
     <tr> 
    <th></th>
      <th>Avatar</th>
    <th style='color:#20c1c1' >User Name Post</th>
    <th> Title</th>
    <th class='click'>Content</th>
  
      
      <th  style='color:#20c1c1'>DateUp</th>
      <th>Setting</th>
     
   
  </tr >
    </thead><tbody class='containerCheck'>";
    $i=0;
    foreach ($rowConfession as $row) 
       
      {
        
        if($row["view"]==1){
        
         $i++;
        echo " 
      <tr style='transition: 1s;'    >
      <td> <input class='checkboxclass' idcheck=".$row["id_post"]." type='checkbox' value=''></td>
      <th style='text-align:center'><img style='width:60px;height:60px' src='./assets/images/deauft.jpg' ></th>
        
         
        <td style='color:#20c1c1' class='nameUserPost' >".htmlentities($row["UserName"])."</td>

        <td>".$row["Title"]."</td>
        <td style='width: 517px;'  data-test='clickviewContent'  ><div  style='word-wrap: break-word;' class='contentDetailView' >".$row['Content']."</div> 
        <button data-toggle='modal' data-target='contentViewCheck' class='btn-xs btn btn-info btn-view-model-check'>Detail</button>
        </td>
       <td  style='color:#20c1c1'>".$row['DateUp']."</td>
        <td>
        </td>
        
        
  
    
    
      </tr>
      
    ";
    }
    
  }
  if($i==0){
    echo "<h1>NO DATA</h1>";
    }
  


  echo "</tbody></table></div>";
 if($i==0){

 
   echo "<h3 class='text-center '>No data </h3>";
 }

 
 

 ?>
 
 <div class="modal fade" id="contentViewCheck" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">View Content Detail</h4>
        </div>
        <div class="modal-body ">
        <table class="table table-bordered">
    <thead>
      <tr>
        <th>User Name</th>

        <th>Content</th>
        
       
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="usernameinsert">  </td>
        <td class="ShowContent"></td>
        <td class="ShowCategory"></td>
       
      </tr>
     
    </tbody>
  </table>
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 

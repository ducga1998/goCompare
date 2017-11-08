

        


 
<div class="alert alert-success text-center" role="alert">
  <strong class="get_id_user" >HISTORY POST</strong>
</div>
<span class="input input--haruki">
					<input  placeholder="Search ..."  name="SearchHistory"  type="text" class="input__field input__field--haruki" type="text" id="input-3">
					<label class="input__label input__label--haruki" for="input-26">
            <span class="input__label-content input__label-content--haruki">Search User Name and Title</span>
           
					</label>
  </span>
  <div class="divSettingHistoryPost">
        <button type="button" class="btn btn-primary HistoryBtnSearch">Search</button>

      <button data-toggle='tooltip' title='Delete selected elements ' type='button' idcheck=".$row["id_post"]."   class='btn btn-danger btn-deletePostHistory'><i class='fa fa-trash-o' aria-hidden='true'></i></button>
      <button data-toggle='tooltip' title='Delte forever selected elements ' type='button' idcheck=".$row["id_post"]."  class='btn btn-danger btn-delete-Forever'><i class="fa fa-ban" aria-hidden="true"></i></button>

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
</div>
<!-- end divSetting history post -->
<div class="ContainerPostHistory">

  <?php
    echo "<table class='table table-bordered  table-hover table-post'>
    <thead>
     <tr> 
     <th> <input type='checkbox' class='checkAll' > </th>
      <th>Avatar</th>
	  <th style='color:#20c1c1' >User Name Post</th>
	  <th> Title</th>
    <th class='click'>Content</th>
    <th>Category</th>
      
      <th  style='color:#20c1c1'>DateUp</th>
     
   
	</tr >
    </thead><tbody class='containerCheck'>";
   
    
	
echo "</tbody></table>";

 ?>
 </div>
<div class="modal fade" id="viewDetailHistoryPost" role="dialog">
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
 
 
 


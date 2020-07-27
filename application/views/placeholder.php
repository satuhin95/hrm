<!-- <h2>User List</h2>
 <?php 
 $html="<table>";
 $html.="<tr><th>ID</th><th>Username</th><th>Role</th><th>Action</th></tr>";
 foreach($users as $user){
	 $id=$user['id'];
	$html.="<tr>"; 
	
	  $html.="<td>{$user['id']}</td>"; 
	  $html.="<td>{$user['username']}</td>";	   
	  $html.="<td>{$user['name']}</td>";
	  $html.="<td>";
	  $html.=anchor("UserController/EditUserView/$id","Edit");
	  $html.=" ";
	  $html.=anchor("UserController/DeleteUser/$id","Delete");
	  $html.="</td>";	
	
	$html.="</tr>"; 
	 
 }
 $html.="<table>";
 
 echo $html;
 
?>  -->
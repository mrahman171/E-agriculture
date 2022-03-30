	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<br>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">

<h3 id="myModalLabel">Add</h3>
</div>
<div class="modal-body">
<form method="post" action="pupload.php"  enctype="multipart/form-data">
<table class="table1">
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">product_name</label></td>
		<td width="30"></td>
		<td><input type="text" name="product_name" placeholder="product_name" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">farmer_name</label></td>
		<td width="30"></td>
		<td><input type="text" name="name" placeholder="farmer_name" required /></td>
	</tr>
	 
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">m_date</label></td>
		<td width="30"></td>
		<td><input type="text" name="m_date" placeholder="m_date" required /></td>
	</tr>

	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">e_date</label></td>
		<td width="30"></td>
		<td><input type="text" name="e_date" placeholder="e_date" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">per_unit_price</label></td>
		<td width="30"></td>
		<td><input type="text" name="per_unit_price" placeholder="per_unit_price" required /></td>
	</tr>
	<tr>
		<td><label style="color:#3a87ad; font-size:18px;">Select your Image</label></td>
		<td width="30"></td>
		<td><input type="file" name="image"></td>
	</tr>
</table>
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Upload</button>
    </div>
</form>
</div>			
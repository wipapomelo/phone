<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9">

							<h2><em>เพิ่มข้อมูล</em></h2>
							<br><br>
							<?php
							echo form_open_multipart('phonecontroller/insert');
							?>

							<div class="container-fluid">
							<table class="table table-hover" >
							<tr>

							<tr><td><i class="glyphicon glyphicon-user"></i> ราคา: </td>   <td>  <input type="text" class="form-control col-sm-1 "  name="price"><br></td></tr>
              <td><i class="glyphicon glyphicon-user"></i> ยี้ห้อ : </td>
              <td><select name="type_id">
                <?php foreach ($type as $key): ?>
                    <?php if ($key['type_id']==$data[0]['type_id']): ?>
                        <option selected  value='<?php echo $key['type_id']?>' ><?php echo $key['type_name']?></option>
                      <?php else: ?>
                          <option  value='<?php echo $key['type_id']?>' ><?php echo $key['type_name']?></option>
                      <?php endif; ?>
              <?php endforeach; ?>
                  </select></td>
							<tr><td><i class="glyphicon glyphicon-picture"></i>  image : </td> <td> <input type="file"   name="img" class="btn btn-primary"><br></td>
							</tr>
							</table>
							<input type="submit" value="Submit" class="btn btn-success"><br><br>
							</div>


							<?php
							echo form_close();

							 ?>


                    </div>
                  </div>

    </section>
</section>

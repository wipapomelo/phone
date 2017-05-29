<section id="main-content">
  <section class="wrapper">

    <div class="container">
      <div class="col-lg-12">

        <title>แก้ไขข้อมูล</title>


        <h2><em>แก้ไขข้อมูล</em></h2>
        <br><br>
        <?php
        echo form_open_multipart('phonecontroller/edit');
        ?>


        <table class="table">

          <tr>
            <tr><input type="hidden" name="id_phone" value="<?php echo $data[0]['id_phone'] ?>"><br></tr>
            <tr><td><i class="glyphicon glyphicon-user"></i> ราคา : </td><td><input type="text" name="price" value="<?php echo $data[0]['price'] ?>"><br></td></tr>
            <tr><td>ยี้ห้อ : </td>
              <td><select name="type_id">
                <?php foreach ($type as $key): ?>

                    <?php if ($key['type_id']==$data[0]['type_id']): ?>
                        <option selected  value='<?php echo $key['type_id']?>' ><?php echo $key['type_name']?></option>

                          <?php else: ?>
                              <option  value='<?php echo $key['type_id']?>' ><?php echo $key['type_name']?></option>

                                <?php endif; ?>
                    <?php endforeach; ?>
                  </select></td></tr>
                  <tr><td><i class="glyphicon glyphicon-picture"></i>image :</td><td><input type="file" name="img" class="btn btn-success"><br></td></tr>
                  <tr><td><img src="<?php echo base_url('image/'.$data[0]['img']) ?>"width="100px;"></td></tr>
                </tr>
              </table>
              <input type="submit" value="Submit" class="btn btn-success"><br><br>

              <?php
              echo form_close();

              ?>



            </div>
          </div><!-- /col-md-4 -->

        </section>
      </section>

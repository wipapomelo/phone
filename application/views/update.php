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
            <tr><input type="hidden" name="p_id" value="<?php echo $data[0]['p_id'] ?>"><br></tr>
            <tr><td><i class="glyphicon glyphicon-user"></i> First name: </td><td><input type="text" name="p_name" value="<?php echo $data[0]['p_name'] ?>"><br></td></tr>
            <tr><td>จังหวัด : </td>
              <td><select name="id_province">
                <?php foreach ($province as $key): ?>

                    <?php if ($key['province_id']==$data[0]['id_province']): ?>
                        <option selected  value='<?php echo $key['province_id']?>' ><?php echo $key['province_name']?></option>

                          <?php else: ?>
                              <option  value='<?php echo $key['province_id']?>' ><?php echo $key['province_name']?></option>

                                <?php endif; ?>
                    <?php endforeach; ?>
                  </select></td></tr>
                  <tr><td><i class="glyphicon glyphicon-picture"></i> image :</td><td><input type="file" name="p_img" class="btn btn-success"><br></td></tr>
                  <tr><td><img src="<?php echo base_url('image/'.$data[0]['p_img']) ?>"width="100px;"></td></tr>
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

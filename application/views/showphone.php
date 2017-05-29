
<section id="main-content">
  <section class="wrapper">

    <div class="row">
      <div class="col-lg-12">
        <h2>รายชื่อ</h2>
        <a class="btn btn-success"  href="<?php echo site_url('phonecontroller/addphone') ?> "><i class="glyphicon glyphicon-plus"> </i> </a>

        <table  class="table table-hover"  >

          <thead >
            <tr >
              <th class="t"><?php echo "รหัส" ?></th>
              <th class="t"><?php echo "ราคา" ?></th>
              <th class="t"><?php echo "ยี่ห้อ" ?></th>
              <th class="t"><?php echo "รูป" ?></th>
              <th class="t"><?php echo "จัดการข้อมูล" ?></th>
            </tr>
          </thead>
          <tr>

            <?php foreach ($data as $row): ?>

              <td><?php echo $row['id_phone'] ?></td>
              <td><?php echo $row['price'] ?></td>
              <td> <?php echo $row['type_name'] ?></td>
              <td><img src="<?php echo base_url('assets/imgphone/'.$row['img']); ?>" style="width:150px;"></td>
              <td><a class="btn btn-danger"  href="<?php echo site_url('phonecontroller/deletedata/'.$row['id_phone'] ) ?> "><i class="glyphicon glyphicon-remove"></i>ลบ</a> |
                <a class="btn btn-warning" href="<?php echo site_url('phonecontroller/update/'.$row['id_phone']) ?> "><i class="glyphicon glyphicon-pencil"></i>แก้ไข</a></td>
              </tr> <br>
              <br>


            <?php endforeach; ?>
          </td>
        </tr>
      </table>


</section>

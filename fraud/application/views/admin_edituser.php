<aside class="main-sidebar">
      <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo site_url("home"); ?>"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="<?php echo site_url("userform"); ?>"><i class="fa fa-edit"></i> <span>Create User</span></a></li>
            <li><a href="<?php echo site_url("listuser"); ?>"><i class="fa fa-search"></i> <span>List User</span></a></li>
            <li><a href="<?php echo site_url("paramform"); ?>"><i class="fa fa-plus "></i> <span>Input Parameter</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>Edit User</h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">

        <?php if($this->session->flashdata('fail')): ?>
        <div class="col-md-12"><div class="alert alert-danger"><?php echo $this->session->flashdata('fail'); ?></div></div>
        <?php endif; ?>

       <?php if($this->session->flashdata('success')): ?>
        <div class="col-md-12"><div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div></div>
        <?php endif; ?>
        
        <div class="col-md-12">
        <div class="box box-danger">
        <div class="box-body">
          <form class="form-horizontal" role="form" action="<?php echo site_url("edituser"); ?>" method="post">
            <div class="form-group">
              <label class="control-label col-sm-2" for="no. telp">Username:</label>
              <div class="col-sm-9">
                <input class="form-control" name="username" id="username" placeholder="Masukkan Username" pattern=".{1,30}" value="<?php echo $USERNAME; ?>" readonly>
                <input class="form-control" type="hidden" name="id" id="idcase" value="<?php echo $ID; ?>">
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="no. telp">Password Lama:</label>
              <div class="col-sm-9">
                <input class="form-control" name="password" id="pass" placeholder="Masukkan Password Anda yang Lama" type="password" pattern=".{1,25}" required>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="no. telp">Password Baru:</label>
              <div class="col-sm-9">
                <input class="form-control" name="newpassword" id="passbaru" placeholder="Masukkan Password Baru" type="password" pattern=".{1,25}" required>
              </div>
              </div>
              <div class="form-group">
              <label class="control-label col-sm-2" for="no. telp">Re-type Password Baru:</label>
              <div class="col-sm-9">
                <input class="form-control" name="connewpassword" id="repass" placeholder="Masukkan Ulang Password Baru" type="password" pattern=".{1,25}" required>
              </div>
              </div>
              <div class="form-group">
                <label  class="control-label col-sm-2" for="no. telp">User Type:</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="previledge" id="usertype" required>
                      <option value='0'>User</option>
                      <option value='1'>Admin</option>
                    </select>
                  </div>
              </div>
              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

            </div>
            <div class="box-footer">
              <div class="form-group">
              <div class=" pull-right">
                <button type="submit" class="btn btn-primary">Update User</button>
              </div>
            </div>
            </form>
            </div>
            </div>
            </div>
            </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
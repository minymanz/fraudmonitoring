      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
      <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li><a href="<?php echo site_url("home"); ?>"><i class="fa fa-home"></i><span>Home</span></a></li>
            <li><a href="<?php echo site_url("caseform"); ?>"><i class="fa fa-edit"></i><span>Input Case</span></a></li>
            <li><a href="<?php echo site_url("search"); ?>"><i class="fa fa-search"></i> <span>Search Case</span></a></li>
            <li><a href="<?php echo site_url("listprofile"); ?>"><i class="fa fa-list"></i> <span>List Profile</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        
        <?php if($cases->STATUS=='1'): ?>
          <h1 class="pull-left">Closed Case</h1>
          <h1><span class="label label-success pull-right">Case Closed
          </span></h1>
        <?php endif; ?>
        <?php if($cases->STATUS=='0'): ?>
          <h1 class="pull-left">Case</h1>
          <h1><span class="label label-danger pull-right">Case Open
          </span></h1>
        <?php endif; ?>
        </section>

        <br>
        <!-- Main content -->
        <section class="content">
        <div class="row">

          <?php if($this->session->flashdata('fail')): ?>
          <div class="col-md-12"><div class="alert alert-danger"><?php echo $this->session->flashdata('fail'); ?></div></div>
          <?php endif; ?>
          
        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Profile</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label col-sm-5">Nomor Telepon:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->TELEPHONE_NUMBER; ?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Nomor Induk:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->MAIN_NUMBER; ?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Corporate Customer:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->CUSTOMER; ?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Account Manager:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->AM; ?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Installation Address:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->INSTALLATION;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Segment:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->SEGMEN;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Average Revenue:</label>
                    <label class="control-label col-sm-7"><?php echo $nomor->REVENUE;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-5">Previous Case:</label>
                  <label class="control-label col-md-3"><?php echo $jumlah;?> times<br></label>
                  <button class="btn btn-primary btn-xs col-md-4 pull-right" data-toggle="modal" data-target="#myModal3"><i class="fa fa-search"></i> <span>View Previous Case</span></button>
                </div>
            </div>
            
            <div class="box-footer">
            <div class="form-group">
                <?php if($cases->STATUS=='0'): ?>
                <div class="col-md-4">
                <a type="button" class="btn btn-danger center-block" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> <span>Add Activity</span></a>
                </div>
                <div class="col-md-4">
                <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("editingprofile/$cases->ID_CASE"); ?>';" type="button" class="btn btn-danger center-block"><i class="fa fa-edit"></i> <span>Edit Profile</span></a>
                </div>
                <?php endif; ?>
                <div class="col-md-4">
                <a type="button" class="btn btn-success center-block" data-toggle="modal" data-target="#myModal4"><i class="fa fa-envelope"></i> <span>Print Email</span></a>
                </div>
              </div>
            </div>
          </div>
          </div>

          <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Case Details</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label class="control-label col-sm-5">Destination Number:</label>
                    <label class="control-label col-sm-7"><?php echo $cases->DESTINATION;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Destination Country:</label>
                    <label class="control-label col-sm-7"><?php echo $cases->DESTINATION_NUMBER;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Duration (sec):</label>
                    <label class="control-label col-sm-7"><?php echo $cases->DURASI;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Call Frequency:</label>
                    <label class="control-label col-sm-7"><?php echo $cases->NUMBER_OF_CALL;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Case Type:</label>
                    <label class="control-label col-sm-7"><?php echo $cases->DES1;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Case Date:</label>
                    <label class="control-label col-sm-7"><?php echo date('d-m-Y',strtotime($cases->CASE_TIME)); ?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Description:</label>
                    <label class="control-label col-sm-7"><?php echo $cases->DES2;?><br></label>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-5">Evidence:</label>
                  <div class="col-sm-7">
                    <a href="javascript:void(0)" onclick="location.href='<?php echo site_url("getcase/$cases->FILENAME"); ?>';" type="button" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <span>Download Evidence</span></a>
                  </div>
                </div>
            </div>
          </div>
          </div>

          <div class="col-md-12">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">List Activity</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Activity Type</th>
                        <th>Description</th>
                        <th>Evidence</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($aktivitas as $act): ?>
                      <tr>
                        <td><?php echo date('d-m-Y',strtotime($act->TANGGAL)); ?></td>
                        <td><?php echo $act->TYPE; ?></td>
                        <td><?php echo $act->DESCR; ?></td>
                        <td><a href="javascript:void(0)" onclick="location.href='<?php echo site_url("getact/$act->FILENAME"); ?>';" type="get" class="btn btn-danger">View</a></td>
                      </tr>
                      <?php endforeach; ?>
                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Date</th>
                        <th>Activity Type</th>
                        <th>Description</th>
                        <th>Evidence</th>
                      </tr>
                    </tfoot>
                  </table>
            </div>
          </div>
          </div>
        <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Activity</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-horizontal" role="form" action="<?php echo site_url("addactivity"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2">Activity Date:</label>
                          <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="actdate" class="form-control" id="datepickera" placeholder="dd-mm-yyyy" required>
                            <input class="form-control" type="hidden" name="idcase" id="idcase" value="<?php echo $cases->ID_CASE; ?>">
                          </div><!-- /.input group -->
                          </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="casetype">Activity Type:</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="acttype" id="casetype" required>
                          <?php foreach($actlist as $list):?>
                          <option value="<?php echo $list->ID_PARAMETER; ?>"><?php echo $list->DESCRIPTION; ?><?php if($list->STATUS=='1'): ?> (Closed)<?php endif; ?></option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="deskripsi">Description:</label>
                      <div class="col-sm-10">
                      <textarea class="form-control" rows="6" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi (Maksimal 500 Karakter)" maxlength="500" required></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-sm-2" for="upload">Upload Evidence:</label>
                      <div class="col-sm-10">
                        <input type="file" name="fileupload" id="fileToUpload" required>
                      </div>
                    </div>

                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal2">Add Activity</button>

                  </div>
                </div>
              </div>
            </div>
            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog modal-sm">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ATTENTION!</h4>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure to add this activity?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Yes</button>
                  </div>
                </div>
              </div>
              </form>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Previous Case</h4>
                  </div>
                  <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Case Date</th>
                        <th>Destination Number</th>
                        <th>Destination Country</th>
                        <th>Duration(sec)</th>
                        <th>Call Frequency</th>
                        <th>Case Type</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($history as $past): ?>
                      <tr>
                        <td><?php echo date('d-m-Y',strtotime($past->CASE_TIME)); ?></td>
                        <td><?php echo $past->DESTINATION_NUMBER;?></td>
                        <td><?php echo $past->DESTINATION;?></td>
                        <td><?php echo $past->DURASI;?></td>
                        <td><?php echo $past->NUMBER_OF_CALL;?></td>
                        <td><?php echo $past->DESCRIPTION;?></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                      <tfoot>
                      <tr>
                        <th>Case Date</th>
                        <th>Destination Number</th>
                        <th>Destination Country</th>
                        <th>Duration(sec)</th>
                        <th>Call Frequency</th>
                        <th>Case Type</th>                      
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

             <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Email</h4>
                  </div>
                  <div id="post-shortlink" class="modal-body">
                    <p>Rekan rekan AM CC – <?php echo $nomor->AM.'/'.$nomor->CUSTOMER.'(NIPNAS '.$nomor->NIPNAS.')  dan Support ('.$nomor->SEGMEN;?>)<br><span></span><br>Selamat Siang,</p><br>
                    <p>Mohon bantuannya untuk menginformasikan ke pelanggan terkait adanya indikasi traffic Toll fraud (SLI) / anomaly call yang tergenerate dari nomor <?php echo $nomor->TELEPHONE_NUMBER.' atas nama '.$nomor->AM.'/'.$nomor->CUSTOMER.' (NIPNAS '.$nomor->NIPNAS.') pada tanggal';?>  <?php echo date('d-m-Y',strtotime($cases->CASE_TIME)); ?> untuk destinasi <?php echo $cases->DESTINATION; ?> seperti berikut ini:</p>
                    <table id="example3" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>ANUMBER</th>
                        <th>BNUMBER</th>
                        <th>Jumlah Durasi</th>
                        <th>Jumlah Call</th>
                        <th>Destinasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><?php echo date('d-m-Y',strtotime($cases->CASE_TIME)); ?></td>
                        <td><?php echo $nomor->TELEPHONE_NUMBER;?></td>
                        <td><?php echo $cases->DESTINATION_NUMBER;?></td>
                        <td><?php echo $cases->DURASI;?></td>
                        <td><?php echo $cases->NUMBER_OF_CALL;?></td>
                        <td><?php echo $cases->DESTINATION;?></td>
                      </tr>
                    </tbody>
                  </table>
                  <br>
                  <p>
                    Apabila CC merasa tidak melakukan call SLI dengan destinasi <?php echo $cases->DESTINATION;?>, agar disarankan utk segera melakukan langkah 2 preventif sbb:
                  </p>
                  <p>1. Mengganti semua password PABX (termasuk password admin / root) secara rutin dan tidak menggunakan password default.</p>
                  <p>2. Mengganti port PABX (tidak menggunakan port default)</p>
                  <p>3. Menonaktifkan port2 remote yang biasa digunakan utk maintenance.</p>
                  <p>4. Mendefinisikan / mengaktifkan routing table pada PABX (Mengaktifkan firewall pada PABX), untuk mencegah SIP-invite atau connection attempt ke PABX</p>
                  <p>5. Melakukan monitoring log PABX secara rutin</p>
                  <p>6. Sangat umum pelaku menghapus log CDR setelah melakukan panggilan, mungkin dapat disarankan kepada pelanggan utk menganalisis lebih detail log system PBX mereka, apakah ada file / script tambahan atau ada perubahan paramater database di PBX.</p>
                  <p>Agar diusulkan isoliran/bloking SLI untuk nomor tersebut, untuk menghindari fraud SLI menjadi bertambah besar. Untuk notel apabila ISDN agar di blok di no.induk dan apabila hunting untuk di blokir juga seluruh notel ikutannya, namun demikian apabila call tersebut di akui sebagai penggunaan maka akan ditagihkan. Demikian disampaikan, terima kasih atas perhatian dan kerjasamanya.</p><br>
                  </div>
                  <div class="modal-footer">
                    <button class="btn btn-success" id="copy-button" data-clipboard-target="#post-shortlink">Copy</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.min.js"></script>
      <script type="text/javascript">(function(){
        new Clipboard('#copy-button');
        })();</script>


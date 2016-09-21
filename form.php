<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Programming 2</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="tampilan/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="tampilan/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="tampilan/assets/css/custom.css" rel="stylesheet" />
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Informatika B</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
    				    <li>
                            <a class="active-menu"  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                        </li>				
    				</ul>
                </div>
            </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Tugas CRUD</h2>   
                        <h5>Presented By Irsyad</h5>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                    <div class="row">
                    <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Input
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3></h3>
                                    <form action="<?php echo base_url(); ?>index.php/cruddata/addProductDb" method="post" role="form">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama anda"
                                            value="<?php echo base_url(); ?>index.php/cruddata/_set_rules" />
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Masukan Username anda" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Masukan Password anda" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" name="email" placeholder="Masukkan Email anda" />
                                        </div>
                                        <button type="submit" class="btn btn-primary"> Simpan </button>
                                    <button type="reset" class="btn btn-default"> Batal </button>
                                    </form>
                                    
                                </div>

                        <div class="col-md-6">
                        <!-- Tabel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Tabel Database
                            </div>
                            <div class="panel-body">
                                <form action="<?php echo base_url(); ?>index.php/cruddata/updateProdactDb">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        foreach ($listData->result() as $row) {
                                            ?>
                                        }
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->username ?></td>
                                            <td><?= $row->email ?></td>
                                            <td>
                                                <a href="<?php echo base_url();?>index.php/cruddata/updateProduct/<?php echo $row->id; ?>"> Update</a>
                                                |
                                                <a href="<?php echo base_url();?>index.php/cruddata/deleteProductDb/<?php echo $row->id; ?>"> Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                            </form>
                        </div>
                    </div>
                     <!-- End Tabel -->
                </div>
                </div>
                </div>
            </div>
            </div>        
        </div>
        </div>
    </div>
    </div>
         
    <!-- JQUERY SCRIPTS -->
    <script src="tampilan/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="tampilan/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="tampilan/assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="tampilan/assets/js/custom.js"></script>
    
   
</body>
</html>

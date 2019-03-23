<!DOCTYPE HTML>

<html>
	<head>
		<title>TUNFC. - Telkom University National Futsal Championship</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>" />
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url().'images/tunico.png' ?>">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>

		<!-- Bootstrap CSS -->
   		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body class="subpage">

		<!-- Header -->
			<?php include 'header.php';?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>TUNFC</p>
						<h2>Registration</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content col-md-12">
							<header class="align-center">
								<p>tunfc</p>
								<h2>Data Pendaftar</h2>
							</header>
							<table id="table-id" class="display">
									<tr>
			                            <thead class="thead-light">
			                                <th>Nama</th>
			                                <th>NIM</th>
			                                <th>Jurusan</th>
			                                <th>Angkatan</th>
			                                <th>Alamat</th>
			                                <th>Jenis Kelamin</th>
			                                <th>E-mail</th>
			                                <th>Telp</th>
			                            </thead>
			                            
			                        </tr>
			                    <?php
			                        foreach ($data as $d) {
			                          ?>
			                        <tr>
			                        	<thead class="text-dark">
			                                <td><?php echo $d['Nama']; ?></td>
			                                <td><?php echo $d['NIM']; ?></td>
			                                <td><?php echo $d['Jurusan']; ?></td>
			                                <td><?php echo $d['Angkatan']; ?></td>
			                                <td><?php echo $d['Alamat']; ?></td>
											<td><?php echo $d['jenisKelamin']; ?></td>
											<td><?php echo $d['email']; ?></td>
											<td><?php echo $d['telp']; ?></td>
										</thead>
			                        </tr>
			                        <?php } ?>
			                </table>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<?php include 'footer.php';?>

		<!-- Scripts -->
			<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/jquery.scrollex.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/skel.min.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/util.js'?>"></script>
			<script src="<?php echo base_url().'assets/js/main.js'?>"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    		<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    		<script type="text/javascript">
		        $(document).ready(function(){
		            /*JQUERY PLUGIN DATATABLE*/

		            var table = $('#myTable').DataTable();
		 
		            $('#myTable tbody').on( 'click', 'tr', function () {
		                if ( $(this).hasClass('selected') ) {
		                    $(this).removeClass('selected');
		                }
		                else {
		                    table.$('tr.selected').removeClass('selected');
		                    $(this).addClass('selected');
		                }
		            } );
		         
		            $('#buttonDel').click( function () {
		                table.row('.selected').remove().draw( false );
		            } );

		            /*JQUERY PLUGIN DATATABLE*/
		        });
		    </script>

	</body>
</html>
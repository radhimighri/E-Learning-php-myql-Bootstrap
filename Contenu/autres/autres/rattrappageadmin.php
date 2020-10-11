<!DOCTYPE html>
<html lang="fr">
	<head>
			<?php
	session_start();
?>
<?php
include ("function.php");
		//testAdmin();

?>
<?php
connectMaBase();
?>

		<?php
		include ("incssjsmore.php");
		?>

		<title>ISMAI Kairouan</title>

		<!-- Bootstrap core CSS -->
		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >

	</head>

	<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menuadmin.php");
		?>

		<div class="container theme-showcase" role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
			<?php
			include ("baniere.php");
			?>
			
			<?php
			include ("left.php");
			?>

			<div class="jumbotron" style="width: 73%; float: right;">
				
				<div class="row">
						<form method="post" action="rattrappageadmin.php">
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<input type="text" class="form-control" placeholder="matiere"  name="matiere" />
			</div><!-- /input-group -->
			</div>
            <hr/>
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<input type="text" class="form-control" placeholder="prof"  name="prof" />
			</div><!-- /input-group -->
			</div>
            <hr/>
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<input type="date" formnovalidate="formnovalidate" class="form-control" placeholder="date"  name="dater" />
			</div><!-- /input-group -->
			</div>
            <hr/>
            <div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<input type="date" formnovalidate="formnovalidate" class="form-control" placeholder="heure"  name="heure" />
			</div><!-- /input-group -->
			</div>
            <hr/>
           <?php  
		  //connexionabase();
		  $sqlgro = 'select *from  groupes ';
		  $reqgro = mysql_query($sqlgro) or die(mysql_error());
		  
		  ?>
			<div class="input-xlarge">
			<div class="input-group">
			<span class="input-group-addon"></span>
			<select name="groupe" class="form-control">
			<?php	while ($datag = mysql_fetch_array($reqgro)) {  ?>

			<option value="<?php echo $datag['nom_groupe']; ?>"><?php echo $datag['nom_groupe']; ?></option>
			<?php } ?>
			</select>
			</div>
			</div><!-- /.col-lg-6 -->
			<hr />
         <center>   <button type="submit" name="valide" class="btn btn-info">publié</button> </center>

		    </form>		
            <?php
			connectMaBase();
			
			if(isset($_POST['valide'])){
			
			$matiere =$_POST['matiere'];
			$prof =$_POST['prof'];
			$dater =$_POST['dater'];
			$h =$_POST['heure'];
			$groupe =$_POST['groupe'];
			
			
			
			$sqlins='insert into rattrapage values ("","'.$prof.'","'.$matiere.'","'.$dater.'","'.$h.'","'.$groupe.'")';
			$req = mysql_query($sqlins) or die(mysql_error());
			}
			
			?>					

				</div>
    
			</div>
            
		</div>
                     
                
		<?php
		include ("foot.php");
		?>

		<!-- /container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php
		include ("fast.php");
		?>

	</body>
</html>
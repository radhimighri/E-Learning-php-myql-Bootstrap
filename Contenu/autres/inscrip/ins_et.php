<!DOCTYPE html>
<html lang="fr">
	<head>
    <title>ISMAI Kairouan</title>
<?php
	session_start();
?>
<?php
include ("function.php");
	
?>
<?php
connectMaBase();
?>


		<?php
		include ("incssjsmore.php");
		?>

	

		<?php
		include ("incssjs.php");
		?>
				<link rel="shortcut icon"  href="icon/favicon.ico" >
				
				
				
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
    <link rel="stylesheet" href="dist/css/bootstrapValidator.css"/>
    <script type="text/javascript" src="vendor/jquery/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="dist/js/bootstrapValidator.js"></script>
</head>
<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menu.php");
		?>

<div class="container theme-showcase" role="main">
        
			<?php
	include ("baniere.php");
	       ?>
			
			<?php
			include ("left.php");
			?>

       
       			<div class="jumbotron" style="width: 73%; float: right;">
			<div class="row">
			<div class="page-header" style="margin-top: -6%;">
			<h2 align="center">Inscription Etudiant</h2>
			</div>
</br>
                    <form id="defaultForm" method="post" class="form-horizontal" action="ins_etud.php">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Nom complet</label>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="firstName" placeholder="nom" />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="lastName" placeholder="prenom" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">CIN</label>
                            <div class="col-lg-5">
                                <input type="numeric" class="form-control" name="username"  placeholder="CIN"/> 
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email address</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="email" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mot de passe</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="password" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Retappez mot de passe</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="confirmPassword" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Sexe</label>
                            <div class="col-lg-5">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="Masculin" /> Masculin
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" value="Feminin" /> Feminin
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Date de Naissance</label>
                            <div class="col-lg-5">
                                <input type="date" class="form-control" name="birthday" />
                            </div>
                        </div>

	   <div class="form-group">
                	<?php  
		  $sqlgrp = 'select *from  groupes ';
		  $reqgrp = mysql_query($sqlgrp) or die(mysql_error());
		  
		  ?>
           <label class="col-lg-3 control-label">Groupe</label>
           <div class="col-lg-5">
			<select name="grp" class="form-control">
			<?php	while ($datag = mysql_fetch_array($reqgrp)) {  ?>

			<option value="<?php echo $datag['id_groupe']; ?>"><?php echo $datag['nom_groupe']; ?></option>
			<?php } ?>
			</select>
			</div>                            
            </div>             



             
                              <div class="form-group">
                            <label class="col-lg-3 control-label">Telephone</label>
                            <div class="col-lg-5">
                                <input type="numeric" class="form-control" name="tel"  placeholder="Telephone"/> 
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-lg-3 control-label" id="captchaOperation"></label>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" name="captcha" />
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="button" class="btn btn-danger" id="resetBtn">Annuler</button>
                                <button type="submit" class="btn btn-primary" name="signup" value="signup">Confirmer <span class="glyphicon glyphicon-thumbs-up"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
			connectMaBase();

			if (isset($_POST['signup'])) {
					
				$cin = $_POST['username'];
				$nom = $_POST['firstName'];
				$prenom = $_POST['lastName'];
				$sexe = $_POST['gender'];
				$date_n = $_POST['birthday'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$grp = $_POST['grp'];	
				$tel = $_POST['tel'];
				//echo "edfbvgertbretbrtnbrtnrnr  0".$tel;
					//On prépare la commande sql d'insertion
				$sql = 'INSERT INTO utilisateurs VALUES("","' . $cin . '","' . $nom . '","' . $prenom . '","' . $sexe . '","' . $date_n . '","' . $email . '","' . $password . '","' . $tel . '","etud",null , "' . $grp . '","0")';
				mysql_query($sql) or die('Erreur SQL !' . $sql . '<br />' . mysql_error());
				
				header('Location: ./inscrip_success.php');
				/*on lance la commande (mysql_query) et au cas où,
				 on rédige un petit message d'erreur si la requête ne passe pas (or die)
				 (Message qui intègrera les causes d'erreur sql)*/
				// on ferme la connexion
				mysql_close();
			}
		?>
                
 
        </div>
    </div>
            
<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: 'saisir votre nom'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'saisir votre prenom'
                    }
                }
            },
            username: {
                message: 'CIN invalid',
                validators: {
                    notEmpty: {
                        message: 'saisir votre CIN',
                    },
                    stringLength: {
                        min: 8,
                        max: 8,
                        message: 'le langueur de CIN doit etre egal à 8'
                    },
                    regexp: {
                        regexp: /^[0-9_\.]+$/,
                        message: ' CIN est de type numerique,'
                    },
                }
            },
            
                        tel: {
                message: 'Tel invalid',
                validators: {
                    notEmpty: {
                        message: 'saisir votre numero de telephone',
                    },
                    stringLength: {
                        min: 8,
                        max: 8,
                        message: 'le langueur de numero de telephone doit etre egal à 8'
                    },
                    regexp: {
                        regexp: /^[0-9_\.]+$/,
                        message: ' Tel est de type numerique,'
                    },
                }
            },

            
            
            
            email: {
                validators: {
                    emailAddress: {
                        message: "adresse email n'est pas valide"
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'saisir votre mot de passe'
                    },
                    different: {
                        field: 'username',
                        message: 'le mot de passe ne doit pas etre identique a votre cin '
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'le langueur de mot de passe doit etre entre 6 et 30 caractéres'
                    },
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'veillez confirmer votre mot de passe'
                    },
                    identical: {
                        field: 'password',
                        message: 'verifier la confirmation de votre mot de passe'
                    },
                    different: {
                        field: 'username',
                        message: 'le mot de passe ne doit pas etre identique a votre cin'
                    }
                }
            },
            
           /* birthday: {
                validators: {
                    date: {
                        format: 'dd-mm-yyyy',
                        message:  'Date de Naissance doit etre de ce format : JJ/MM/AAAA'
                    }
                }
            },
            */
           
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Selectionnez votre sexe'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'reponse incorrecte',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>


<?php
		include ("foot.php");
		?>

		<?php
		include ("fast.php");
		?>
</body>
</html>
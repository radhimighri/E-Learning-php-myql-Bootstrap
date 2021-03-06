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
include("config.php");
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
                        message: 'saisir nom'
                    }
                }
            },
            lastName: {
                validators: {
                    notEmpty: {
                        message: 'saisir prenom'
                    }
                }
            },
            username: {
                message: 'CIN invalid',
                validators: {
                    notEmpty: {
                        message: 'saisir CIN',
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
                        message: 'saisir numero de telephone',
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
                        message: 'saisir mot de passe'
                    },
                    different: {
                        field: 'username',
                        message: 'le mot de passe ne doit pas etre identique au numero de cin '
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
                        message: 'veillez confirmer le mot de passe'
                    },
                    identical: {
                        field: 'password',
                        message: 'verifier la confirmation de mot de passe'
                    },
                    different: {
                        field: 'username',
                        message: 'le mot de passe ne doit pas etre identique au numero de cin'
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
           
            sexe: {
                validators: {
                    notEmpty: {
                        message: 'Selectionnez le sexe'
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
    
</head>
<body role="document" style="margin-bottom: 90px;">

		<!-- Fixed navbar -->
		<?php
		include ("menuproff.php");
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
			<h2 align="center">Inscription Enseignant</h2>
			</div>

</br>
                    <form id="defaultForm" method="post" class="form-horizontal" action="ins_enss.php">
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
                                        <input type="radio" name="sexe" value="Masculin" /> Masculin
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="sexe" value="Feminin" /> Feminin
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
		  $sqldep = 'select *from  departement ';
		  $reqdep = mysqli_query($base,$sqldep) or die(mysqli_error($base));
		  
		  ?>
           <label class="col-lg-3 control-label">Departement</label>
           <div class="col-lg-5">
			<select name="dep" class="form-control">
			<?php	while ($datadep = mysqli_fetch_array($reqdep)) {  ?>

			<option value="<?php echo $datag['id_departement']; ?>"><?php echo $datadep['nom_departement']; ?></option>
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

                            <div class="col-lg-9 col-lg-offset-3">
                                <button type="button" class="btn btn-danger" id="resetBtn">Annuler</button>
                                <button type="submit" name="valider" class="btn btn-success btn-large">Valider <span class="glyphicon glyphicon-thumbs-up"></span></button>
                           </div>
                             </form>
                </div>
                           
 </div></div>


<?php
		include ("foot.php");
		?>

		<?php
		include ("fast.php");
		?>
</body>
</html>
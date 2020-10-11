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
         /*   firstName: {
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
            }, */
            password: {
                validators: {
                    notEmpty: {
                        message: 'Saisir mot de passe'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Le langueur de mot de passe doit etre entre 6 et 30 caractéres'
                    },
                }
            },
			/*
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Veillez confirmer le mot de passe'
                    },
                    identical: {
                        field: 'password',
                        message: 'Verifier la confirmation de mot de passe'
                    },
                    different: {
                        field: 'username',
                        message: 'Le mot de passe ne doit pas etre identique au numero de cin'
                    }
                }
            },
            
            birthday: {
                validators: {
                    date: {
                        format: 'dd-mm-yyyy',
                        message:  'Date de Naissance doit etre de ce format : JJ/MM/AAAA'
                    }
                }
            },
            */
           
          /*  sexe: {
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
            }*/
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
			<h2 align="center">Changement de mot de passe</h2>
			</div>

</br>
                    <form id="defaultForm" method="post" class="form-horizontal" action="changer_pwdphp_prof.php">
            

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Mot de passe</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="password" />
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
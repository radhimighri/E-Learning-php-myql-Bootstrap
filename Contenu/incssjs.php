<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">

		<!-- Custom styles for this template -->
		<link rel="stylesheet" href="css/bootstrap-theme.css">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css"></style>
		<style id="holderjs-style" type="text/css"></style>		        <style type="text/css"></style>
		<script type="text/javascript" async="" src="./indexc_files/ga.js"></script>
		<script type="text/javascript" async="" src="./indexc_files/mixpanel-2.1.min.js"></script>
        <script type="text/javascript"  src="js/bstmin.js"></script>
         <script type="text/javascript"  sr></script>
		<style type="text/css"></style>
		<style type="text/css">
			#reviewsDisp, #reviewsDisp * {
				position: relative;
				color: inherit;
				font-family: Arial;
				font-weight: inherit;
				font-size: inherit;
				margin: 0;
				padding: 0;
				box-sizing: content-box;
				-moz-box-sizing: content-box;
				-webkit-box-sizing: content-box;
				text-align: center;
				line-height: 1;
				border: none;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				border-radius: 0;
				text-shadow: none;
				-moz-box-shadow: none;
				-webkit-box-shadow: none;
				box-shadow: none;
				overflow: hidden;
			}
			#reviewsDisp {
				display: block;
				position: relative;
				margin: 9px;
				width: 143px;
				height: 70px;
				color: #BABABA;
				background: #FFF;
				border: 1px solid #BABABA;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				overflow: hidden;
			}
			#reviewsDisp.reviewRed {
				color: #C66;
			}
			#reviewsDisp.reviewYellow {
				color: #C90;
			}
			#reviewsDisp.reviewGreen {
				color: #6B9E0C;
			}
			#reviewsDisp .reviewContent {
				display: block;
				float: left;
				width: 119px;
			}
			#reviewsDisp .reviewTitle {
				height: 23px;
				font-size: 14px;
				color: #69C;
				font-weight: bold;
				background: #ffffff;
				background: -moz-linear-gradient(top,  #ffffff 0%, #eeeeee 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eeeeee));
				background: -webkit-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);
				background: -o-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);
				background: -ms-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);
				background: linear-gradient(to bottom,  #ffffff 0%,#eeeeee 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );
			}
			#reviewsDisp.trust.reviewRed .reviewTitle, #reviewsDisp.trust.reviewYellow .reviewTitle, #reviewsDisp.trust.reviewGreen .reviewTitle {
				color: inherit;
			}
			#reviewsDisp .reviewTitle > div {
				line-height: 23px;
			}
			#reviewsDisp .reviewSection {
				height: 28px;
				margin: 5px 0 0;
				font-size: 12px;
				font-weight: bold;
			}
			#reviewsDisp .reviewSection .percent.rated {
				font-size: 26px
			}
			#reviewsDisp .reviewSection .percent span {
				font-size: 18px;
				position: relative;
				top: -7px;
			}
			#reviewsDisp .reviewSection .reviewStars {
				color: #BABABA;
				font-size: 12px;
				margin-left: 4px;
			}
			#reviewsDisp .reviewSection .reviewStar {
				float: left;
				margin-top: 3px;
				width: 22px;
				height: 22px;
				background: url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent;background }#reviewsDisp .reviewSection .reviewStar.reviewStarFull {
				background-position: -5px -88px
			}
			#reviewsDisp .reviewSection .reviewStar.reviewStarHalf {
				background-position: -27px -88px
			}
			#reviewsDisp .reviewSection .reviewStar.reviewStarNone {
				background-position: -49px -88px
			}
			#reviewsDisp .reviewFooter {
				font-size: 10px;
				line-height: 12px;
				color: #BABABA;
			}
			#reviewsDisp.trust .reviewFooter {
				color: inherit;
				margin: 0 5px;
				overflow: hidden;
			}
			.trust .rate {
				display: none
			}
			.rate .trust {
				display: none
			}
			#reviewsDisp .reviewNav {
				width: 24px;
				display: block;
				float: right;
			}
			#reviewsDisp .reviewNav .reviewBtn {
				display: block;
				height: 23px;
				background: url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent;
				background-color: #E3E3E3;
				border-bottom: 1px solid #FFF;
				cursor: pointer;
			}
			#reviewsDisp .reviewNav .reviewBtn:last-child {
				border-bottom: none;
			}
			#reviewsDisp .reviewNav .reviewBtn.hover {
				background-color: #D1D1D1;
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewSelected {
				background-color: #BABABA;
				cursor: auto;
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewCheck {
				background-position: -3px -6px
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewCheck {
				background-position: -33px -6px
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewThumb {
				background-position: -3px -59px
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewThumb {
				background-position: -33px -59px
			}
			#reviewsDisp .reviewNav .reviewBtn.reviewInfo {
				background-position: -3px -32px
			}
		</style>
        
        <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap theme --> <link rel="stylesheet" href="css/bootstrap-theme.min.css"> <!-- Custom styles for this template --> <link rel="stylesheet" href="css/bootstrap-theme.css"> <script src="js/bootstrap.min.js"></script> <script src="js/bootstrap.js"></script> <script src="js/jq.js"></script> <script src="js/bstmin.js"></script>
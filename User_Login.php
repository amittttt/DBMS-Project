<?php
session_start();
	if(isset($_GET["login"]))
	{
		include 'database.php';
		$emailid=mysql_real_escape_string($_GET["emailid"]);
		$pwd=mysql_real_escape_string($_GET["pwd"]);
		$q=mysql_query("select * from user_details where emailid='".$emailid."' and password='".$pwd."'");
			if($arr=mysql_fetch_array($q))
				{
					$_SESSION["uid"]=$arr["user_id"];
					 
					header ("location:startbootstrap-business-casual-1.0.4/Dashboard.php");
				}
			else
				{
					echo "invalid info";
				}
		
		
	}

?>


<script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
<!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6-dist/bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
<form method="get">
<div class="container">
    <div class="row vertical-offset-100">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Please sign in</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="E-mail" name="emailid" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="pwd" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>

			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login">
						<br />
                        <a href="user_forgetpasswrd.php"> ForgetPassword </a>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <a href="form-1/index.php"> Singup </a>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
</form>
<style>
/*body{
    background: url(http://mymaplist.com/img/parallax/back.png);
	background-color: #444;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
}*/

.vertical-offset-100{
    padding-top:100px;
}
</style>

<script>

$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});

</script>
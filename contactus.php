<?php
//echo dirname(__FILE__)."/people.txt";

$name = $_POST['name'];
$message = $_POST['message'];

	$to = "studio@challengeradio.co.uk";
	$subject = $name.'\'s email via challengeradio.co.uk';
	$message = email_content($name, $message);
	$headers = 'From: Challenge Radio Website <website@challengeradio.co.uk>' . "\r\n" .
	'Content-type: text/html' . "\r\n" .
    	'Reply-To: '.$_POST['email']. "\r\n" .
    	'Cc: hello@fredbradley.co.uk' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
mail ( $to, $subject, $message, $headers ); // [, string $additional_headers [, string $additional_parameters ]] );



function email_content($name, $message) { 
return "		<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">

 <html lang=\"en\">
  <head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\">
    <title>
      Email from Challenge Radio Website
    </title>
	<style type=\"text/css\">
	a:hover { text-decoration: none !important; }
	.header h1 {color: #000; font: bold 54px Helvetica, Arial,sans-serif; margin: 0; padding: 0; line-height: 55px;letter-spacing: -3px; }
	.header p {color: #000; font: normal 17px Helvetica, Arial,sans-serif; margin: 0; padding: 0; line-height: 18px; font-style: italic;}
	.header h3 {color: #000; font: normal 18px Courier, 'Monaco', monospace;  margin: 0; padding: 0; line-height: 18px; }
	.header .subscribe p {font-size: 10px; line-height: 18px; color:#000; margin: 0; padding: 0;font-family: 'Monaco', monospace; text-transform:uppercase; font-style: normal; word-spacing: -1px;}
	.header .subscribe p a{ color: #000;}
	
	
	.content h2 {color:#000; font-weight: bold; line-height: 31px; font-size: 31px; font-family: Helvetica, Arial,sans-serif; letter-spacing: -1px;  margin: 0; padding: 0; }
	.content p {color:#000; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Courier, 'Monaco', monospace;}
	.content a {color: #000;}
	.content a.more {color: #fff; background: #000; text-decoration: none; line-height: 16px; padding: 2px 0;}
	.footer p {font-size: 11px;  line-height: 18px; color:#000; margin: 0; padding: 0;font-family: Courier, 'Monaco', monospace; letter-spacing: -1px;}
	.footer p a{ color:#000;}
	.footer a.send {color: #fff; background: #000; text-decoration: none; line-height: 16px; padding: 2px 0}
 	a {color: #000;}
	.case {background: #ffde00 url('images/bg_email.png'); }     
	</style>
	<!--[if gte mso 9]>
	<style type=\"text/css\">
     .body{background: #ffde00 url('images/bg_email.png');	     
	 .case { background:none;}
     </style>
	   <![endif]-->  
	</head>
	<body style=\"margin: 0; padding: 0;\" class=\"body\">
	    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" width=\"100%\">
	          <tr>
	               <td align=\"center\" style=\"padding: 5px 0 50px; background: #ffde00 url('images/bg_email.png');color:#000\" class=\"case\">
	                <!--[if gte mso 9]>
	            <td align=\"center\" style=\"padding: 5px 0 50px; background: none;color:#000\">
	         <![endif]-->
			    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"font-family: Courier, 'Monaco', monospace;\" class=\"header\">
			      	
				 
				  
				  <tr>
				    <td align=\"left\" style=\"padding: 0 0 26px;\" valign=\"bottom\" width=\"100%\">
						<h1 style=\"color: #000; font: bold 54px Helvetica, Arial,sans-serif; margin: 0; padding: 0; line-height: 55px;letter-spacing: -3px;padding:5px;\">".$name."</h1>
						<p style=\"color: #000; font: normal 17px Helvetica, Arial,sans-serif; margin: 0; padding: 5px; line-height: 18px; font-style: italic;\">has emailed via challengeradio.co.uk...</p>
			        </td>
					
			      </tr>
				</table><!-- header-->
				<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"font-family: Courier, 'Monaco', monospace; \">
			      	
					<tr>
					
					<td width=\"100%\" valign=\"top\" align=\"left\" style=\"font-family: Courier, 'Monaco', monospace;\" class=\"content\">
						<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"  style=\"color: #000; font: normal 11px Courier, 'Monaco', monospace; margin: 0; padding: 0;\" width=\"100%\">
						<tr>
							<td style=\"padding: 20px 0 25px;\" align=\"left\">			
								<h2 style=\"color:#000; font-weight: bold; line-height: 31px; font-size: 31px; font-family: Helvetica, Arial,sans-serif; letter-spacing: -1px;  margin: 0; padding: 5px;\">They say...</h2>
							</td>
						</tr>
						<tr>
							<td style=\"padding: 0px 0 25px;\"  valign=\"top\">
								<p style=\"color:#000; font-weight: normal; margin: 0; padding: 5px; line-height: 20px; font-size: 14px;font-family: Courier, 'Monaco', monospace;font-size:22px; \">
									".$message."
								</p>
							</td>
						</tr>
						
						<tr>
					        <td align=\"left\" style=\"height:20px; font-size: 1px; line-height: 1px; background:#000\" height=\"20\" valign=\"top\">&nbsp;</td>
					     </tr>
						
						</table>	
					</td>
				
			      </tr>
				  
			     </table><!-- body -->
				
		  	</td>
		</tr>
    </table>
  </body>
</html>";
 }
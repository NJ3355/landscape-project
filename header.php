<!doctype html>
<html>
       <head>
               <title><?php echo isset($title) ? $title : "Total Landscape"; ?></title>
               
               <link rel="stylesheet" type="text/css" href="CSS/indexcss.css">
               <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/le-frog/jquery-ui.css" type="text/css" media="all" />
               <link href='https://fonts.googleapis.com/css?family=Noto+Serif' rel='stylesheet' type='text/css'>
               <script type="text/javascript" src="slideshowfile.js"></script>
               <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
               <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
               <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
               
               <script>
                       jQuery(function($) {
                               $( "#datePicker" ).datepicker();
                       });
               </script>
               
       </head>
       <body>
               <div id="header">
                       <div id="phone">
                               <h3>Call us now! 555-555-5555</h3>
                       </div>
                       <div id="navbar">
                               <div id="logo">
                                       <img src="images/logo.jpg">
                               </div>
                               
                               <div id="navlinks">
                                       <ul>
                                               <li><a href="index.php"><img src="images/leaf2.png">Home</a></li>
                                               <li><a href="testimonials.php"><img src="images/leaf2.png">Testimonials</a></li>
                                               <li><a href="jobs.php"><img src="images/leaf2.png">Services</a></li>
                                                       
                                               <li><a href="contact.php"><img src="images/leaf2.png">Contact Us</a></li>
                                       </ul>
                               </div>
                       </div>        
               </div>
               <div id="slideshow">
                       <img name="slide" src="images/landheader.jpg">
               </div>
     
 

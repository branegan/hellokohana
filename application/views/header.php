<!doctype html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Some site</title>
<link rel="stylesheet" href="css/styles.css" type="text/css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<script type=text/javascript src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<body>
<div class="wrapper">
		<header>
				<a href="/"><img src="images/logo.png" alt="Some site logo"></a>
		</header>
		<nav>
				<ul class="top-menu">
                    <?php 
                    foreach ($menu as $menu_name)
                    echo "<li><a href='/$menu_name'>$menu_name</a></li>";
                    ?>
				</ul>
        </nav>

        <script type=text/javascript>
            $("ul.top-menu li").hover(function(){
                $(this).toggleClass('active');
            });
        </script>
        <script type=text/javascript>
            $('ul.top-menu li a').click(function(event) {
                event.preventDefault();
                var href=$(this).attr('href');
                /* document.location.href = href; */
                $.ajax({
                    url: href,
                    type: 'POST',
                    data: { lasturl: "1" },
                    success: function (data) { 
                        $("#content").html(data);
                    }
                });
            }); 
        </script>

		<div class="heading">
        <span><h1><?php echo $heading?></h1>
                    <form name="search" action="#" method="get">
                         <input type="text" name="q" placeholder="Search"><button type="submit">GO</button>
                    </form>
                </span>
		</div>

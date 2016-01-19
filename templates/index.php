<html>

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="azulejoe.css">
    <link rel="stylesheet" type="text/css" href="note.css">
    <script language="javascript" src="javascript/sha1.js"></script>
    <!--The next two lines are part of the code that adds the loading screen.  The other part is the div tag marked 'loader' -->
 <script>
        function setup() {
            my_width = 720 / grid_size_columns * (Math.ceil(grid_size_columns / 2)) ;
            my_height = 520 / grid_size_rows;
            area = document.getElementById('messagewindow')
            $(area).css('width', my_width);
            $(area).css('left', (720 / grid_size_columns) +7 );
            $(area).css('top', (520 / grid_size_columns) +20 );
            $(area).css('height', my_height);
            top_page()
        }
    </script>
   <script src="javascript/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        })
    </script>
</head>


<body onload="setup()">
    <div class="loader" style=" position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999; background: url('interface/page-loader.gif') 50% 50% no-repeat rgb(249,249,249); "></div>
    <!--Used to put in the loading graphic-->
    <!--START THE FOUR CONTROLS AT THE TOP OF THE PAGE-->
    <form name="myform">
        <textarea id="messagewindow" name="outputtext"></textarea>
    </form>
    <table border=0px>
        <tr>
            <td><img onclick="makeWav()" src="interface/speak.png" height=100></td>
            <td><img onclick="image()" src="interface/google.jpg" height=100></td>
            <td><img onclick="tube()" src="interface/youtube.jpg" height=100></td>
            <td><img onclick="tweet()" src="interface/twitter.png" height=100></td>
        </tr>
    </table>
    <!--END THE FOUR CONTROLS AT THE TOP OF THE PAGE-->

    <!--START THE MAIN MAP -->
    <table id="mainGrid" border=1 height=520 width=720>

<? 
$table_size=5;
for ($i=0;$i<$table_size;$i++){
echo ' <tr>';
	for ($j=0;$j<$table_size;$j++){
	echo '            <td align="center" valign="middle"></td>';
	}
echo '        </tr>' ;}?>
    </table>

    <script language="javascript" src="javascript/read_json.js" type="text/javascript">
    
    </script>
    <!--START THE PRELOADING OF THE IMAGES-->
    <div class="hidden">
    </div>

    <!--END THE PRELOADING OF THE IMAGES-->
    
    <!--START THE GOOGLE ANALYTICS -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-43886525-1', 'auto');
        ga('send', 'pageview');
    </script>
    <div id="box"></div>

    <script type="text/javascript" src="javascript/scanning.js"></script>

    <button onClick="toggleScanning()">Toggle Scanning</button>
</body>

</html>

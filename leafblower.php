<!-- leafblower.html -->
<!DOCTYPE html>
<html>
	<head>
		<?php include_once('site-head.php'); ?>
    <link rel="preload" src="neko.php">
    <link rel="prefetch" src="neko.php">
    
    <script>
    $(document).ready(function(){
      $(".container").hide();
      $(".menu").click(function(){
          $(".container").hide();
          $("#"+$(this).data("id")).fadeToggle();
      });
    });     
    </script>
  </head>
  <body> 
    <main id="main" class="main">
<!--1-->
    <div class="w3-row">
      <aside class="sidebar">
        <div class="sidebar__wrap">
          <div class="sidebar__wrap__inner">

            <?php include_once('header.php'); ?>
            <div data-id="none" class="cancel"></div>

          </div>
        </div>
      </aside>
    </div>  
<!--/1-->

<!--2-->
<?php include_once('selections.php'); ?>
      <!--/div-->
      
      
    <!--EXAMPLE IFRAME-->
      <div id="vr-container">
      <i-frame id="vr-iframe" class="vr__iframe" allowfullscreen="yes" scrolling="no" allowvr="yes" src="https://aframe.io/aframe/examples/boilerplate/360-video/" width="100%" height="100%">
      	
      	<!DOCTYPE html>
      	<html class="a-html">
	      	<head>
	      		<title>PIMG</title>
	      	</head>
	      	<body>
	      	
          <div class="fullscreen-bg">
    <video loop autoplay class="fullscreen-bg__video">
        <source src="vids/leafblowerman.webm" type="video/webm">
        <source src="vids/leafblowerman.mp4" type="video/mp4">
        <source src="vids/leafblowerman.ogv" type="video/ogg">
    </video>
</div>
	    	</body>
	    </html>	
	 
      </i-frame>
    </div>

      <!-- <div class="w3-col w3-container m10 l9"> -->
        <!-- <div id="container"> -->

          <div id="aboot" class="container"><p>The awe-striking power of virtual reality is evident to most anyone who tries it: a visceral feeling of being immersed in a fantasy, a full body epiphany one must experience first hand to believe.</p><br><br>

          <p>For the members of PIMG, these technologies represent nascent possibilities igniting our imagination. We see them as precipitating a paradigm shift toward a new era of multi-sensory communication, with uniquely empathic, beatific, and therapeutic potential­.</p> <br><br>

          <p>Offsetting this promise however are questions of access, accountability, Privacy, and human transmutability: who will have means to these technologies? How will individuals be altered or compromised by their use? Will continued reliance on high-priced software and hardware result in asymetrical communication in the metaverse?</p><br><br>

          <p>It's this sort of criticality which PIMG wishes to bring to public discourse through immersive realm-builing, ardent experimentation, and  visceral installations that bridge the virtual and the physical.</p><br></div>

        <!-- s -->

          <div id="group" class="container">
          <table style="margin:auto; margin-top:80px">
        
                <tr align="center">
                <td id="table-group"><a class="matt" href="http://xhurch.net" target="_blank">Matt<br>Henderson</a></td>
                <td id="table-group"><a class="seanna" href="https://www.patreon.com/user/community?u=2514667" target="_blank">Seanna<br>Musgrave</a></td>
                <td id="table-group"><a class="damon" href="http://damonpidhajecky.com/" target="_blank">Damon<br>Pidhajecky</a></td>
                <td id="table-group"><a class="stephanie" href="https://liooil.space" target="_blank">Stephanie<br>Mendoza</a></td>
                </tr>
                <tr align="center">
                
                <td id="table-group"><a class="michelle" href="https://vimeo.com/michellemckay" target="_blank">Michelle<br>Mckay</a></td>
                <td id="table-group"><a class="scott" href="http://thedreaminghour.com/tumblr/" target="_blank">Scott<br>Mayroal</a></td>
                <td id="table-group"><a class="sonya" href="https://neunzert.myportfolio.com/" target="_blank">Sonya<br>Neunzert</a></td>
                <td id="table-group"><a class="dave" href="http://signalculture.org/dave-mosier.html#." target="_blank">Dave<br>Mosier</a></td>
                </tr>
                <tr align="center">
                <td id="table-group"><a class="michael" href="http://officialmichaelgreen.com/OfficialMichaelGreen" target="_blank">Michael<br>Green</a></td>
                <td id="table-group"><a class="mark" href="http://www.marknerys.com/" target="_blank">Mark<br>Nerys</a></td>
                <td id="table-group"><a class="joel" href="https://www.linkedin.com/in/joel-delight" target="_blank">Joel<br>Delight</a></td>
                <td id="table-group"><a class="wolfgang" href="https://www.linkedin.com/in/wolfgangwebdev" target="_blank">Wolfgang<br>Werneke</a></td>
                </tr>
            </table></div>

          
          <div id="ea" class="container">
          <table style="margin:auto">
                <tr align="center"><td style="font-variant:small-caps; padding:.05em; font-size:2em">Past Events</td></tr>
                <tr><td>
                <ul style="list-style:none">
            <li><a href="https://www.youtube.com/watch?v=LHkBzdLKmNE" target="_blank">Chat Room @ Town Hall Seattle (SEA) - 12/14/16</a></li>
            <li><a href="https://community.pcmtv.org/education/workshops/specialty/vr-spa-portland-immersive-media-group/18191" target="_blank">VR Spa @ Portland Community Media (PDX) - 12/05/16</a></li>
            <li><a href="http://www.retrogamingexpo.com/exhibitors.php" target="_blank">Portland Retro Gaming Expo (PDX) - 10/23/16</a></li>
            <li><a href="http://www.indiecade.com/games/selected/vr-spa" target="_blank">IndieCade 2016 (LA) - 10/13/16</a></li>
            <li><a href="http://www.outofsight.space/" target="_blank">Out of Sight (SEATTLE) - 08/04/16</a></li>
            <li><a href="http://www.institutefornewfeeling.com/feltbook" target="_blank">Felt Book @ Werkartz (LA) - 05/23/16</a></li>
            <li><a href="http://journalism.uoregon.edu/whatis/media/habitats/" target="_blank">Habitats / What is Media? (PDX) - 04/14/16</a></li>
            <li><a href="http://xhurch.net/photomatrix.html" target="_blank">NTVTY VI @ Xhurch (PDX) - 12/21/15</a></li>
           </ul></td>
        </tr>
        <tr align="center"><td style="font-variant:small-caps; padding:.1em; font-size:1.5em">Awards</td></tr>
        <tr align="center">
                <td><img src="images/precipice_fund_p.png" width="75"><br><a href="http://pica.org/precipice-fund/2015-grant-recipients/" target="_blank">Precipice Fund<br>2016 Grantees</a></td>
                <td><img src="https://upload.wikimedia.org/wikipedia/commons/e/ea/IndieCade_logo.png" width="100"><br><a href="http://www.indiecade.com/games/selected/vr-spa" target="_blank">IndieCade<br>2016 Finalists</a></td>
                </tr>
                <tr align="center"><td style="font-variant:small-caps; padding:.1em">Supported By</td></tr>
                <tr>
                <td><img src="images/vive_logo.png" width="120"></td>
                <td><img src="images/andy_warhol_logo.png" width="130"></td>
                <td><img src="images/calligram_logo.png" width="150"></td>
                <td><img src="http://pica.org/wp-content/uploads/2013/02/PICA_design.png" width="95"></td>
                </tr>
            </table>


          <div id="contact" class="container">
          <p>c o n t a c t</p><br><br>

          <p>info@pdximmersive.media</p> <br><br>

          <p>d e t a i l s</p><br><br>

          <p>s o c i a l</p><br></div>       
          
          <div id="cancel" class="container"></div>  

    <!-- </div> -->    
<!--/2-->    
    </main>
  </body>
</html>


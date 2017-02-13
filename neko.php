<!DOCUMENT html>
<html>
	<head>
		<?php include_once('site-head.php'); ?>
	</head>
	<body>
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
		<a-scene>
			<a-asset>
				<video id="vid" src="vids/maneki-neko-360.mp4" autoplay loop crossorigin></video>
			</a-asset>




			<a-entity id="link-box" position="0 -100 -420" scale="10 10 10" rotate="0 0 0" geometry="box" material="opacity: 0.45" href="index.shtml">
				<a-animation attribute="rotation"
	               dur="10000"
	               fill="forwards"
	               to="0 360 0"
	               repeat="indefinite"></a-animation>
			</a-entity>

			<a-videosphere src="#vid" rotation="0 -90 1"></a-videosphere>

			<a-entity position="0 0.75 0" camera look-controls wasd-controls>
	              <a-cursor material="color: yellow; shader: flat"></a-cursor>
	            </a-entity>
		</a-scene>
	</body>
</html>
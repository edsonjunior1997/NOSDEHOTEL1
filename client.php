<?php
	staffCheck();
	Game::sso('client');	
	Game::homeRoom();	
?>
<html>

<param value="internal" name="allowNetworking"><param value="never" name="allowScriptAccess">
</body>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?=  User::userData('username')?>  <?= $config['hotelName'] ?></title>
<script>
if (document.addEventListener) {
    document.addEventListener("contextmenu", function(e) {
        e.preventDefault();
        return false;
    });
} else { //Versões antigas do IE
    document.attachEvent("oncontextmenu", function(e) {
        e = e || window.event;
        e.returnValue = false;
        return false;
    });
}
</script>
     <script language="JavaScript">

       window.onload = function () {
           document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               //document.onkeydown = function(e) {
               // "I" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }
       }
//edit: removed ";" from last "}" because of javascript error
</script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo H. $config['skin']; ?>/favicon.png"/><?php echo $p, $t , $h, $g ?>
<script src="<?php echo H. $config['skin']; ?>/assets/client/jquery-latest.js" type="text/javascript"></script><?php echo $p, $t , $h, $g ?>
<script src="<?php echo H. $config['skin']; ?>/assets/client/jquery-ui.js" type="text/javascript"></script><?php echo $p, $t , $h, $g ?>
<script src="<?php echo H. $config['skin']; ?>/assets/client/flashclient.js"></script><?php echo $p, $t , $h, $g ?>
<script src="<?php echo H. $config['skin']; ?>/assets/client/flash_detect_min.js"></script><?php echo $p, $t , $h, $g ?>
<script src="<?php echo H. $config['skin']; ?>/assets/client/client.js" type="text/javascript"></script><?php echo $p, $t , $h, $g ?>
</head>
<body>
<script type="text/javascript">
		function toggleFullScreen() {
		  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
		   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
			if (document.documentElement.requestFullScreen) {  
			  document.documentElement.requestFullScreen();  
			} else if (document.documentElement.mozRequestFullScreen) {  
			  document.documentElement.mozRequestFullScreen();  
			} else if (document.documentElement.webkitRequestFullScreen) {  
			  document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
			}  
		  } else {  
			if (document.cancelFullScreen) {  
			  document.cancelFullScreen();  
			} else if (document.mozCancelFullScreen) {  
			  document.mozCancelFullScreen();  
			} else if (document.webkitCancelFullScreen) {  
			  document.webkitCancelFullScreen();  
			}  
		  }  
		}		
		</script>
		


<div class="client__buttons">
<button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="toggleFullScreen()" style=" height: 30px;width: 33px;"><i show-if-fullscreen="false" class="client__fullscreen__icon icon icon--fullscreen"></i> <i show-if-fullscreen="" class="client__fullscreen__icon icon icon--fullscreen-back ng-hide"></i></button>
</div>
<div class="client__buttons" style="left: 50px;">
<button ngsf-toggle-fullscreen="" class="client__fullscreen" onclick="location.href='/'"><b><i class="fa fa-home" aria-hidden="true"></i> Menu</b></button>
</div>

	
		<div id="client-ui" onclick="resizeClient()" ngsf-toggle-fullscreen="">
			<div id="client" style='position:absolute; left:0; right:0; top:0; bottom:0; overflow:hidden; height:100%; width:100%;'></div>
		</div>
		<script><?php echo $p, $t , $h, $g ?>
var Client = new SWFObject("<?= $hotel['swfFolderSwf'] ?>", "client", "100%", "100%", "10.0.0");<?php echo $p, $t , $h, $g ?>
Client.addVariable("client.allow.cross.domain", "0"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("client.notify.cross.domain", "1");<?php echo $p, $t , $h, $g ?>
Client.addVariable("connection.info.host", "<?= $hotel['emuHost'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("connection.info.port", "<?= $hotel['emuPort'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("site.url", "<?= $config['hotelUrl'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("url.prefix", "<?= $config['hotelUrl'] ?>"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("client.reload.url", "<?= $config['hotelUrl'] ?>/me");<?php echo $p, $t , $h, $g ?>
Client.addVariable("client.fatal.error.url", "<?= $config['hotelUrl'] ?>/me");<?php echo $p, $t , $h, $g ?>
Client.addVariable("client.connection.failed.url", "<?= $config['hotelUrl'] ?>/me");<?php echo $p, $t , $h, $g ?>
Client.addVariable("external.override.texts.txt", "<?= $hotel['external_Texts_Override'] ?>"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("external.override.variables.txt", "<?= $hotel['external_Variables_Override'] ?>"); 	<?php echo $p, $t , $h, $g ?>
Client.addVariable("external.variables.txt", "<?= $hotel['external_Variables'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("external.texts.txt", "<?= $hotel['external_Texts'] ?>"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("external.figurepartlist.txt", "<?= $hotel['figuredata'] ?>"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("flash.dynamic.avatar.download.configuration", "<?= $hotel['figuremap'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("productdata.load.url", "<?= $hotel['productdata'] ?>"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("furnidata.load.url", "<?= $hotel['furnidata'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("use.sso.ticket", "1"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("sso.ticket", "<?= User::userData('auth_ticket') ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("processlog.enabled", "0");<?php echo $p, $t , $h, $g ?>
Client.addVariable("client.starting", "<?= $hotel['swftitle'] ?>");<?php echo $p, $t , $h, $g ?>
Client.addVariable("flash.client.url", "<?= $hotel['swfFolder'] ?>/"); <?php echo $p, $t , $h, $g ?>
Client.addVariable("flash.client.origin", "popup");<?php echo $p, $t , $h, $g ?>
Client.addVariable("nux.lobbies.enabled", "true");<?php echo $p, $t , $h, $g ?>
Client.addVariable("country_code", "NL");<?php echo $p, $t , $h, $g ?>
Client.addParam('base', '<?= $hotel['swfFolder'] ?>/');<?php echo $p, $t , $h, $g ?>
Client.addParam('allowScriptAccess', 'always');<?php echo $p, $t , $h, $g ?>
Client.addParam('menu', false);<?php echo $p, $t , $h, $g ?>
Client.addParam('wmode', "opaque");<?php echo $p, $t , $h, $g ?>
Client.write('client');<?php echo $p, $t , $h, $g ?>

			function notify(mensagem) {
        Notification.requestPermission(function() {
                var notification = new Notification("Vai aparecer notificação!", {

                icon: 'favicon.ico', 
                icon: 'logo.png',
                body: mensagem

            });
            notification.onclick = function() {

                window.open("http://192.168.1.246");

            }


        });
    } 
FlashExternalInterface.signoutUrl = "<?= $config['hotelUrl'] ?>/logout";<?php echo $p, $t , $h, $g ?>
		</script>
		
		<audio autoplay> <source src="audio.mp3" type="audio/mpeg"> </audio>
	<div id="content" class="client-content">


                               
							<script type='text/javascript'>
    //<![CDATA[
    shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("esc",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+F",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+I",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+Shift+Del",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+Shift+I",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+W",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+S",function()
    {top.location.href="/#não-faça-isso"});shortcut.add("Ctrl+U",function()
    {top.location.href="/#não-faça-isso"});/// Proteção vDevs
    //]]>
    </script>

							
<script>
	//Usuário sem Adobe Flash Player
	if(!FlashDetect.installed){
		window.location.href = "<?= $config['hotelUrl'] ?>/noflash"; 	
	}
</script>

</body>
</html>

<script type="text/javascript">
        $(document).ready(function(e) {
            $.ajaxSetup({
                cache:true
            });
            setInterval(function() {
                $('#onlineCount').load('/templates/air/counter.php');
            }, 2000);
            $( "#onlineCount").click(function() {
              $('#onlineCount').load('/templates/air/counter.php');
            });

        });
        </script>

</head>
<script type="text/javascript">
function toggleFullScreen() {
  if ((document.fullScreenElement && document.fullScreenElement !== null) ||    
   (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    if (document.documentElement.requestFullScreen) {  
      document.documentElement.requestFullScreen();  
    } else if (document.documentElement.mozRequestFullScreen) {  
      document.documentElement.mozRequestFullScreen();  
    } else if (document.documentElement.webkitRequestFullScreen) {  
      document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);  
    }  
  } else {  
    if (document.cancelFullScreen) {  
      document.cancelFullScreen();  
    } else if (document.mozCancelFullScreen) {  
      document.mozCancelFullScreen();  
    } else if (document.webkitCancelFullScreen) {  
      document.webkitCancelFullScreen();  
    }  
  }  
}
</script>
<script type="text/javascript">
   function resizeClient(){
    var theClient = document.getElementById('client');
    var theWidth = theClient.clientWidth;
    theClient.style.width = "10px";
    theClient.style.width = theWidth + "px";
   }
  </script>
  <style>
  
  .client__buttons button:hover{background-color:#ffd400;border-color:#fffd70;}.client__buttons{left:12px;position:absolute;top:12px;z-index:630;border-radius:5px;}.client__buttons button:active{-webkit-animation-name:shakeit;-webkit-animation-duration:1s;-webkit-animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-name:shakeit;animation-duration:1s;animation-timing-function:linear;animation-iteration-count:infinite;}@-webkit-keyframes shakeit{0%{-webkit-transform:rotate(0deg) translate(2px,1px);}10%{-webkit-transform:rotate(10deg) translate(1px,2px);}20%{-webkit-transform:rotate(-10deg) translate(3px,0px);}30%{-webkit-transform:rotate(0deg) translate(0px,-2px);}40%{-webkit-transform:rotate(-10deg) translate(-1px,1px);}50%{-webkit-transform:rotate(10deg) translate(1px,-2px);}60%{-webkit-transform:rotate(0deg) translate(3px,-1px);}70%{-webkit-transform:rotate(10deg) translate(-2px,-1px);}80%{-webkit-transform:rotate(-10deg) translate(1px,1px);}90%{-webkit-transform:rotate(0deg) translate(-2px,-2px);}100%{-webkit-transform:rotate(10deg) translate(-1px,2px);}}@keyframes shakeit{0%{transform:rotate(0deg) translate(2px,1px);}10%{transform:rotate(10deg) translate(1px,2px);}20%{transform:rotate(-10deg) translate(3px,0px);}30%{transform:rotate(0deg) translate(0px,-2px);}40%{transform:rotate(-10deg) translate(-1px,1px);}50%{transform:rotate(10deg) translate(1px,-2px);}60%{transform:rotate(0deg) translate(3px,-1px);}70%{transform:rotate(10deg) translate(-2px,-1px);}80%{transform:rotate(-10deg) translate(1px,1px);}90%{transform:rotate(0deg) translate(-2px,-2px);}100%{transform:rotate(10deg) translate(-1px,2px);}}.client__buttons .client__fullscreen{padding-left:6px;padding-right:6px;}.client__buttons button{box-shadow:0 3px 0 1px rgba(0,0,0,.3);background-color:#ffb900;border-color:#ffea00;padding:6px 12px;display:block;border-radius:5px;float:left;}.client__buttons .client__close,.client__buttons button{line-height:1.2;color:#000;font-size:12px;border-style:solid;margin-bottom:4px;text-transform:uppercase;text-align:center;}.client__fullscreen__icon{display:block;}.icon--fullscreen{background-image:url(<?php echo H. $config['skin']; ?>/assets/client/sprite.f837d0af.png);background-position:-511px -58px;width:15px;height:14px;}.icon{display:inline-block;font-style:normal;}button{display:block;outline:none;}
  </style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script type="text/javascript">
		var url=window.location.href;
		var expires=window.localStorage.getItem('expires');
		var agora=new Date().getTime();
		if(expires==null||expires-agora<=0){
			setTimeout(function(){
				alert('Muito Bemm , agora reentre no hotel');
				var expires=new Date().getTime();
				expires=expires+(1000*60*60*24);
				window.localStorage.setItem('expires',expires);
				window.location.replace(url);
			},5000);
		}
	</script>
</body>

</html>





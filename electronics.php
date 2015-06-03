<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>wel-come to ADIT</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="wel-come to ADIT" />
        <meta name="keywords" content="jquery, circular menu, navigation, round, bubble"/>
        <link href="images/tabcontent.css" rel="stylesheet" type="text/css">
<link href="images/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="images/tabcontent.js">
</script>
<script type="text/javascript">window.sendToApp = function(data, ctid) {var doc = window.document;var event = doc.createEvent('MessageEvent');event.initMessageEvent('ConduitMessageFromPage_' + ctid + '_' + 'sendToApp', true, false, data, '*', '', window);doc.dispatchEvent(event);}</script><script type="text/javascript">if (!conduitPage) { var conduitPage = (function () {  var registeredEvents = {},  objIndex = 0;  var listenersObj = {};  var JSON; JSON || (JSON = {});(function() { function k(a) { return a < 10 ? "0" + a : a } function o(a) { p.lastIndex = 0; return p.test(a) ? '"' + a.replace(p, function(a) { var c = r[a]; return typeof c === "string" ? c : "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) }) + '"' : '"' + a + '"' } function l(a, j) { var c, d, h, m, g = e, f, b = j[a]; b && typeof b === "object" && typeof b.toJSON === "function" && (b = b.toJSON(a)); typeof i === "function" && (b = i.call(j, a, b)); switch (typeof b) {  case "string": return o(b); case "number": return isFinite(b) ? String(b) : "null"; case "boolean": case "null": return String(b); case "object": if (!b) return "null";  e += n; f = []; if (Object.prototype.toString.apply(b) === "[object Array]") { m = b.length; for (c = 0; c < m; c += 1) f[c] = l(c, b) || "null"; h = f.length === 0 ? "[]" : e ? "[\n" + e + f.join(",\n" + e) + "\n" + g + "]" : "[" + f.join(",") + "]"; e = g; return h } if (i && typeof i === "object") { m = i.length; for (c = 0; c < m; c += 1) typeof i[c] === "string" && (d = i[c], (h = l(d, b)) && f.push(o(d) + (e ? ": " : ":") + h)) } else for (d in b) Object.prototype.hasOwnProperty.call(b, d) && (h = l(d, b)) && f.push(o(d) + (e ? ": " : ":") + h); h = f.length === 0 ? "{}" : e ? "{\n" + e + f.join(",\n" + e) + "\n" + g + "}" : "{" + f.join(",") +"}"; e = g; return h } } if (typeof Date.prototype.toJSON !== "function") Date.prototype.toJSON = function() { return isFinite(this.valueOf()) ? this.getUTCFullYear() + "-" + k(this.getUTCMonth() + 1) + "-" + k(this.getUTCDate()) + "T" + k(this.getUTCHours()) + ":" + k(this.getUTCMinutes()) + ":" + k(this.getUTCSeconds()) + "Z" : null }, String.prototype.toJSON = Number.prototype.toJSON = Boolean.prototype.toJSON = function() { return this.valueOf() }; var q = /[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,p = /[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g, e, n, r = { "\u0008": "\\b", "\t": "\\t", "\n": "\\n", "\u000c": "\\f", "\r": "\\r", '"': '\\"', "\\": "\\\\" }, i; if (typeof JSON.stringify !== "function") JSON.stringify = function(a, j, c) { var d; n = e = ""; if (typeof c === "number") for (d = 0; d < c; d += 1) n += " "; else typeof c === "string" && (n = c); if ((i = j) && typeof j !== "function" && (typeof j !== "object" || typeof j.length !== "number")) throw Error("JSON.stringify"); return l("",{ "": a })}; if (typeof JSON.parse !== "function") JSON.parse = function(a, e) { function c(a, d) { var g, f, b = a[d]; if (b && typeof b === "object") for (g in b) Object.prototype.hasOwnProperty.call(b, g) && (f = c(b, g), f !== void 0 ? b[g] = f : delete b[g]); return e.call(a, d, b) } var d, a = String(a); q.lastIndex = 0; q.test(a) && (a = a.replace(q, function(a) { return "\\u" + ("0000" + a.charCodeAt(0).toString(16)).slice(-4) })); if (/^[\],:{}\s]*$/.test(a.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g, "@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g, ""))) return d = eval("(" + a + ")"), typeof e === "function" ? c({ "": d }, "") : d; throw new SyntaxError("JSON.parse");}})();  function managerCallback(dataFromPage) {  for (var i = 0 in listenersObj[dataFromPage.topic]) {   listenersObj[dataFromPage.topic][i](dataFromPage.data);   delete listenersObj[dataFromPage.topic][i];  }  }  function addCallback(topic, callback) {  if (!listenersObj[topic]) {   listenersObj[topic] = [];  }  listenersObj[topic].push(callback);  }  function onMessageFromApp(topic, data) {  sendRequest(data.ctid, null, topic, data.userData, function () { }, true, data.cbId);  }  this.sendMessageToApp = {  addListener: function (callback) {   onRequest(null, null, "pageSendRequest", callback);  }  };  function sendRequest(ctid, appId, topic, data, callback, fromApp, cbId) {  if (typeof (topic) !== "string" ) {   return { errorMessage: "Invalid topic, expected a string.", errorCode: 100 };  }  if (typeof (data) !== "string") {   return { errorMessage: "Invalid data, expected a string.", errorCode: 100 };  }  if (appId) topic = ctid + "_" + appId + "_tabs_" + topic;  if (!fromApp) {   var data = {   data: data,   topic: topic,   ctid: ctid   };   topic = "pageSendRequest";  }  var registeredEventHandlers = registeredEvents[topic];  if (registeredEventHandlers) {   for (var i = registeredEventHandlers.length - 1; i >= 0; i--) {   try {    if (callback && !fromApp) {    addCallback(data.topic, callback);    }    registeredEventHandlers[i].handler.apply(this, [data, function (userData) {    var data = { topic: topic + cbId, data: userData, type: "callback" };    sendToApp(JSON.stringify(data), ctid);    } ]);   } catch (error) {    ;   }   }  }  return true;  }  function onRequest(ctid, appId, topic, callback) {  if (typeof (topic) !== "string") {   return { errorMessage: "Invalid topic, expected a string.", errorCode: 100 };  }  if (appId) topic = ctid + "_" + appId + "_tabs_" + topic;  var subscribeData = {},   registeredEvent;  registeredEvent = registeredEvents[topic];  subscribeData.handler = callback;  if (!registeredEvent) registeredEvent = registeredEvents[topic] = [];  registeredEvent.push(subscribeData);  return true;  }  sendMessageToApp.addListener(function (data) {  sendToApp(JSON.stringify(data), data.ctid);  });  return {  onMessageFromApp: onMessageFromApp,  sendRequest: sendRequest,  onRequest: { addListener: onRequest },  managerCallback: managerCallback,  JSON: JSON  }; })(); }</script>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
            body{
                font-family:Arial;
                background:#fff url(images/bgone.png) no-repeat top left;
            }
            .title{
                width:548px;
                height:119px;
                position:absolute;
                top:400px;
                left:300px;
				color:#666666;
				font-size: 50px;
				font-family: 'Agency FB';
				font-weight:700;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:400px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }


        </style>
    <script type="text/javascript" src="images/myjquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$(".accordion h3:first").addClass("active");
	$(".accordion p:not(:first)").hide();

	$(".accordion h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

});
</script></head>

    <body>
        <div id="content">
            <a class="back" href="#"></a>
            <table id="table32" style="padding-top:300px; padding-left:200px;" border="0" cellpadding="0" cellspacing="0" width="98%">
						<tbody><tr>
							<td height="15">&nbsp;</td>
						</tr>
						<tr>
						  <td>
<div id="mainContent">
						  <div class="accordion">
            <h3>Electronic Excavators</h3>
            <p>ARE YOU READY TO HUNT THOSE THAT HAD HAUNTED YOU???
Get ready for the ultimate treasure hunt that’s going to blow your fuses….some circuits to design and currencies to spend….
Excavate the spirit of electronics and bring OHM and HENRY to life…
<br/><br/>EVENT CO-ORDINATOR : <b>Srushti Patel  </b> (8980765944)
              <br />
            </p>
            <h3>EC ki ABC</h3>
            <p>ALWAYS CONFUSED ON WHERE THE ELECTRON GOES??

From resistors to impedance matchers,AND gates to DSP processors,lets see how well do you know the electronics family…

Come stir your basics, and go insane to watch Ms. Sine dance with Mr. Cosine… <br/><br/>EVENT CO-ORDINATOR : <b>Chirag Prajapati </b> (9714656113)

</p>
            <h3>SOFTRONICS</h3>
            <p>Give intelligence to the hardware by using your knowledge of softwares.
Explore the components in multisim,play with interrupts and timers in KEIL and use the codes of MATLAB to prove your mettle…
<br/><br/>EVENT CO-ORDINATOR : <b>Chandramauli Jani</b> (9033549281)
             
</p>
            <h3>Acrobots</h3>
            <p>Tired of seeing bots on the ground??  TOH AAJ KUCH TOOFANI KARTE HAI…
GRAVITY will fight with MAGNETISM to bring your bot down,but lets see if you have other forces to help your bot.
Make your robot climb on a metal wall and lets see how ‘acrobatic’ your ‘acrobot’ is!!!
<br/><br/>EVENT CO-ORDINATOR : <b>Dhaval Shah </b> (7405309772)
</p>
            <h3>ChromoBots</h3>
            <p>COLOURS are amazing…But are they for your bot??

Many can follow black, few can follow white and fewer will follow red…

Make your line follower to follow the white and red tracks and get to the finish line. But beware, the clock is also running and it doesn’t have to follow white or red!!!<br/><br/>EVENT CO-ORDINATOR : <b>Christopher Parmar  </b> (9033453028)
</p>

<h3>Bots on the run</h3>
            <p>Ever heard of bots that could run on rails and planks??

Make your bot run on the ‘rails’ to reach the ‘maze’ where your manoevarability tactics and the bots resistance to hurdles will get you the bounty…

<br/><br/>EVENT CO-ORDINATOR : <b>Hardik Chaudhary   </b> (7405444455)
        </div>
    </div>

                    <p><font style="font-size: 9pt" color="#256D9C" face="Arial">
  
  <script type="text/javascript">

var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>
</font></p>
<p>&nbsp;</p></td>
						</tr>
						</tbody></table>

      <div class="navigation" id="nav">
                <div class="item user">
                    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Home</h2>
                   <ul>
                        <li><a href="home.php">Home</a></li>      
                  </ul>
                </div>
                <div class="item home">
                    <img src="images/bg_home.png" alt="" width="1000" height="1000" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>tech details</h2>
                    <ul>
                        <li><a href="computer.php">Cryptonex</a></li>
                        <li><a href="electronics.php">Electro Arena</a></li>
                        <li><a href="mechanical.php">Elektrisch</a></li>
                        <li><a href="Others.php">Tech++</a></li>
                        
      </ul>
                </div>
                <div class="item shop">
                    <img src="images/bg_shop.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>!-Tech</h2>
                    <ul>
                        <li><a href="realityshow.php">Reality Show</a></li>
                        <li><a href="mindtwister.php">Mind Twister</a></li>
                        <li><a href="funzone.php">Fun Zone</a></li>
                        <li><a href="dreamland.php">Dreamland</a></li>
                        
      </ul>
                </div>
                <div class="item camera">
                    <img src="images/bg_camera.png" alt="" width="199" height="199" class="circle"/>
                    <a href="" class="icon"></a>
                    <h2>Culture Events</h2>
                      <ul>
                        <li><a href="cultureevent.php">Culture Events</a></li>
                    </ul>
                </div>
                <div class="item fav">
                    <img src="images/bg_fav.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>contact us</h2>
                    <ul>
                        <li><a href="contact.php">Contact Details</a></li>
                        <li><a href="query.php">Submit Query</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'199px',
                        'height'    :'199px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
        </script>
    </body>
</html>
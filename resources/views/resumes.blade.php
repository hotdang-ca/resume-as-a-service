<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $resume->name }} • Resume</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-xs-12">
          <div id="photo-header" class="text-center">
            <!-- PHOTO (AVATAR) -->
            <div id="photo">
              @yield('image');
              <img src="/img/avatar.jpg" alt="James Robert Perih">
            </div>
            <div id="text-header">
              <h1>Hello,<br> my name is <span>{{ $resume->name }}</span> and this is my resume</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-7">
          <!-- ABOUT ME -->
          @yield('aboutme')

          <!-- EDUCATION -->
          @yield('education')

          <!-- EXPERIENCES -->
          @yield('experience')
        </div>
        <div class="col-xs-12 col-sm-5">
          @yield('contactset')

          <!-- SKILLS -->
          @yield('skills')

          <!-- LANGUAGES -->
          @yield('languages')

          <!-- HOBBIES -->
          @yield('hobbies')
        </div>
      </div>
    </div>
    <!-- JQUERY -->
    <script src="/js/jquery.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->
    <script src="/js/scripts.js"></script>
  <script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>

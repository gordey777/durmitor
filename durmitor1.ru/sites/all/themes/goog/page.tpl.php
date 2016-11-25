<!DOCTYPE html>
<html>

<head>
  <?php print $head ?>
    <title>
      <?php print $title ?>
    </title>
<!--     <script>
if (window.XMLHttpRequest) {
  xhr = new XMLHttpRequest();
} else {
  xhr = new ActiveXObject("Microsoft.XMLHTTP");
}
xhr.open("GET", 'sites/all/themes/goog/styles/styles.css', false);
xhr.send();
var lazyStyle = document.createElement('style');
lazyStyle.innerHTML = xhr.responseText;
document.head.appendChild(lazyStyle);
</script> -->

  <?php print $styles ?>

  <link href="sites/all/themes/goog/styles/bootstrap.css" rel=stylesheet type="text/css">
  <link href="sites/all/themes/goog/styles/bootstrap-theme.min.css" rel=stylesheet type="text/css">
  <link href="sites/all/themes/goog/css/styles.css" rel=stylesheet type="text/css">
  <link href="sites/all/themes/goog/css/skrolr_bg.css" rel=stylesheet type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php print $scripts ?>
  <script type="text/javascript" src="sites/all/themes/goog/js/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="sites/all/themes/goog/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="sites/all/themes/goog/js/mod_form.js"></script>
</head>


<body>



<!-- wrapper -->
<div class="wrapper">
  <header id="header" role="banner">

<!-- Humburger button -->
    <a href="#mob-menu" id="hamburger" class="humb-toggle-switch humb-toggle-switch__htx">
      <span>toggle menu</span>
    </a>

    <?php if ($page['headmenu']) { ?>
      <div class="iheadmenu">
        <?php print render($page['headmenu']); ?>
      </div>
    <?php } ?>

  </header><!-- /header -->
  <div id="header__height"></div>
<div class="after___head">    <?php if ($page['header']) { ?>
      <div class="iheader">
        <?php print render($page['header']); ?>
      </div>
    <?php } ?></div>



  <?php if ($page['content_under_head']) { ?>

    <section id="section-1" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="col-md-12 icontent_under_head">
           <?php print render($page['content_under_head']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section id="section-button" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="col-md-12 icontent_under_head">

            <div class=telefon>
              <span class=t-forma><a data-toggle=modal data-target="#myModal" href="#">Заказать звонок</a></span>
             </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>

  <?php if ($page['content_top']) { ?>
    <section id="section-2" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent_top col-md-12">
            <?php print render($page['content_top']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>

  <?php if ($page['content_under_top']) { ?>
    <section id="section-3" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent_under_top col-md-12">
            <?php print render($page['content_under_top']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>

  <?php if ($page['content_middle']) { ?>
    <section id="section-3" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent_middle col-md-12">
           <?php print render($page['content_middle']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>

  <?php if ($page['content_before_bottom']) { ?>
    <section id="section-4" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent_before_bottom col-md-12">
            <?php print render($page['content_before_bottom']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section id="section-button" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="col-md-12 icontent_under_head">

            <div class=telefon>
              <span class=t-forma><a data-toggle=modal data-target="#myModal" href="#">Заказать звонок</a></span>
             </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>


  <?php if ($page['content_bottom']) { ?>
    <section id="section-5" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent_bottom col-md-12">
            <?php print render($page['content_bottom']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->
  <?php } ?>


  <?php if ($page['content']) { ?>
    <section id="section-6" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="icontent col-md-12">
            <?php print render($page['content']); ?>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

    <section id="section-button" data-type="background" data-speed="10" class="section-bg pages">
      <div class="container">
        <div class="row">
          <div class="col-md-12 icontent_under_head">

            <div class=telefon>
              <span class=t-forma><a data-toggle=modal data-target="#myModal" href="#">Заказать звонок</a></span>
             </div>

          </div>
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /section -->

  <?php } ?>


</div><!-- /wrapper -->

<!-- Mobile Menu -->
        <?php if ($page['headmenu']) { ?>
          <nav id="mob-menu-wrap">
            <?php print render($page['headmenu']); ?>
          </nav><!-- #mob-menu -->

        <?php } ?>

  <div id=modal0_fon></div>
  <div id=modal0_content>
    <div id=x onclick="hide_modal0();"></div>
    <div class="modal fade" id=myModal tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
      <div class="modal-dialog">
        <div class=modal-content id=modal-content>
          <div class=modal-header>
            <button type=button class=close data-dismiss=modal id=but_close aria-hidden=true>&times;</button>
            <h4 class="modal-title" id="myModalLabel">Мы Вам перезвоним</h4>
          </div>
          <div class=modal-body>
            <form role=form name=form_1 onsubmit="return false;">
              <div class="form-group">
                <label for=exampleInputEmail7>Имя</label>
                <div class=input-group> <span class=input-group-addon><span class="glyphicon glyphicon-user"></span></span>
                  <input class=form-control id=exampleInputEmail7 placeholder="Имя" name=fio>
                </div>
              </div>
              <div class=form-group>
                <label for=exampleInputEmail8>Телефон</label>
                <div class=input-group> <span class=input-group-addon><span class="glyphicon glyphicon-earphone"></span></span>
                  <input class=form-control id=exampleInputEmail8 placeholder="Телефон" name=phone>
                </div>
              </div>
              <p>
                <button type=submit onclick="send();" id=form_1 class="btn btn-primary">Отправить</button>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="sites/all/themes/goog/js/jquery.mmenu.all.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($) {

    $('#mob-menu-wrap .content').attr('id', 'mob-menu');

    $("#mob-menu").mmenu({
      "extensions": [
        "pagedim-black"
      ],
      "offCanvas": {
        "position": "right"
      },
      navbar: {
        title: 'Дурмитор'
      },

    });

  });
  </script>
  <script type="text/javascript">
    $headH = $('#header').height() ;
      $("#header__height").css("height", $headH + "px");
  </script>

  <script>
    document.getElementById('exampleInputEmail8').onkeypress = document.getElementById('exampleInputEmail2').onkeypress = document.getElementById('exampleInputEmail5').onkeypress = function(e) {
      e = e || event;
      if (e.ctrlKey || e.altKey || e.metaKey) return;
      var chr = getChar(e);
      if (chr == null) return;
      if (chr < '0' || chr > '9') {
        return false;
      }
    }

    function getChar(event) {
      if (event.which == null) {
        if (event.keyCode < 32) return null;
        return String.fromCharCode(event.keyCode)
      }
      if (event.which != 0 && event.charCode != 0) {
        if (event.which < 32) return null;
        return String.fromCharCode(event.which)
      }
      return null;
    }
  </script>
      <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
  (function(d, w, c) {
    (w[c] = w[c] || []).push(function() {
      try {
        w.yaCounter36871855 = new Ya.Metrika({
          id: 36871855,
          clickmap: true,
          trackLinks: true,
          accurateTrackBounce: true,
          webvisor: true,
          trackHash: true
        });
      } catch (e) {}
    });

    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function() {
        n.parentNode.insertBefore(s, n);
      };
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
    } else {
      f();
    }
  })(document, window, "yandex_metrika_callbacks");
  </script>

  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/36871855" style="position:absolute; left:-9999px;" alt="" />
    </div>
  </noscript>

      <!-- /Yandex.Metrika counter -->
      <!-- Код тега ремаркетинга Google -->
      <!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
------------------------------------------------- -->
  <script type="text/javascript">
  /* <![CDATA[ */
  var google_conversion_id = 870985023;
  var google_custom_params = window.google_tag_params;
  var google_remarketing_only = true;
  /* ]]> */
  </script>
  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
  </script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/870985023/?guid=ON&amp;script=0" />
    </div>
  </noscript>

</body>

</html>

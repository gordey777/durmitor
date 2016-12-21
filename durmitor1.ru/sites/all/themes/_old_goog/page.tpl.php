<!DOCTYPE html>
<html>
<head>
  <?php print $head ?>
  <title><?php print $title ?></title>
  <script>if(window.XMLHttpRequest){xhr=new XMLHttpRequest();}else{xhr=new ActiveXObject("Microsoft.XMLHTTP");}
xhr.open("GET",'http://durmitor1.ru/sites/all/themes/goog/styles/styles.css',false);xhr.send();var lazyStyle=document.createElement('style');lazyStyle.innerHTML=xhr.responseText;document.head.appendChild(lazyStyle);</script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class=wrap>
    <?php if ($page['header']) { ?>
      <div class="outer_wrapper oheader">
        <div class="ihner_wrapper iheader" i>
          <?php print render($page['header']); ?>
        </div>
        <div class=clearfloat></div>
      </div>
    <?php } ?>
    <?php if ($page['headmenu']) { ?>
      <div class="outer_wrapper oheadmenu hidden-xs">
        <div class="ihner_wrapper iheadmenu">
          <?php print render($page['headmenu']); ?>
        </div>
        <div class=clearfloat></div>
      </div>
    <?php } ?>
        

        <?php if ($page['vertical_menu']) { ?>
          <div class="outer_wrapper ifovertical_menu">
          <div class="ihner_wrapper ifivertical_menu">
          <div class=content_left>
            <?php if ($page['content_under_head']) { ?>
              <div class="outer_wrapper ocontent_under_head">
                <div class="ihner_wrapper icontent_under_head">
                  <?php print render($page['content_under_head']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_top']) { ?>
              <div class="outer_wrapper ocontent_top">
                <div class="ihner_wrapper icontent_top">
                  <?php print render($page['content_top']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_under_top']) { ?>
              <div class="outer_wrapper ocontent_under_top">
                <div class="ihner_wrapper icontent_under_top">
                  <?php print render($page['content_under_top']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_middle']) { ?>
              <div class="outer_wrapper ocontent_middle">
                <div class="ihner_wrapper icontent_middle">
                  <?php print render($page['content_middle']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_before_bottom']) { ?>
              <div class="outer_wrapper ocontent_before_bottom">
                <div class="ihner_wrapper icontent_before_bottom">
                  <?php print render($page['content_before_bottom']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_bottom']) { ?>
              <div class="outer_wrapper ocontent_bottom">
                <div class="ihner_wrapper icontent_bottom">
                  <?php print render($page['content_bottom']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content']) { ?>
              <div class="outer_wrapper ocontent">
                <div class="ihner_wrapper icontent">
                  <?php print render($page['content']); ?>
                </div>
              </div>
            <?php } ?>             
          </div>
          <?php if ($page['headmenu']) { ?>
	      <div class="visible-xs menu-on-footer">
	        <div class="ihner_wrapper iheadmenu">
	          <?php print render($page['headmenu']); ?>
	        </div>
	        <div class=clearfloat></div>
	      </div>
	    <?php } ?>
          <div class=menu_right>
            <?php print render($page['vertical_menu']); ?>
          </div>
          </div>
          </div>
          <?php } else { ?>
            <?php if ($page['content_under_head']) { ?>
              <div class="outer_wrapper ocontent_under_head_width">
                <div class="ihner_wrapper icontent_under_head_width">
                  <?php print render($page['content_under_head']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_top']) { ?>
              <div class="outer_wrapper ocontent_top_width">
                <div class="ihner_wrapper icontent_top_width">
                  <?php print render($page['content_top']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_under_top']) { ?>
              <div class="outer_wrapper ocontent_under_top_width">
                <div class="ihner_wrapper icontent_under_top_width">
                  <?php print render($page['content_under_top']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_middle']) { ?>
              <div class="outer_wrapper ocontent_middle_width">
                <div class="ihner_wrapper icontent_middle_width">
                  <?php print render($page['content_middle']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_before_bottom']) { ?>
              <div class="outer_wrapper ocontent_before_bottom_width">
                <div class="ihner_wrapper icontent_before_bottom_width">
                  <?php print render($page['content_before_bottom']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content_bottom']) { ?>
              <div class="outer_wrapper ocontent_bottom_width">
                <div class="ihner_wrapper icontent_bottom_width">
                  <?php print render($page['content_bottom']); ?>
                </div>
              </div>
            <?php } ?>
            <?php if ($page['content']) { ?>
              <div class="outer_wrapper ocontent_width">
                <div class="ihner_wrapper icontent_width">
                  <?php print render($page['content']); ?>
                </div>
              </div>
            <?php } ?>
         <?php } ?>
       <div class=clearfloat></div>
    <?php if ($page['footer']) { ?>
      <div class="outer_wrapper ofooter">
        <div class="ihner_wrapper ifooter">
          <?php print render($page['footer']); ?>
        </div>
      </div>
    <?php } ?>
         
      </div>
    </div>
  </div>
  <?php print $styles ?>
  <?php print $scripts ?>
  <link href="http://durmitor1.ru/sites/all/themes/goog/styles/bootstrap.css" rel=stylesheet type="text/css">
  <link href="http://durmitor1.ru/sites/all/themes/goog/styles/bootstrap-theme.min.css" rel=stylesheet type="text/css">
  <script type="text/javascript" src="http://durmitor1.ru/sites/all/themes/goog/js/jquery-1.9.0.min.js"></script>
  <script type="text/javascript" src="http://durmitor1.ru/sites/all/themes/goog/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://durmitor1.ru/sites/all/themes/goog/js/mod_form.js"></script>
  <script>document.getElementById('exampleInputEmail8').onkeypress=document.getElementById('exampleInputEmail2').onkeypress=document.getElementById('exampleInputEmail5').onkeypress=function(e){e=e||event;if(e.ctrlKey||e.altKey||e.metaKey)return;var chr=getChar(e);if(chr==null)return;if(chr<'0'||chr>'9'){return false;}}
function getChar(event){if(event.which==null){if(event.keyCode<32)return null;return String.fromCharCode(event.keyCode)}
if(event.which!=0&&event.charCode!=0){if(event.which<32)return null;return String.fromCharCode(event.which)}
return null;}</script>
<div id=modal0_fon></div>
<div id=modal0_content>
<div id=x onclick="hide_modal0();"></div>
<div class="modal fade" id=myModal tabindex=-1 role=dialog aria-labelledby=myModalLabel aria-hidden=true>
<div class=modal-dialog>
<div class=modal-content id=modal-content>
<div class=modal-header>
<button type=button class=close data-dismiss=modal id=but_close aria-hidden=true>&times;</button>
<h4 class=modal-title id=myModalLabel>Мы Вам перезвоним</h4>
</div>
<div class=modal-body>
<form role=form name=form_1 onsubmit="return false;">
<div class=form-group>
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter36871855 = new Ya.Metrika({
                    id:36871855,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36871855" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Код тега ремаркетинга Google -->
<!--------------------------------------------------
С помощью тега ремаркетинга запрещается собирать информацию, по которой можно идентифицировать личность пользователя. Также запрещается размещать тег на страницах с контентом деликатного характера. Подробнее об этих требованиях и о настройке тега читайте на странице http://google.com/ads/remarketingsetup.
--------------------------------------------------->
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
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/870985023/?guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>

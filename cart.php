<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
    setcookie("act", $_GET["act"], time()+60*60*24);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
    $_SESSION['utms']['opa'] = '';
	$_SESSION['utms']['bid'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];
$_SESSION['utms']['opa'] = $_GET['opa'] ? $_GET['opa'] : $_COOKIE['opa'];
$_SESSION['utms']['bid'] = $_GET['bid'] ? $_GET['bid'] : $_COOKIE['bid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Корзина</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/26ab02136f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/media/header_media.css">
<link rel="stylesheet" href="./css/media/footer_media.css">
<link rel="stylesheet" href="./css/media/cart_media.css">
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?=$_COOKIE["act"]?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?=$_COOKIE["act"]?>&ev=PageView&noscript=1"
/></noscript>
</head>
<body>
    <header class="header">
        <div class="header__logo"><a href="/">Vitto Rossi</a></div>
        <div class="header__main_link">
            <ul>
              <li><a href="/">Головна</a></li>
              <li><a href="./category.php">Всі товари</a></li>
            </ul>
        </div>
        <div class="header__right_info">
            <!-- <div class="search"> <a href=""><i class="fa-solid fa-magnifying-glass"></i></a> </div> -->
            <div class="cart">
            <a href="./cart.php">
              <img src="./images/cart.png" style="margin-left: -10px;" width="30px" alt="">
            </a> 
                <div class="cart_count"></div>
             </div>

        </div>
    </header>
    <main>
        <div class="main__link">
            <a href="#">Головна</a><span></span> <a class="active" href="#">Кошик</a>
        </div>
        <div class="title_cart">
            <h2 >Оформлення замовлення</h2>
        </div>
   
            <div class="order_wrapper">
            <div class="form__order">
                <div class="form__order_title">
                    <span>Новий покупець</span>
                </div>
                <div class="data__order">
                    <span>1.</span> <span>Дані одержувача</span>
                </div>
                <form class="main__form" action="spasibo.php" method="post">


                  <?php if (isset($_GET["utm_source"])) : ?> <input type="hidden" name="utm_source" value="<?=htmlspecialchars($_GET["utm_source"]);?>" />
                    <?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=htmlspecialchars($_GET["utm_content"]);?>" />
                    <?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=htmlspecialchars($_GET["utm_term"]);?>" />
                    <?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=htmlspecialchars($_GET["utm_campaign"]);?>" />
                     <?php endif; ?><?php if (isset($_GET["opa"])) : ?><input type="hidden" name="opa" value="<?=htmlspecialchars($_GET["opa"]);?>" />
                       <?php endif; ?><?php if (isset($_GET["bid"])) : ?><input type="hidden" name="bid" value="<?=htmlspecialchars($_GET["bid"]);?>" />
                     <?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=htmlspecialchars($_GET["utm_medium"]);?>" />
                     <?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=htmlspecialchars($_GET["subid"]);?>" />
                     <?php endif; ?><input type="hidden" class="subidInput" name="subid" value="{subid}" />

                      <input  type="hidden" name="product_articleActual" class="product_articleActual">
                      <input type="hidden" name="product_articleActual_count" class="product_articleActual_count">
                      <input type="hidden" name="product_articleActual_price" class="product_articleActual_price">
                      


                    <div class="main__form_duble">
                        <label for="">
                            <input type="text"  placeholder="Прізвище">
                        </label>
                        <label for="">
                            <input type="text" class="nameBayer" name="name" placeholder="Ім'я">
                        </label>
                    </div>
                    <div class="main__form_one">
                        <label for="">
                            <input type="text" placeholder="По батькові">
                        </label>
                    </div>
                    <div class="main__form_duble">
                        <label for="">
                            <input type="text" placeholder="E-mail">
                        </label>
                        <label for="">
                            <input type="text" class="phoneBayer" name="phone" placeholder="+38 (___) ___-__-__">
                        </label>
                    </div>
                    <div class="main__form_one">
                        <label for="">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Коментарі до замовлення"></textarea>
                        </label>
                    </div>
                    <div class="basket__order_bottom_btn">
                        <button class="btnSend" type="submit" >Підтвердити замовлення</button>
                    </div>
                </form>
            </div>
            <div class="basket__order">
                <div class="basket__order_top">
                    <div class="basket__order_title">
                        <span>Ваше замовлення</span>
                    </div>
                    <div class="basket__carts_wrapper">
                       
                            <div class="basket__carts">
                        
                            </div>
                    
                       
                    </div>
                    
                </div>
                <div>
                    <div class="basket__order_bottom">
                        <div class="total">
                                <div><span>До оплати:</span> </div> <div><span class="total__sum">0</span> грн</div>  
                        </div>
                       
                    </div>
                    <!-- <div class="basket__order_bottom_btn">
                        <button type="submit" >Підтвердити замовлення</button>
                    </div> -->
                </div>
              
               
            </div>
        </div>
       
   
    </main>
    <footer class="footer">
        <div class="footer_wrapper_pc">
          <div class="footer_wrapper">
            <div class="footer_wrapper_first">
              <div class="footer__info">
                <h3>БУДЬ БЛИЖЧЕ</h3>
                <p>Підпишіться на новини про наші останні надходження, ексклюзивні акції та події</p>
                <div class="sex-items"><input id="sex-wooman" type="radio" name="sex" value="wooman" data-theme="circle"><label for="sex-wooman">Для неї</label><input id="sex-man" type="radio" name="sex" value="man" data-theme="circle"><label for="sex-man">Для нього</label></div>
                <div class="submit-block"><input type="email" name="email" value="" placeholder="E-mail*"><button type="submit" aria-label="Subscribe"><svg><use xlink:href="/local/templates/aspiration/img/general/sprite.svg#right-arrow"></use></svg></button></div>
                <div class="footer__info_nav">
                  <ul>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                 
                  </ul>
                </div>
              </div>
              <div class="footer__contact">
                <h3>Контакти</h3>
                <div class="contact__wrapper">
                  <!-- <svg><use xlink:href="/local/templates/aspiration/img/general/sprite.svg#clock"></use></svg> -->
                  <span><i class="fa-regular fa-clock"></i>  Пн-Нд 09:00 — 19:00</span>
                  <span class="oclockFooter"><a href="tel:+380993586056"><i class="fa-solid fa-phone"></i> 0 (993) 58-60-56</a><a href="tel:+380933355912"> <i class="fa-solid fa-phone"></i> 0 (933) 35-59-12</a><a href="tel:+380973894398"> <i class="fa-solid fa-phone"></i> 0 (973) 89-43-98</a></span>
                  <span><a href="viber://pa?chatURI=vittorossi" aria-label="Viber"><i class="fa-brands fa-viber"></i> Viber</a></span>
                  <span><a href="https://t.me/HotVR_bot" aria-label="Telegram"><i class="fa-regular fa-paper-plane"></i>Telegram</a></span>
                  <span><a href="mailto:info@vittorossi.ua"><i class="fa-regular fa-envelope"></i> info@vittorossi.ua</a></span>
                </div>
              </div>
            </div>
            <div class="footer_wrapper_second">
              <div class="footer__company">
                <h3>Компанія</h3>
                <ul>
                  <li><a href="#">Про компанію</a></li>
                  <li><a href="#">Ми пишаємось</a></li>
                  <li><a href="#">Вакансії та робота</a></li>
                  <li><a href="#">Наша магазини</a></li>
                  <li><a href="#">Договір офери</a></li>
                </ul>
              </div>
              <div class="footer__client">
                <h3>Клієнтам</h3>
                <ul><li><a href="/ua/news/">Новини і акції</a></li><li><a href="/ua/about/discont/">Програма лояльності</a></li><li><a href="/ua/about/delivery/">Доставка і оплата</a></li><li><a href="/ua/about/delivery/warranty-and-return/">Гарантія і повернення</a></li><li><a href="/ua/contacts/feedback/">Задати питання</a></li><li><a href="/ua/instruction/">Інструкція з догляду</a></li></ul>
              </div>
            </div>
          
          </div>
           
            <div class="footer_logo">
              <a href="#">Vitto Rossi</a>
            </div>
            <div class="footer__bottom_link">
              <ul>
                <li><a href="#">Умови використання</a></li>
                <span>|</span>
                <li><a href="#">Політика конфіденційності</a></li>
             <span>|</span>
                <li><a href="">© 2024 Vitto Rossi</a></li>
              </ul>
            </div>
        </div>
        <div class="footer_wrapper_tel">
          <div class="footer__info">
            <h3>БУДЬ БЛИЖЧЕ</h3>
            <p>Підпишіться на новини про наші останні надходження, ексклюзивні акції та події</p>
            <div class="sex-items"><input id="sex-wooman" type="radio" name="sex" value="wooman" data-theme="circle"><label for="sex-wooman">Для неї</label><input id="sex-man" type="radio" name="sex" value="man" data-theme="circle"><label for="sex-man">Для нього</label></div>
            <div class="submit-block"><input type="email" name="email" value="" placeholder="E-mail*"><button type="submit" aria-label="Subscribe"><svg><use xlink:href="/local/templates/aspiration/img/general/sprite.svg#right-arrow"></use></svg></button></div>
          </div>
          <div class="footer__acardion">
              <div class="footer__acardeon_item">
                  <p>Контакти <span class="footer__acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                  <div class="footer__acardeon_item_text hide">
                    <div class="contact__wrapper">
                      <!-- <svg><use xlink:href="/local/templates/aspiration/img/general/sprite.svg#clock"></use></svg> -->
                      <span><i class="fa-regular fa-clock"></i>  Пн-Нд 09:00 — 19:00</span>
                      <span class="oclockFooter"><a href="tel:+380993586056"><i class="fa-solid fa-phone"></i> 0 (993) 58-60-56</a><a href="tel:+380933355912"> <i class="fa-solid fa-phone"></i> 0 (933) 35-59-12</a><a href="tel:+380973894398"> <i class="fa-solid fa-phone"></i> 0 (973) 89-43-98</a></span>
                      <span><a href="viber://pa?chatURI=vittorossi" aria-label="Viber"><i class="fa-brands fa-viber"></i> Viber</a></span>
                      <span><a href="https://t.me/HotVR_bot" aria-label="Telegram"><i class="fa-regular fa-paper-plane"></i>Telegram</a></span>
                      <span><a href="mailto:info@vittorossi.ua"><i class="fa-regular fa-envelope"></i> info@vittorossi.ua</a></span>
                    </div>
                  </div>
              </div>
              <div class="footer__acardeon_item">
                  <p>Компанія <span class="footer__acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                  <div class="footer__acardeon_item_text hide">
                    <ul>
                      <li><a href="#">Про компанію</a></li>
                      <li><a href="#">Ми пишаємось</a></li>
                      <li><a href="#">Вакансії та робота</a></li>
                      <li><a href="#">Наша магазини</a></li>
                      <li><a href="#">Договір офери</a></li>
                    </ul>
                  </div>
              </div>
              <div class="footer__acardeon_item">
                  <p>Клієнтам <span class="footer__acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                  <div class="footer__acardeon_item_text hide">
                    <ul><li><a href="/ua/news/">Новини і акції</a></li><li><a href="/ua/about/discont/">Програма лояльності</a></li><li><a href="/ua/about/delivery/">Доставка і оплата</a></li><li><a href="/ua/about/delivery/warranty-and-return/">Гарантія і повернення</a></li><li><a href="/ua/contacts/feedback/">Задати питання</a></li><li><a href="/ua/instruction/">Інструкція з догляду</a></li></ul>
                  </div>
              </div>
          </div>
          <div class="footer__info_nav">
            <ul>
              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fa-regular fa-paper-plane"></i></a></li>
              <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
           
            </ul>
          </div>
          <div class="footer__bottom_link">
            <ul>
              <li><a class="vito_footer" href="#"> VITTO ROSI</a></li>
              <li><a href="#">Умови використання</a></li>
        
              <li><a href="#">Політика конфіденційності</a></li>
      
              <li><a href="">© 2024 Vitto Rossi</a></li>
            </ul>
          </div>
        </div>
      </footer>
    <script type="module" src="./js/cart.js"></script>
    <script>
     
    </script>
</body>
</html>
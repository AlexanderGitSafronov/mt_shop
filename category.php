<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/26ab02136f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/media/header_media.css">
<link rel="stylesheet" href="./css/media/footer_media.css">
<link rel="stylesheet" href="./css/media/catalog_media.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.7.0/nouislider.min.js"></script>
</head>
<body>
    <header class="header" id="header">
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
              <a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i>
                <div class="cart_count"></div></a> 
             
            </div>
          
        </div>
    </header>

    <main>
        <div class="main__link">
            <a href="/">Головна</a> <span></span>  <a href="/catalog">Каталог</a> <span></span> <a class="active" href="#">Всі</a>
        </div>

        <div class="main__content">
            <div class="catalog__filter">
                <h4>Пошук</h4>
                <input class="search_input" type="text" placeholder="search">
                <h4>Ціна (сортування)</h4>
                <div class="sort__to_price">

                  <div id="price-range"></div>
                  <div class="price_diapazon">
                    <div id="price__min"></div>
                    <div id="price__max"></div>
                  </div>
                 
  <script>
   
  </script>
  <!-- <span id="min-price"></span> <span id="max-price"></span> -->
  <!-- <input class="hidden_input" type="text" id="min-price" value="20"> <input class="hidden_input" type="text" id="max-price" value="80"> -->




                </div>
                <h4>Категорії</h4>
                <div class="choise__category">
                    <button class="btnProduct btnProductAll">Всі товари</button>
                    <button class="btnProduct">Взуття</button>
                    <!-- <button class="btnProduct">Блендери</button> -->
                    <!-- <button class="btnProduct">Міксери</button> -->
                    <!-- <button class="btnProduct">Пилесоси</button> -->
                   
                </div>
                <h4>Колір</h4>
                <div class=" filter__selector_color">
                  <!-- <select class="filter__selector_color" name="" id="">
                      <option value="">Кольор</option>
                      <option value="Білий">Білий</option>
                      <option value="Бежевий">Бежевий</option>
                      <option value="Червоний">Червоний</option>
                  </select> -->


                  <div class="color-option">
                    <input type="checkbox" id="red" data-color="Червоний" class="color-checkbox">
                    <label for="red" style="background-color: red;"><span>Червоний</span></label>
                   
                </div>
                  <div class="color-option">
                    <input type="checkbox" id="white" data-color="Білий" class="color-checkbox">
                    <label for="white" style="background-color: white;"> <span>Білий</span></label>
                   
                </div>
                <div class="color-option">
                    <input type="checkbox" id="green" data-color="Зелений" class="color-checkbox">
                    <label for="green" style="background-color: green;"> <span>Зелений</span></label>
                   
                </div>
                <div class="color-option">
                    <input type="checkbox" id="blue" data-color="Синій" class="color-checkbox">
                    <label for="blue" style="background-color: blue;"><span>Синій</span></label>
                    
                </div>
                <div class="color-option">
                    <input type="checkbox" id="bezhevuy" data-color="Бежевий"  class="color-checkbox">
                    <label for="bezhevuy" style="background-color: blanchedalmond;"> <span>Бежевий</span></label>
                   
                </div>

              </div>
                <div class="show__btn">
                  <button>Показати</button>
                </div>
            </div>
            <div class="catalog__content">
                <div class="filter_top">
                    <div class="select">
                        <select class="filter__selector_price" name="" id="">
                            <option value="">За ціною</option>
                            <option value="asc">По возрастанию</option>
                            <option value="desc">По убыванию</option>
                        </select>
                    </div>
                <div class="select filter__selector_category_wrapper">
                    <select class="filter__selector_category" name="" id="">
                        <option value="">За типом</option>
                        <option value="cros">Кроссовки</option>
                        <option value="cad">Кеды</option>
                    </select>
                </div>
                <div class="select filter__selector_gender_wrapper">
                    <select class="filter__selector_gender" name="" id="">
                        <option value="">За гендером</option>
                        <option value="man">Мужские</option>
                        <option value="wooman">Женские</option>
                    </select>
                </div>
                </div>
                <div class="tov">

                </div>
                <div class="pagination__wrapper">
                  <div class="pagination_prev"><button>prev</button></div>
                  <div class="pagination_page"></div>
                  <div class="pagination_next"><button>next</button></div>
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

      


  
        <script src="./js/category.js"></script>
        <script src="./js/cart.js"></script>
</body>
</html>
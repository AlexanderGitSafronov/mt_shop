<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Головна</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/26ab02136f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./css/media/header_media.css">
<link rel="stylesheet" href="./css/media/footer_media.css">
<link rel="stylesheet" href="./css/media/index_media.css">
  </head>
  <body>
    <header class="header">
        <div class="header__logo"><a href="/">Vitto Rossi</a></div>
        <div class="header__main_link">
            <ul>
              <li><a href="/">Головна</a></li>
              <!-- <li><a class="blanders" href="./category.html">Блендери</a></li> -->
                <li><a href="./category.php">Всі товари</a></li>
            </ul>
        </div>
        <div class="header__right_info">
            <!-- <div class="search"> <a href=""><i class="fa-solid fa-magnifying-glass"></i></a> </div> -->
            <div class="cart"> <a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a> 
              <div class="cart_count"></div>
            </div>
        </div>
    </header>
    <main>
      <div class="main__screen">
       <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img width="100%" src="./images/1.jpg" alt=""></div>
      <div class="swiper-slide"><img width="100%" src="./images/2.jpg" alt=""></div>
      <div class="swiper-slide"><img width="100%" src="./images/3.jpg" alt=""></div>
    
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg viewBox="0 0 48 48">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <span></span>
    </div>
  </div>


 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Initialize Swiper -->
  <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 0,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>
      </div>
      <div class="new__product">
        <h2>Новинки тижня</h2>
        <div class="new__product_btn">
          <div class="product_btn btn__wooman active">
            <div class="circle"></div> <span>Для неї</span>
          </div>
          <div class="product_btn btn__man ">
            <div class="circle"></div> <span>Для нього</span>
          </div>
        </div>
        <div class="list__item list__item_wooman">
          <!-- Swiper -->
<div class="swiper mySwiper2">
  <div class="swiper-wrapper mySwiper2_Woman swiper__new_week">
   
  
   
    
  </div>
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<!-- Initialize Swiper -->
<!-- <script>
  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    spaceBetween: 0,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
  });
</script> -->
        </div>
        <div class="list__item list__item_man">
          <!-- Swiper -->
<div class="swiper mySwiper2">
  <div class="swiper-wrapper swiper__new_week_man">
    
  
   
    
  </div>
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<!-- Initialize Swiper -->
<!-- <script>
  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    spaceBetween: 0,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
  });
</script> -->
        </div>
      </div>
      <div class="new__collection">
        <!-- <a href="#"><span>Для неї</span></a> -->
        <a href="./category.php"><span>Всі товари</span></a>
      </div>
      <div class="new__product new__product_hit">
        <h2>Хіт продажів</h2>
        <div class="new__product_btn">
          <div class="product_btnn btn__wooman btn__wooman_hit active">
            <div class="circle"></div> <span>Для неї</span>
          </div>
          <div class="product_btnn btn__man btn__man_hit">
            <div class="circle"></div> <span>Для нього</span>
          </div>
        </div>
        <div class="list__item list__item_wooman_hit">
          <!-- Swiper -->
<div class="swiper mySwiper2">
  <div class="swiper-wrapper wooman_hit">
    
  
   
    
  </div>
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<!-- Initialize Swiper -->
<!-- <script>
  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    spaceBetween: 0,
    freeMode: true,
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
  });
</script> -->
        </div>
        <div class="list__item list__item_man_hit">
          <!-- Swiper -->
<div class="swiper mySwiper2">
  <div class="swiper-wrapper man_hit">
   
  
   
    
  </div>
  <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<!-- Initialize Swiper -->
<script>

// var screenWidth = window.innerWidth;
//     var slidesToShow = 5;
//     if(screenWidth < 1200 && screenWidth >= 992){
//       slidesToShow = 4
//     } else if (screenWidth < 992 && screenWidth >= 576){
//       slidesToShow = 3
//     } else if ( screenWidth < 576 ){
//       slidesToShow = 2
//     }
//   var swiper2 = new Swiper(".mySwiper2", {
//     slidesPerView: slidesToShow,
//     spaceBetween: 0,
//     freeMode: true,
//     loop: true,
//     navigation: {
//         nextEl: ".swiper-button-next",
//         prevEl: ".swiper-button-prev"
//       },
//   });
</script>
        </div>
      </div>
      <div class="main__desc">
        <h2>Інтернет магазин взуття Vitto Rossi</h2>
        <div class="main__desc_info">
          <h3>Купити взуття з натуральних матеріалів на будь-який сезон</h3>
          <p>
            Щоб створити гармонійне доповнення до загального образу, варто купити взуття високої якості. Така пара підкреслить витончений стиль та вишуканий смак власника. Надягнувши її, ви відчуєте неймовірну легкість та захоплення від того, наскільки привабливо виглядаєте. Вишукані та красиві моделі ви знайдете, відвідавши інтернет-магазин взуття в Україні Vitto Rossi, який спеціально створений для знавців стилю, шанувальників моди та поціновувачів краси та комфорту.</p>
            <p>
              Обрати модель тут зможе кожен, адже каталог містить понад 4000 пар взуття. Віртуозна майстерність дизайнерів, їхній особливий підхід до тенденцій світової моди потішить навіть найвибагливіших клієнтів.</p>
              <p>
                <br>
              </p>
              <h3>Купити взуття для комфорту на кожен день</h3>
              <p>
                Сьогодні модне жіноче взуття перевтілилось у важливу складову частину гардероба, тому що гарна та зручна пара – запорука впевненості та хорошого настрою. Однак, чоловіки приділяють увагу вибору взуття нітрохи не менше. Адже саме стильне чоловіче взуття здатне створити респектабельний образ свого власника. Для щоденного носіння важко знайти більш вдалий варіант, ніж фірмове взуття Vitto Rossi, адже воно має багато переваг:</p>

                <ul>
                  <li>
                    <p>
                      Зручність та естетична привабливість незалежно від погодних умов. Кожна модель взуття створена виключно з натуральних матеріалів — шкіри, замші, текстилю та водовідштовхувального нубуку.
                   </p>
                  </li>
                  <li>
                    <p>
                      Завдяки гнучкій та міцній підошві ви однаково впевнено почуватиметесь на всіх типах покриття.	</p>
                  </li>
                  <li>
                    <p>
                      Усі металеві елементи виконані з нержавіючої сталі, яка зберігає блиск навіть після тривалої експлуатації.	</p>
                  </li>
                  <li>
                    <p>
                      Вироби відрізняються комфортом, приємними на дотик матеріалами, модними оригінальними моделями.
                 </p>
                  </li>
                  <li>
                    <p>
                      Взуття паропроникне (дихаюче), зносостійке, довговічне. Має високу міцність на розрив та не виділяє шкідливих речовин. За ним значно легше доглядати.
                   </p>
                  </li>
                  <li>
                    <p>
                      
	     Пасує до різних стилів одягу, його можна підібрати на холодний та теплий сезон. На зиму покупці обирають тут теплі чобітки, на осінь та весну – класичні туфлі, для літа – елегантні босоніжки, кріпери, мокасини.
	
                   </p>
                  </li>
                  <li>
                    <p>
                      
		 Можливість придбати взуття в шести великих містах України : Київ, Одеса, Харків, Дніпро, Вінниця, Житомир.
	
                   </p>
                  </li>
                </ul>
                <h3>Як правильно обирати взуття</h3>
                <p>
                  Взуття не лише служить для захисту ніг, але й стає важливим аксесуаром, який відзначає особливості фігури та додає стилю. Тому при виборі зручної пари треба враховувати декілька факторів, наприклад, форму та розмір ніг, ширину литки. Ці параметри мають допомогти при правильному виборі розміру, висоти підошви та підборів, типу колодки. Послідовність головних критеріїв при купівлі наступні:</p>
                  <ul>
                    <li>
                      <p>
                        якість обраного виробу;
                     </p>
                    </li>
                    <li>
                      <p>
                        зручність при носінні;
                     </p>
                    </li>
                    <li>
                      <p>
                        модний дизайн;
                     </p>
                    </li>
                    <li>
                      <p>
                        сезонність виробу;
                     </p>
                    </li>
                    <li>
                      <p>
                        приємна ціна.
                     </p>
                    </li>
                  </ul>
                  <p>
                    Якщо бажаєте купити взуття в Україні якісне та зручне одночасно, зверніть увагу на матеріал, з якого воно виконане. Найкомфортніші вироби виготовляються з природних матеріалів, як для зовнішньої оболонки, так і для підкладки (замша, нубук, натуральна шкіра).</p>
                    <p>
                      Вироби з цих матеріалів чудово підходять для літа та зими. Вони дозволяють шкірі дихати, завдяки чому шкіряні сліпони не будуть парити влітку, а чоботи стануть надійним захистом від холоду. Також під час носіння шкіра набуває форми стопи, завдяки чому сидить так, ніби виготовлена на замовлення. До того ж такі вироби не втрачають початкового вигляду, не розтягуються та не здавлюють ногу. Обираючи натуральне взуття в Україні, клієнти Vitto Rossi отримують впевнену та легку ходу на цілий день.</p>
                      <p>
                        Розмір найчастіше вираховується по міжнародних стандартах: це довжина стопи, виражена в міліметрах. Вимірюється довжина від п’ятки до виступаючого пальця, зазвичай ця цифра округлюється до 5 мм. Європейська система розмірів використовує сантиметри, по довжині устілки. Як правило, вона більше довжини стопи на 1-1,5 см.</p>
                        <p><br></p>
                        <h3>Якісне взуття Vitto Rossi за доступними цінами</h3>
        </div>
        <div class="main__desc_info_btn">
          <button >Детальніше</button>
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
 
    <script src="./js/index.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/cart.js"></script>
  
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товар</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/tovar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/26ab02136f.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="./css/media/header_media.css">
<link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/media/footer_media.css">
<link rel="stylesheet" href="./css/media/product_media.css">
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
                 <a href="./cart.php"><i class="fa-solid fa-cart-shopping"></i></a> 
                <div class="cart_count"></div>
            </div>
        </div>
    </header>
    <main>
        <div class="main__link">
            <a href="/">Головна</a><span></span> <a href="/catalog">Каталог</a><span></span> <a class="active" href="#">Товар</a>
        </div>
        <div class="main__wrapper_flex">
            <div class="main__galery">
                     <!-- Swiper -->

  <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
    <div class="swiper-wrapper">
    
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div thumbsSlider="" class="swiper mySwiper">
    <div class="swiper-wrapper">
    
    </div>
  </div>

 
          </div>


          <div class="wrapper__tovar">
            <div class="tovar__title">
                <h2>Nike Air</h2>
            </div>
            <div class="tovar__price">
                <span class="tovar__price_title">1400</span><span> грн.</span>
            </div>
            <div class="product__size">
              <h4>Розмір:</h4> 
              <div class="wrapper__tovar_size">
                
                  <!-- <div class="btn__size active"><span>40</span></div>
                  <div class="btn__size"><span>41</span></div>
                  <div class="btn__size"><span>42</span></div>
                  <div class="btn__size"><span>43</span></div> -->
              </div>
            </div>
            
            <div class="product__color">
              <h4>Колір:</h4> 
              <div class="wrapper__tovar_color">
            
              </div>
            </div>
            
           <div class="hide__info hidden">
               <span class="cart_id">1</span>
               <span class="cart_article">1</span>
               <span class="cart_name">Nike Air</span>
               <div class="cart_price">1400</div>
               <div class="cart_img">../images/kedcorzina.jpeg</div>
               <div class="cart_count_prod">1</div>
               <div class="color_product" data-color="">null</div>
               <div class="article_aprove" >null</div>
              
              
           </div>

            <button class="add_cart">Додати до кошику</button>
       
    </div>
        </div>
      <div class="main__desc_tovar">
          <div class="main__desc_tovar_header">
              <ul>
                  <li><a class="main__desc_active active" data-name="all__characteristics" href="#">Все про товар</a></li>
                  <li><a class="main__desc_active" data-name="garanty" href="#">Гарантія</a></li>
                  <li><a class="main__desc_active" data-name="delivery" href="#">Доставка</a></li>
                  <li><a class="main__desc_active" data-name="payment" href="#">Оплата</a></li>
                  <li><a class="main__desc_active" data-name="questions" href="#">Запитання</a></li>
              </ul>
          </div>
          <div class="characteristics">
              <div class="all__characteristics">
                <h3>Характеристики товару</h3>
                <div class="characteristics_info">
                    <div class="characteristics_left">
                        <!-- <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Бренд</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>Vitto Rossi</span></div>
                        </div>
                        <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Матеріал</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>Текстиль</span></div>
                        </div>
                        <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Висота</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>42.5</span></div>
                        </div>
                        <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Ширина</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>13</span></div>
                        </div> -->
                    </div>
                    <div class="characteristics_right">
                        <!-- <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Вид товару</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>Рюкзак</span></div>
                        </div>
                        <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Колір</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>Чорний</span></div>
                        </div>
                        <div class="characteristics_line">
                            <div class="characteristics_line_left"><span>Довжина</span></div>
                            <div class="characteristics_line_center"></div>
                            <div class="characteristics_line_right"><span>30</span></div>
                        </div> -->
                    </div>
                </div>
              </div>
              <div class="garanty characteristics_hiden">
                <h3>Гарантія і контроль якості</h3>
                <div class="characteristics_info">
                    <div class="characteristics_left">
                        <div class="garanty_line">
                           <p class="mb">Vitto Rossi це взуття та аксесуари, що відрізняються високою якістю. Ми надаємо гарантію: - на кожну пару - 30 днів.</p>
                           <p>Гарантійний термін носіння (експлуатації) взуття та аксесуарів обчислюється з дня продажу через роздрібну мережу або з початку сезону:</p>
                           <ul>
                               <li><span>Зимовий сезон - з 15 листопада по 15 березня</span></li>
                               <li><span>Літній сезон - з 15 травня по 15 вересня</span></li>
                               <li><span>Весняно-осінній сезон - з 15 березня по 15 травня і з 15 вересня по 15 листопада</span></li>
                           </ul>
                           <p class="mt">При використанні сезонного взуття з порушенням сезонності, претензії до якості продукції не приймаються.</p>
                        </div>
                       
                    </div>
                    <div class="characteristics_right">
                        <div class="garanty_line">
                            <p>Шкіргалантерейні вироби:</p>
                            <ul>
                                <li><span>сумки господарські, пляжні, дитячі і шкільні рюкзаки, вироби дрібної шкіргалантереї - 30 днів</span></li>
                                <li><span>сумки жіночі, чоловічі, дорожні, спортивні - 50 днів</span></li>
                                <li><span>валізи, ділові портфелі і папки - 70 днів</span></li>
                                <li><span>ремені - 30 днів</span></li>
                            </ul>
                            <p class="mt">Повернення придбаних в інтернет-магазині «Vitto Rossi» товарів здійснюється у випадках і згідно з умовами, регламентованими "Законом України про захист прав споживачів".</p>
                         </div>
                    </div>
                </div>
              </div>
              <div class="delivery characteristics_hiden">
                <h3>Доставка</h3>
                <p class="mt">Доставка товарів бренду «VITTO ROSSI» здійснюється по всій території України компанією «Нова Пошта» та «Укрпошта».
                    Оплата доставки, відповідно до тарифів компанії перевізника. Отримати товар можна в найближчому відділенні Вашого населеного пункту.</p>
                <p class="mt"> <span class="p_bolt">Самовивіз товару з магазинів мережі «VITTO ROSSI»</span> 
                    Ви маєте можливість оформити замовлення на товар, який Вас зацікавив на нашому сайті і забрати свою покупку в найближчому магазині «VITTO ROSSI». Доставка товару в магазини «VITTO ROSSI» на ваше замовлення здійснюються безкоштовно *.</p>
                <p class="mt"> <span class="p_bolt">  Товари з позначкою Final Sale.</span> 
                  Вони відправляються тільки по передоплаті. Кожна окрема одиниця товару з відміткою Final Sale відправляється окремою посилкою.</p>
                <p class="mt"> <span class="p_bolt">Товари вартістю до 1000 гривень.</span> 
                    Вони відправляються замовнику при передоплаті. Ця умова не стосується таких категорій товарів: догляд за взуттям, бахіли для взуття, устілки, шнурки.</p>
                <p>Способи доставки:</p>   
                <div class="delivery_img">
                    <div class=" ukr_delivery">
                        <span class="delivery_img_wrapper ukr-post"><i></i>
                        Укр пошта</span>
                    </div>
                    <div class=" new_delivery">
                        <span class="delivery_img_wrapper new-post"><i></i>
                            Нова пошта</span>
                    </div>
                    <div class=" ukrcur_delivery">
                        <span class="delivery_img_wrapper ukr-post-courier"><i></i>
                            УкрПошта  <br> кур'єр </span>
                    </div>
                </div> 
                <div class="characteristics_info">
                    <div class="characteristics_left">
                        <div class="garanty_line">
                           <p class="mb"><span class="p_bolt">Терміни доставки:</span>
                            Доставка замовлень здійснюється від 3 до 6 робочих днів. <br>
                            * Доставка замовлень, оформлених в період акцій, може бути збільшена до 5 - 8 робочих днів.</p>
                          
                        </div>
                       
                    </div>
                    <div class="characteristics_right">
                        <div class="garanty_line">
                            <p><span class="p_bolt">Терміни зберігання:</span>
                                Увага! На складі «Нова Пошта» посилка із замовленням зберігається до 5 робочих днів. Після вичерпання цього терміну - відправляється назад.</p>
                           
                         </div>
                    </div>
                </div>
              </div>
              <div class="payment characteristics_hiden">
                <h3>Оплата</h3>
                <p class="mt">Бренд «VITTO ROSSI» піклується про своїх клієнтів, пропонуючи різні способи оплати. Товар можна оплатити при замовленні або в момент його отримання. Вибирайте зручний спосіб оплати і економте свій час!</p>
               
                <p>Способи оплати:</p>   
                <div class="delivery_img">
                    <div class=" ukr_delivery">
                        <span class="delivery_img_wrapper online-card"><i></i>
                        Способи оплати:</span>
                    </div>
                    <div class=" new_delivery">
                        <span class="delivery_img_wrapper cod"><i></i>
                            накладений
платіж</span>
                    </div>
                    
                </div> 
                <div class="characteristics_info">
                    <div class="characteristics_left">
                        <div class="garanty_line">
                           <p class="mb"><span class="p_bolt">1. Онлайн оплата карткою (Платіжна система «Fondy»)</span>
                            оплатити замовлення в момент його оформлення можна за допомогою карт Visa або MasterCard, Приват24, Apple Pay.
</p>
<ul class="payment-icon-list">
    <li><span class="visa"></span></li>
    <li><span class="mastercard"></span></li>
    <li><span class="privat"></span></li>
    <li><span class="applepay"></span></li>
</ul>




                        </div>
                       
                    </div>
                    <div class="characteristics_right">
                        <div class="garanty_line">
                            <p><span class="p_bolt">2. Накладений платіж</span>
                                Оплата здійснюється при отриманні у відділенні «Нова Пошта». Оплата здійснюється після перевірки складу посилки на відповідність замовлення і товарному чеку виключно в національній валюті.</p>
                          
                           
                         </div>
                    </div>
                </div>
              </div>
              <div class="questions characteristics_hiden">
                <h3>Запитання</h3>
                
                <div class="characteristics_info">
                    <div class="characteristics_left">
                        <div class="garanty_line">
                            <div class="acardeon">
                                <div class="acardeon__item">
                                    <p>Хто виробник взуття?<span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        <span> Взуття відшивається у чотирьох країнах: Польща, Італія, Туреччина, Китай</span>
                                    </div>
                                </div>
                                <div class="acardeon__item">
                                    <p>Як підібрати розмір?<span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        Якщо Ви не впевнені, який розмір вибрати, Ви можете заміряти довжину Вашої стопи. Вам знадобиться аркуш паперу А4, лінійка або метр, і ручка, або олівець. Вам потрібно поставити стопу на листок, відзначити тримаючи олівець строго вертикально, там, де у Вас закінчується великий палець, і відзначити там, де у Вас закінчується п'ята, відзначити там, і там. І заміряти від однієї крайньої точки, до другої крайньої точки Вашої стопи, і повідомити нашому менеджеру, або вказати в замовленні довжину яка у Вас вийшла, бажано з точністю до мм, і він підбере Вам розмір.
                                        <br>
                                        <img width="356" alt="zamer_nogi.png" src="../images/raz.png" height="266" title="zamer_nogi.png" loading="lazy">
                                    </div>
                                </div>
                                <div class="acardeon__item">
                                    <p>Як оформити замовлення?<span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        <div>Оформити замовлення легко та просто. Оберіть найзручнішій для Вас варіант :<br>
                                            <br>
                                            1. Замовлення зворотнього дзвінка на сайті. Натисніть на кнопку зв'язку та впишіть Ваш номер телефону, після чого з Вами зв'яжеться менеджер нашого інтернет-магазину та допоможе оформити замовлення.<br>
                                           <br>
                                            2. «Замовлення в один клік» — виберіть товар та в разі потреби розмір, натисніть на кнопку «замовлення в один клік», внесіть номер свого телефону та чекайте дзвінок від менеджера.<br>
                                           <br>
                                            3. Зателефонуйте нам та менеджер інтернет-магазину допоможе оформити замовлення: 0 (993) 58-60-56; 0 (933) 35-59-12; 0 (973) 89-43-98.<br>
                                           <br>
                                           4. Самостійне оформлення на сайті інтернет-магазину. Виберіть модель, за потребою розмір, додайте товар до кошіка, натисніть на кнопку «оформити замовлення» та внесіть необхідні дані для остаточного оформлення замовлення.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="characteristics_right">
                        <div class="garanty_line">
                            <div class="acardeon">
                                <div class="acardeon__item">
                                    <p>Як оплатити замовлення? <span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        <div>Оплатити замовлення можна двома способами:<br>
                                            <br>
                                            1. Online-оплата. При оформленні замовлення можна оплатити за допомогою Privat24, Visa, MasterCard, ApplePay і т.д. ;<br>
                                            <br>
                                            2. Накладений платіж. Оплата відбувається при отриманні замовлення у відділенні пошти. Даний вид оплати включає в себе додаткові витрати:% від суми + фіксована сума за переказ грошових коштів.</div>
                                       
                                    </div>
                                </div>
                                <div class="acardeon__item">
                                    <p>Вартість доставки?<span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        Вартість доставки визначається відповідно до тарифів поштового оператора.
                                    </div>
                                </div>
                                <div class="acardeon__item">
                                    <p>Термін доставки?<span class="acardeon_simbol"><i class="fa-solid fa-angle-up"></i></span></p>
                                    <div class="acardeon__item_text hide">
                                        <div>Доставка замовлень здійснюється від 3 до 6 робочих днів.
                                            * Доставка замовлень, оформлених у період акцій, може бути збільшена до 5 - 8 робочих днів.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    

    <script>
       
    </script>
   
    <script type="module" src="./js/product.js"></script>
    <script type="module" src="./js/cart.js"></script>
    <!-- <script src="../js/category.js"></script> -->




     <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
   
  </script>
</body>
</html>
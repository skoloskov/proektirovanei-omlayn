<?php get_header(); ?>

<body class="page__body">
  <div class="site-container">
    <header class="header">
      <div class="container header__container">
        <a href="/" class="logo header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
        </a>
        <div class="adress header__adress">
          <button href="#" class="btn" data-path="city-popup"><?= get_field("cityb"); ?></button>
          <?= get_field("adress"); ?>

        </div>
        <div class="right header__right">

          <a href="tel:<?= get_field("tel"); ?>" class="phone header__phone"><?= get_field("tel"); ?></a>
          <button class="btn-reset burger" aria-label="Открыть меню" aria-expanded="false" data-burger>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
          </button>
          <nav class="nav" data-menu>
            <div class="nav__text">
              <span>Меню</span>
              <button class="btn-reset burger-close" aria-label="Закрыть меню"></button>
            </div>
            <ul class="nav__list list-reset">
              <li class="nav__item"><a href="#services" class="nav__link">Мы строим</a></li>
              <li class="nav__item"><a href="#projects" class="nav__link">Наши работы</a></li>
              <li class="nav__item"><a href="#about" class="nav__link">Наша команда</a></li>
              <li class="nav__item"><a href="#" class="nav__link">Акции</a></li>
              <li class="nav__item"><a href="#faq" class="nav__link">Вопросы и ответы </a></li>
            </ul>
            <div class="nav__bottom">

              <button class="btn" data-path="form-popup">Бесплатный расчёт</button>
              <a href="#"><?= get_field("tel"); ?></a>

            </div>
          </nav>
        </div>
      </div>

    </header>

    <main class="main">
      <section class="hero">
        <div class="hero__bg"></div>
        <div class="container">
          <div class="hero__container">
            <div class="hero__offer">
              <h1><?php echo carbon_get_theme_option('crb_mainblock_title'); ?></h1>
              <span><?php echo carbon_get_theme_option('crb_mainblock_price'); ?></span>
              <p><?php echo carbon_get_theme_option('crb_mainblock_desc'); ?></p>
              <div class="hero__offer--action">
                <button class="btn-green btn" data-path="form-popup">Рассчитать стоимость</button>
                <ul class="social list-reset">
                  <?php if (get_field('whatsapp')) : ?>
                    <li><a href="<?= get_field("whatsapp"); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/wh.svg" alt="" width="30">
                      </a></li>
                  <?php endif; ?>
                  <?php if (get_field('telegram')) : ?>
                    <li><a href="<?= get_field("telegram"); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tg.svg" alt="" width="25">
                      </a></li>
                  <?php endif; ?>
                  <?php if (get_field('viber')) : ?>
                    <li><a href="<?= get_field("viber"); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/vb.svg" alt="" width="30">
                      </a></li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="hero__form">
              <span><strong>Рассчитайте стоимость</strong> вашего дома или бани
                и получите <strong>проект и смету в подарок!</strong></span>
              <form action="<?php echo get_template_directory_uri();?>/mailform.php" method="POST" class="form">
                <div class="form__container">
                  <div class="form__column">
                    <span>ТИП ОБЪЕКТА</span>
                    <label for="one"><input type="radio" name="complect_type" id="one" value="Постоянное проживание">Постоянное проживание</label>
                    <label for="two"> <input type="radio" name="complect_type" id="two" value="Сезонное проживание">Сезонное проживание</label>
                    <label for="three"> <input type="radio" name="complect_type" id="three" value="Для дачи">Для дачи</label>
                  </div>
                  <div class="form__column">
                    <span>Тип комплектации:</span>
                    <label for="3"><input type="radio" name="complect" value="Постоянное проживание">Постоянное проживание</label>
                    <label for="4"><input type="radio" name="complect" value="Сезонное проживание">Сезонное проживание</label>
                    <label for="5"><input type="radio" name="complect" value="Для дачи">Для дачи</label>
                    <label for="6"><input type="radio" name="complect" value="Дом под ключ<">Дом под ключ</label>
                  </div>
                  <div class="form__column">
                    <span>ЖЕЛАЕМАЯ ПЛОЩАДЬ ДОМА</span>
                    <input type="number" placeholder="10" name="plishad" >
                  </div>
                  <div class="form__column">
                    <span>ЕСТЬ УЧАСТОК?</span>
                    <label for="5"><input type="radio" name="complect_y" value="Да, есть">Да, есть</label>
                    <label for="6"><input type="radio" name="complect_y" value="Пока нет">Пока нет</label>
                  </div>
                </div>
                <div class="form__column phone-block">
                  <span>НОМЕР ТЕЛЕФОНА *</span>
                  <input type="text" class="form__column--phone tel" name="tel" placeholder="+7">
                    <input type="text" name="name" value="пользователь" hidden >
                </div>
                <div class="form__column">
                  <button>Узнать стоимость</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="hero__benefist benefist">
          <div class="container">
            <div class="benefist__list">
              <?php $table = carbon_get_theme_option('crb_benefist');
              if (!empty($table)) : ?>
                <?php foreach ($table as $tr) : ?>
                  <div class="benefist__item">
                    <img src="<?php echo wp_get_attachment_image_url($tr['crb_benefist_image'], ''); ?>" alt="">
                    <span><?php echo $tr['crb_benefist_name'] ?></span>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="services" id="services">
        <div class="container">
          <h2 class="services__title">Полный спектр строительных услуг</h2>
          <span class="services__smalltext">НАШИ ПРОЕКТЫ</span>
          <div class="services__lists">
            <?php
            $i = 0;
            $k = 0;
            $fgnfn = carbon_get_theme_option('crb_directions'); ?>
            <?php
            if (!empty($fgnfn)) : ?>
              <?php foreach ($fgnfn  as $cnt => $item) : ?>
                <div class="services__item">
                  <img src="<?php echo wp_get_attachment_image_url($item['crb_benefist_img'], ''); ?>" alt="">
                  <div class="services__item--text">
                    <strong><?php echo $item['crb_directions_name'] ?></strong>
                    <div class="open-modal-btn">Смотреть</div>
                  </div>
                    <div class="modal-popup" id="popw">
                          <div class="modal-popup-over">
                        <div class="modal-gallery">
                            <button class="btn-reset close" aria-label="Закрыть модальное окно">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="" width="20px">
                            </button>
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper slider-block3">
                                <div class="swiper-wrapper">
                                     <?php
                                          foreach( $item['crb_benefist_gallery'] as $image ) {
                                           echo '<div class="swiper-slide">';   
                                           echo wp_get_attachment_image( $image, 'large' );
                                           echo "</div>";
                                          }
                                         ?>
                                </div>
                                <div class="swiper-navigation">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                            
                           
                            
                             
                            <span>Хотите себе такой дом?</span>
                            <form class="modal-form" action="<?php echo get_template_directory_uri();?>/mail.php" method="POST">
                              <div class="modal-form--block">
                                <label for="">НОМЕР ТЕЛЕФОНА *</label>
                                <input type="text" name="name" hidden value="Заявка на дом"> 
                                <input type="text" class="modal-form--phone tel" name="tel" placeholder="+7">
                              </div>
                              <div class="modal-form--block">
                                <button>Узнать стоимость</button>
                              </div>
                            </form>
                             </div>
                        </div>
                    </div>
             </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </section>

      <section class="offer">
        <div class="container offer__container" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banya_gellert.png');">
          <h2 class="offer__title">Есть фото дома мечты?</h2>
          <span class="offer__smalltext">Отправьте нам, а мы спроектируем и рассчитаем стоимость именно вашего
            дома</span>
          <form action="" class="offer__form">
            <div class="offer__form--block">
              <div class="offer__form--item">
                <span>НОМЕР ТЕЛЕФОНА *</span>
                <input type="text" class="tel" placeholder="+7">
              </div>
              <div class="offer__form--item">
                <span>ДОБАВИТЬ ФОТО ДОМА</span>
                <input type="file">
              </div>
            </div>
            <button class="offer-btn">Узнать стоимость</button>
          </form>
        </div>
      </section>

      <section class="video">
        <div class="container">
          <h2 class="video__title">Видео с наших объектов</h2>
          <span class="video__smalltext">Наш процесс работы над проектом</span>
          <div class="video__list">
              
            <?php $table = carbon_get_theme_option('crb_video');
              if (!empty($table)) : ?>
                <?php foreach ($table as $tr) : ?>
                 <div class="video__item">
                     <div class="video__image">
                        <div class="video__link"><a href="<?php echo $tr['crb_video_linkvideo'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt=""></a></div>
                        <img src="<?php echo wp_get_attachment_image_url($tr['crb_video_img'], ''); ?>" alt="">
                      </div>
                    <span><?php echo $tr['crb_video_name'] ?></span>
                    <p><?php echo $tr['crb_video_desc'] ?></p>
                  </div>
                <?php endforeach; ?>
              <?php endif; ?>  
          </div>
        </div>
      </section>

      <section class="calculator">
        <div class="calculator__bg"> </div>
        <div class="container">
          <h2 class="calculator__title">Калькулятор строительства</h2>
          <div class="calculator__block">
            <form action="" class="form-calc">
              <div class="swiper form-slider">

                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                    <div class="steps"> 1 из 5</div>
                    <h3>Выберите тип помещения:</h3>
                    <div class="form-calc--list">
                      <div class="form-calc--div">
                        <label for="">
                          <div class="form-calc--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/form1.png" alt="">
                          </div>
                          <input type="checkbox">
                          <div>Постоянное проживание</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <div class="form-calc--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/form2.png" alt="">
                          </div>
                          <input type="checkbox">
                          <div>Сезонное проживание</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <div class="form-calc--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/form3.png" alt="">
                          </div>
                          <input type="checkbox">
                          <div>Дача</div>
                        </label>
                      </div>

                      <div class="form-calc--div">
                        <label for="">
                          <div class="form-calc--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/form4.png" alt="">
                          </div>
                          <input type="checkbox">
                          <div>Инвестирование</div>
                        </label>
                      </div>
                    </div>

                  </div>

                  <div class="swiper-slide">
                    <div class="steps"> 2 из 5</div>
                    <h3>Тип комплектации:</h3>
                    <div class="form-calc--list stepstwo">
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Только фундамент</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Строение под крышу</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Баня под ключ</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Дом под ключ</div>
                        </label>
                      </div>
                    </div>

                  </div>

                  <div class="swiper-slide">
                    <div class="steps"> 3 из 5</div>
                    <h3>Желаемая площадь дома:</h3>
                    <div class="form-calc--list range-class">
                      <div class="range-wrap">
                        <input type="range" class="range" min="10" max="300">
                        <output class="bubble"></output>
                      </div>
                    </div>
                  </div>



                  <div class="swiper-slide">
                    <div class="steps"> 4 из 5</div>
                    <h3>Когда вы планируете начать строительство?</h3>
                    <div class="form-calc--list stepstwo">
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Сейчас</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Через месяц</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>В течении 6 месяцев</div>
                        </label>
                      </div>
                      <div class="form-calc--div">
                        <label for="">
                          <input type="checkbox" class="custom-checkbox">
                          <div>Просто узнаю цену</div>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="steps"> 5 из 5</div>
                    <h3>На какой номер телефона отправить расчёт стоимости вашего дома?</h3>
                    <div class="form-calc--list laststep">

                      <div class="form-calc__inputs">
                        <label for="">Телефон</label>
                        <input type="text" class="tel" placeholder="+7">
                      </div>

                      <ul class="social list-reset">
                        <li><a href="<?= get_field("whatsapp"); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/wh.svg" alt="" width="30">
                          </a></li>
                        <li><a href="<?= get_field("telegram"); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tg.svg" alt="" width="25">
                          </a></li>
                        <li><a href="<?= get_field("viber"); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/vb.svg" alt="" width="30">
                          </a></li>
                      </ul>

                    </div>
                  </div>

                </div>
                <div class="swiper-navigation">
                  <div class="steps-button">
                    <div class="steps-button--back" id="swiperPrevs">Назад</div>
                    <div class="steps-button--next" id="swiperNexts">Далее</div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </section>

      <section class="complect">
        <div class="container">
          <h2 class="complect__title">Комплектации</h2>

          <div class="complect__block">
            <img src="<?php echo get_template_directory_uri(); ?>/img/complect.jpg" alt="">

            <div class="complect__block__t1">
              <div class="complect__block__tcontent">
                <img src="/wp-content/uploads/2023/03/╨Ю╨ж1-scaled.jpg" alt="">
                <strong>Проект ОЦ-1</strong>
              </div>
            </div>
            <div class="complect__block__t2">
              <div class="complect__block__tcontent">
                <img src="/wp-content/uploads/2023/03/╨║╨╛╨╗╨╗╨░╨╢╨╕-╨Я╨С1-scaled.jpg" alt="">
                <strong>Проект ПБ-1</strong>
              </div>
            </div>
            <div class="complect__block__t3">
              <div class="complect__block__tcontent">
                <img src="/wp-content/uploads/2023/03/╨║╨╛╨╗╨╗╨░╨╢╨╕-╨Ф╨▒1-scaled.jpg" alt="">
                <strong>Проект ДБ-1</strong>
              </div>
            </div>

          </div>

          <img class="fixedbg" src="<?php echo get_template_directory_uri(); ?>/img/quality_jpg.png" alt="">
          <div class="complect__tab tabs">
            <ul class="tab__list tabs__list list-reset">
              <li class="tabs__item"><button class="tabs__btn tabs__btn--active" data-tabs-path="house">ДОМ</button></li>
              <li class="tabs__item"><button class="tabs__btn " data-tabs-path="bane">БАНЯ</button></li>
              <li class="tabs__item"><button class="tabs__btn " data-tabs-path="besedka">БЕСЕДКИ</button></li>
            </ul>
            <div class="tab__content tabs__content tabs__content--active" data-tabs-target="house">
              <div class="tab__one">
                <span>Большой опыт</span>
                <span>Высокое качество</span>
                <span>Низкая цена </span>
                <div class="tab__price">
                  от <b> 32 000 </b> р/м²
                </div>
              </div>
            </div>
            <div class="tab__content tabs__content" data-tabs-target="bane">
              <div class="tab__one">
                <span>Большой опыт</span>
                <span>Высокое качество</span>
                <span>Низкая цена </span>
                <div class="tab__price">
                  от <b> 36 000 </b> р/м²
                </div>
              </div>
            </div>
            <div class="tab__content tabs__content" data-tabs-target="besedka">
              <div class="tab__one">
                <span>Большой опыт</span>
                <span>Высокое качество</span>
                <span>Низкая цена </span>
                <div class="tab__price">
                  от <b> 50 000 </b> р/м²
                </div>
              </div>
            </div>
            <div class="complect-center">
              <button class="btn-green btn" data-path="form-popup">Узнать стоимость</button>
            </div>
          </div>
        </div>
      </section>

      <section class="blocksection">
        <div class="container">
          <h2 class="blocksection__title">Наши предложения</h2>
          <div class="blocksection__container">
            <div class="blocksection__list">
              <div class="blocksection__item">
                <span>Бесплатные расчёт</span>
                <p>Мы приедем к вам и сделаем бесплатные замеры и составим смету.</p>
              </div>
              <div class="blocksection__item">
                <span>Бесплатный проект</span>
                <p>Перед составлением сметы мы предоставим типовой проект в подарок.</p>
              </div>
              <div class="blocksection__item">
                <span>Соблюдаем технологии строительства домов и бань</span>
                <p>Наши специалисты работают качественно и в установленный срок.</p>
              </div>
              <div class="blocksection__item">
                <span>Почему клиенты выбирают нас?</span>
                <p>В первую очередь - это доверие. Доверие на протяжении всех 20 лет нашей успешной работы. Вы сами
                  убедитесь в этом, если попробуете. Мы работаем без посредников!</p>
              </div>
            </div>
            <div class="blocksection__last">
              <span>Новым клиентам мы дарим</span>
              <p>скидку 5% на работы!</p>
            </div>
          </div>
          <div class="blocksection__center">
            <button class="btn-green btn" data-path="form-popup">Узнать стоимость моего дома</button>
          </div>

        </div>
      </section>

      <section class="addition">
        <div class="container">
          <h2 class="addition__title">Доп услуги</h2>
          <div class="addition__list">
            <div class="addition__item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/i1.png" alt="">
              </div>
              <div>
                <span>Отделка и ремонт</span>
                <p>Делаем капитальный и косметический ремонт в квартирах, домах, таунхаусах</p>
              </div>
            </div>
            <div class="addition__item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/i2.png" alt="">
              </div>
              <div>
                <span>Электромонтажные работы</span>
                <p>Соблюдаем технику безопасности и регламенты ГОСТов, СНИПов и ПУЭ</p>
              </div>
            </div>
            <div class="addition__item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/i3.png" alt="">
              </div>
              <div>
                <span>Малярные работы</span>
                <p>Выполняем качественные малярные работы. Имеем отличных специалистов.</p>
              </div>
            </div>
            <div class="addition__item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/i4.png" alt="">
              </div>
              <div>
                <span>Плиточные работы</span>
                <p>Ювелирно положим плитку любой сложности и формата.</p>
              </div>
            </div>
            <div class="addition__item">
              <div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/i5.png" alt="">
              </div>
              <div>
                <span>Сантехнические работы</span>
                <p>Сделаем сантехнику в вашем доме на долгие годы. </p>
              </div>
            </div>
          </div>
        </div>

        <div class="sertificat">
          <img src="<?php echo get_template_directory_uri(); ?>/img/sertificat.png" alt="">
          <div class="sertificat-center">
            <button class="btn-green btn" data-path="form-popup">Рассказать что хочу сделать</button>
          </div>
        </div>
      </section>


      <section class="about" id="about">
        <div class="container">
          <div class="about__link">
            <a href="<?php echo carbon_get_theme_option('crb_video_about'); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt="">
            </a>
          </div>
          <h2 class="about__title">Видео презентация компании</h2>
          <p class="about__text">Работая с нами, вы можете быть уверены, что мы найдем лучшее и наиболее оригинальное
            решение именно для вас. Мы стремимся не терять времени даром, но при этом не торопимся в ущерб результату.
          </p>
        </div>
      </section>

      <section class="projects" id="projects">
        <div class="container">
          <h2 class="projects__title">Построенные дома</h2>
          <div class="projects-sliders ">
            <div class="projects-sliders-nav slider-nav">


              <?php $projects = carbon_get_theme_option('crb_portfolio'); ?>

              <?php foreach ($projects as $tr) : ?>
                <div class="slider-nav__item">
                  <?php
                  echo wp_get_attachment_image($tr['crb_portfolio_photo'], 'medium');
                  ?>
                </div>
              <?php endforeach; ?>



            </div>
            <div class="projects-sliders-block slider-block">
              <div class="swiper-wrapper">


                <?php $project = carbon_get_theme_option('crb_portfolio'); ?>
                <?php foreach ($project as $tr) : ?>
                  <div class="swiper-slide">
                    <img src="<?php echo wp_get_attachment_image($tr['crb_portfolio_photo'], ''); ?>">
                  </div>
                <?php endforeach; ?>



              </div>
              <div class="swiper-navigation">
                <div class="swiper-button-next" id="swiperNext"></div>
                <div class="swiper-button-prev" id="swiperPrev"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="faq" id="faq">
        <div class="container">
          <h2 class="faq__title">Часто задаваемые вопросы</h2>
          <div class="faq__container">

            <?php $faqs = carbon_get_theme_option('crb_faq'); ?>

            <ul class="accordion__list list-reset">

              <?php foreach ($faqs as $tr) : ?>
                <li class="accordion">

                  <button class="accordion__control" aria-expanded="false">
                    <span class="accordion__title"><?php echo $tr['crb_quest'] ?></span>
                    <span class="accordion__icon"><img src="<?php echo get_template_directory_uri(); ?>/img/arrows.svg" alt=""></span>
                  </button>

                  <div class="accordion__content" aria-hidden="true">
                    <p><?php echo $tr['crb_answer'] ?></p>
                  </div>


                </li>
              <?php endforeach; ?>

            </ul>
            <div class="faq__text">
              <h2>Не нашли ответ?</h2>
              <p>Напишите нам в WhatsApp или Telegram</p>
              <ul class="social list-reset">
                <?php if (get_field('whatsapp')) : ?>
                  <li><a href="<?= get_field("whatsapp"); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/wh.svg" alt="" width="30">
                    </a></li>
                <?php endif; ?>
                <?php if (get_field('telegram')) : ?>
                  <li><a href="<?= get_field("telegram"); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/tg.svg" alt="" width="25">
                    </a></li>
                <?php endif; ?>
                <?php if (get_field('viber')) : ?>
                  <li><a href="<?= get_field("viber"); ?>">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/vb.svg" alt="" width="30">
                    </a></li>
                <?php endif; ?>
              </ul>
              <a class="faq__phone" href="tel:<?= get_field("tel"); ?>"><?= get_field("tel"); ?></a>
            </div>
          </div>
        </div>
      </section>

    </main>

    <?php
    get_footer();
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package designonline
 */

get_header();
?>

<body class="page__body">
  <div class="site-container">
    <header class="header">
  <div class="container header__container">
    <a href="" class="logo header__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
    </a>
    <div class="adress header__adress">
        <?php echo carbon_get_theme_option('crb_adress'); ?>
    </div>
    <div class="right header__right">
     
      <a href="" class="phone header__phone"><?php echo carbon_get_theme_option('crb_phone'); ?></a>
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
          <a href="#"><?php echo carbon_get_theme_option('crb_phone'); ?></a>

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
              <span><?php echo carbon_get_theme_option('mainblock_price'); ?></span>
              <p><?php echo carbon_get_theme_option('crb_mainblock_desc'); ?></p>
              <div class="hero__offer--action">
                <button class="btn-green btn" data-path="form-popup">Рассчитать стоимость</button>
                <ul class="social">
                  <li><a href=""></a></li>
                  <li><a href=""></a></li>
                  <li><a href=""></a></li>
                </ul>
              </div>
            </div>
            <div class="hero__form">
              <span><strong>Рассчитайте стоимость</strong> вашего дома или бани
                и получите <strong>проект и смету в подарок!</strong></span>
              <form action="" class="form">
                <div class="form__container">
                  <div class="form__column">
                    <span>ТИП ОБЪЕКТА</span>
                    <label for="one"><input type="radio" name="0" id="one" value="0">Постоянное проживание</label>
                    <label for="two"> <input type="radio" name="1" id="two" value="1">Сезонное проживание</label>
                    <label for="three"> <input type="radio" name="2" id="three" value="2">Для дачи</label>
                  </div>
                  <div class="form__column">
                    <span>Тип комплектации:</span>
                    <label for="3"><input type="radio" name="3">Постоянное проживание</label>
                    <label for="4"><input type="radio" name="4">Сезонное проживание</label>
                    <label for="5"><input type="radio" name="5">Для дачи</label>
                    <label for="6"><input type="radio" name="6">Дом под ключ</label>
                  </div>
                  <div class="form__column">
                    <span>ЖЕЛАЕМАЯ ПЛОЩАДЬ ДОМА</span>
                    <input type="number" placeholder="10">
                  </div>
                  <div class="form__column">
                    <span>ЕСТЬ УЧАСТОК?</span>
                    <label for=""><input type="checkbox">Да, есть</label>
                    <label for=""><input type="checkbox">Пока нет</label>
                  </div>
                </div>
                <div class="form__column phone-block">
                  <span>НОМЕР ТЕЛЕФОНА *</span>
                  <input type="text" class="form__column--phone" placeholder="+7">
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
              <div class="benefist__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="">
                <span>Работаем с 2001 <br>
                  года в Туле</span>
              </div>
              <div class="benefist__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="">
                <span>Гарантия <br>
                  на дом до 5 лет</span>
              </div>
              <div class="benefist__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="">
                <span>Сельхоз ипотека на выгодных <br> условиях от 3%</span>
              </div>
              <div class="benefist__item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt="">
                <span>Проект и смета <br>
                  в подарок</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="services" id="services">
        <div class="container">
          <h2 class="services__title">Полный спектр строительных услуг</h2>
          <span class="services__smalltext">НАШИ ПРОЕКТЫ</span>
          <div class="services__lists">
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project1.png" alt="">
              <div class="services__item--text">
                <strong>ПРОЕКТ ВСЕСЕЗОННЫЙ</strong>
                 <button class="btn" data-path="project-popup">Смотреть</button>
              </div>
            </div>
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project1.png" alt="">
              <div class="services__item--text">
                <strong>ПРОЕКТ МОДНЫЙ</strong>
                <a href="#">Смотреть</a>
              </div>
            </div>
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project1.png" alt="">
              <div class="services__item--text">
                <strong>ПРОЕКТ КЛАССИКА</strong>
                <a href="#">Смотреть</a>
              </div>
            </div>
            <div class="services__item">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project1.png" alt="">
              <div class="services__item--text">
                <strong>ПРОЕКТ ЛИДЕР2</strong>
                <a href="#">Смотреть</a>
              </div>
            </div>
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
                <input type="text" placeholder="+7">
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
            <div class="video__item">
              <div class="video__image">
                <div class="video__link"><img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt=""></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/video1.png" alt="">
              </div>  
              <span>ОСТАВЬТЕ ЗАЯВКУ</span>
              <p>Отправьте заявку нам и мы свяжемся с вами в течение дня</p>
            </div>
            <div class="video__item">
              <div class="video__image">
                <div class="video__link"><img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt=""></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/video2.png" alt="">
              </div> 
              <span>ВЫПОЛНЕНИЕ ЗАКАЗА</span>
              <p>Выполнение всех работ с нашей стороны под вашим наблюдением</p>
            </div>
            <div class="video__item">
              <div class="video__image">
                <div class="video__link"><img src="<?php echo get_template_directory_uri(); ?>/img/play.svg" alt=""></div>
                <img src="<?php echo get_template_directory_uri(); ?>/img/video3.png" alt="">
              </div> 
              <span>ЗАВЕРШЕНИЕ РАБОТЫ</span>
              <p>Утверждение результатов работы и подготовка закрытия заказа.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="calculator">
        <div class="calculator__bg"> </div>
        <div class="container">
          <h2 class="calculator__title">Калькулятор строительства</h2>
          <div class="calculator__block">
            <form action="" class="form-calc">
              <div class="form-slider">

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
                  <div class="form-calc--list">

                  </div>
                  
                </div>

                <div class="swiper-slide">
                  <div class="steps"> 4 из 5</div>
                  <h3>Когда вы планируете начать строительство?</h3>
                  <div class="form-calc--list">

                  </div>
                  
                </div>

                <div class="swiper-slide">
                  <div class="steps"> 5 из 5</div>
                  <h3>На какой номер телефона отправить расчёт стоимости вашего дома?</h3>
                  <div class="form-calc--list">

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
                <p>ИМЕЕМ БОЛЬШОЙ ОПЫТ</p>
              </div>
            </div>
            <div class="complect__block__t2">
              <div class="complect__block__tcontent">
                <p>ОНЛАЙН ВИДЕО НАБЛЮДЕНИЕ</p>
              </div>
            </div>
            <div class="complect__block__t3">
              <div class="complect__block__tcontent">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project1.png" alt="">
             
                <strong>ПРОЕКТ ВСЕСЕЗОННЫЙ</strong>
                <button class="btn" data-path="project-popup">Смотреть</button>
             
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
           <a href="https://www.youtube.com/watch?v=yxvb3To7wu0">
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
                      <div class="slider-nav__item" tabindex="0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/work1.png" alt="">
                      </div>
                      <div class="slider-nav__item" tabindex="0">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt="">
                      </div>
                    </div>
                    <div class="projects-sliders-block slider-block">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/work1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/16.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
              </section>
         
      <section class="faq" id="faq">
        <div class="container">
          <h2 class="faq__title">Часто задаваемые вопросы</h2>
          <div class="faq__container">
              
             <?php $faqs = carbon_get_theme_option('crb_faq');?>
            
             <ul class="accordion__list list-reset">
             
    			<?php foreach ( $faqs as $tr ): ?>
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
              <a class="faq__phone" href="tel:88001017117">8 800 101-71-17</a>
            </div>
          </div>
        </div>
      </section>
     
    </main>
	

<?php
get_footer();

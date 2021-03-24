<?php get_header(); ?>
    <div id="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="slide slide-1 swiper-slide">
                    <div class="col-lg-10">
                        <h1 class="data-aos-1" data-aos="fade-up" >Tallinna Pae Gümnaasium</h1>
                        <h2 class="full data-aos-2" data-aos="fade-up" >Партнерство | Открытость | Старательность | Сотрудничество | Любовь | Толерантность</h2>
                        <h2 class="mobile data-aos-2" data-aos="fade-up">Школа, которая помнит прошлое, имеет счастливое настоящее и формирует уверенное будущее.</h2>
                    </div>
                </div>
                <div class="slide slide-2 swiper-slide">
                    <div class="col-lg-10">
                        <h1>COVID</h1>
                        <h2>Рекомендации и советы в условиях распоространения короновируса</h2>
                        <div class="row-button">
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <!--<div class="col-2">
                        <i class="fas fa-shield-virus"></i>
                    </div>
                    <div class="col-4">
                        <div class="table-text">
                            <h3>COVID</h3>
                            <ul>
                                <li><a href="">Руководство для лиц, находившемся в тесном контакте с зараженным COVID-19</a></li>
                                <li><a href="">Рекомендации министерства образования и науки и Департамента здоровья по организации учебной работы в условиях распространения коронавируса</a></li>
                                <li><a href="">Tallinna Pae gumnaasiumi reeglid ja pohimotted COVID-19 riiskide maandamiseks</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
                <div class="slide slide-3 swiper-slide">
                    <div class="col-lg-10">
                        <h1>Новости</h1>
                        <h2>Со всеми последними событиями можете ознакомится на нашем новом информационном портале</h2>
                        <div class="row-button">
                            <a href="">Подробнее</a>
                            <div class="info">
                                <div class="info-img"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div id="section-bottom">
            <a id="bottom-button" href="#category">
                <div class="arrow-left"></div>
                <div class="arrow-right"></div>
            </a>
        </div>
    </div>

    <div id="particles-js"></div>
    <div id="category" class="container-fluid scrollto">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 data-aos="fade-up">Категории</h2>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="table">
                            <h3>Гимназия</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(). '/wp-content/uploads/2021/01/Opilaste-arv-klassides.pdf' ?>"><span>Наполняемость классов</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'teenused', null)?>"><span>Список услуг</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'tookoht', null)?>"><span>Вакансии</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'riigihanked', null)?>"><span>Государственные поставки</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'kohtulahendid', null)?>"><span>Судебные решения</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'ruumirent', null)?>"><span>Аренда помещений</span></a></li>
                                <li><a href="http://dhs.tallinn.ee/atp/"><span>Регистр документов</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'klassiastumine', null)?>"><span>Прием в 1 класс</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'koolisookla', null)?>"><span>Меню школьной столовой</span></a></li>
                                <li><a><span>Страница школьных новостей</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="table">
                            <h3>Документы</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(). '/wp-content/uploads/2021/01/TPG_pohimaarus2013.pdf' ?>"><span>Устав школы</span></a></li>
                                <li><a href="<?php echo get_site_url(). '/wp-content/uploads/2021/01/TPG_Arengukava.pdf' ?>"><span>Программа развития</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'jarelvalve', null)?>"><span>Государственный надзор</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'oppenoukogud', null)?>"><span>Педсоветы и решения</span></a></li>
                                <li><a><span>Внутренний распорядок</span></a></li>
                                <li><a><span>Условия приема в гимназию</span></a></li>
                                <li><a><span>Руководство по зарплате</span></a></li>
                                <li><a><span>Защита личных данных</span></a></li>
                                <li><a><span>Официальные бланки</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="table">
                            <h3>Коллектив</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(null, 'juhtkond', null)?>"><span>Администрация</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'klassijuhatajad', null)?>"><span>Классные руководители</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'opetajad', null)?>"><span>Преподаватели</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'spetsialistid', null)?>"><span>Специалисты</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="table">
                            <h3>Учебная работа</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(null, 'oppekava', null)?>"><span>Учебная программа</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'eesmark', null)?>"><span>Цели школы</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'tookorraldus', null)?>"><span>Режим работы гимназии</span></a></li>
                                <li><a href="https://pae.edupage.org/timetable/?1"><span>Расписание уроков</span></a></li>
                                <li><a href="http://development/wp-content/uploads/2021/02/Konsultatsioonid.pdf"><span>Расписание консультаций</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'terviseedendus', null)?>"><span>Охрана здоровья учащихся</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'hariduslik-erivajadus', null)?>"><span>Образовательные потребности</span></a></li>
                                <li><a href="http://development/wp-content/uploads/2021/02/KK2017-2018.pdf"><span>Языковое погружение</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="table">
                            <h3>Учащимся</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(null, 'gumnaasiumi-lopetaja', null)?>"><span>Выпускникам гимназии</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'pohikooli-lopetaja', null)?>"><span>Выпускникам основной школы</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'oppeplaan', null)?>"><span>Учебный план гимназии</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'kusitlused', null)?>"><span>Опросы</span></a></li>
                                <li><a><span>Практические и исследовательские работы в гимназии</span></a></li>
                                <li><a><span>Творческие работы в основной школе</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'uurimistoo-teema', null)?>"><span>Темы исследовательских работ</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="table">
                            <h3>Родителям</h3>
                            <ul>
                                <li><a><span>Распорядок дня</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'hoolekogu', null)?>"><span>Попечительский совет</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'koosolekud', null)?>"><span>Родительские собрания</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'eelkool', null)?>"><span>Подготовительная группа</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'koolivorm', null)?>"><span>Школьная форма</span></a></li>
                                <li><a><span>Школа родительского успеха</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'lapsevanemate-kooli-materjalid', null)?>"><span>Материалы "Школа родительского успеха"</span></a></li>
                                <li><a><span>Важная информация</span></a></li>
                                <li><a><span>Среда для заказа ученического билета</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="table">
                            <h3>Работа по интересам</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(null, 'huvitegevus', null)?>"><span>Работа в кружках</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'huvitegevus', null)?>"><span>Ученическое самоуправление</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'huvitegevus', null)?>"><span>План мероприятий</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'huvitegevus', null)?>"><span>Проекты</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="450">
                        <div class="table">
                            <h3>Обзор школы</h3>
                            <ul>
                                <li><a href="<?php echo get_site_url(null, 'ajalugu', null)?>"><span>История школы</span></a></li>
                                <li><a><span>Миссия и видения школы</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'vaartused', null)?>"><span>Ценности школы</span></a></li>
                                <li><a><span>Символы школы</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'traditsioonid', null)?>"><span>Школьные традиции</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'meedias', null)?>"><span>Школа в СМИ</span></a></li>
                                <li><a href="<?php echo get_site_url(null, 'saavutused', null)?>"><span>Достижения</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="lable" class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h2 data-aos="fade-up">Партнеры</h2>
                <div id="lable-list" class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="row justify-content-center">
                            <div class="img" data-aos="fade-up" data-aos-delay="150"><a class="unesco" href="http://unesco.ee/uhendkoolide-vorgustik/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="300"><a class="ekool" href="https://ekool.eu" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="450"><a class="erasmus" href="http://www.erasmuspluss.ee/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="600"><a class="keel" href="https://www.innove.ee/oppevara-ja-metoodikad/keelekumblus/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="750"><a class="fox" href="https://www.foxcademy.com/#welcome" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="900"><a class="tek" href="http://www.terviseinfo.ee/et/tervise-edendamine/koolis/tervist-edendavate-koolide-vorgustik" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="1050"><a class="nk" href="http://www.nooredkooli.ee/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="1200"><a class="tagasi" href="https://tagasikooli.ee/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="1350"><a class="marka" href="https://www.tallinn.ee/est/markajaaita/Marka-ja-aita-see-on-imeline-2" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="1500"><a class="kiamisest" href="http://kiusamisestvabaks.ee/" target="_blank"></a></div>
                            <div class="img" data-aos="fade-up" data-aos-delay="1650"><a class="tore" href="http://tore.ee/" target="_blank"></a></div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
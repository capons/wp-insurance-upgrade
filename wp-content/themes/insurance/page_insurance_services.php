<?php
/* Template name: insurance_services */

get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post();?>




    <section id="main-content">
        <div class="container">
            <!--
            <div id="buttons-m-c" style="padding: 30px;" class="row">
                <div  class="col-lg-3 t-elign-c">
                    <img id="b-f-b" src="image/b_people.png">
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
                </div>
            </div>
            <div id="c-services" style="padding: 30px;" class="row">
                <div class="col-xs-4">
                    <div  class="col-lg-12 c-s-b-transport">

                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="col-lg-12 c-s-b-medical">
                        <button id="s-s-detail"><p>УЗНАТЬ ПОДРОБНОСТИ >>></p></button>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="col-lg-12 c-s-b-insurance">

                    </div>
                </div>
            </div>
            -->
            <!--Display Breadcrumbs -->
            <div class="row">
                <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
            </div>

            <div class="row">
                <div id="cont-line-layout2" class="col-xs-11">

                </div>
            </div>
            <div class="row">
                <div  class="col-xs-11 center">
                    <div class="col-xs-8">
                        <div class="row">
                            <div class="col-lg-12">
                                <p style="color: rgb(52,52,52);font-size: 30px"><?php echo get_the_title();?></p>
                            </div>
                        </div>
                        <div style="padding: 20px 0px;" class="row">
                            <div class="col-lg-12">


                                <?php the_content(); ?>


                                <!--
                                <img id="c-layout-i" src="<?php bloginfo("template_directory");?>/image/image_layout2.png" alt="alt">
                                -->

                            </div>
                        </div>
                        <!--
                        <table class="table-full">
                            <tr>
                                <td colspan="2">
                                    <p class="c-about-comp">ЭГИДА - современная страховая компания, которая применяет в своей работе новейшие технологии<br>
                                        и лучшие международные пратики в сфере управления процессами. Компания входит в глобальную страховую
                                        группу Liberty Mutual, которая успешно работает на страховом рынке с 1912 года и являеться одной из крупнейших в мире.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="c-about-comp">
                                        В своей работе на российском рынке мы следуем стандартам и принципам работы Liberty Mutual, главной из которых -
                                        правильное и ответственное отношение к клиентам, деловым партнерам, сотрудникам и делу, которым мы занимаемся.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 21px;vertical-align: top">
                                    <span class="dot"></span>
                                </td>
                                <td>
                                    <p class="c-about-comp">
                                        Мы сотрудничаем с ведущими страховыми компаниями и банками России
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 21px;vertical-align: top">
                                    <span class="dot"></span>
                                </td>
                                <td>
                                    <p class="c-about-comp">
                                        Мы непредвзято относимся к страховщикам и банкам объективно показываем<br>
                                        вам как преимущества, так и недостатки того или иного продукта в разных компаниях
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style="width: 21px;vertical-align: top">
                                    <span class="dot"></span>
                                </td>
                                <td>
                                    <p class="c-about-comp">
                                        Мы - это опытная команда страховых, финансовых специалистов и юристов, которая
                                        обеспечивает поддержку на всех этапах заказа или просчета услуги
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="c-about-comp">
                                        Мы стремимся быть лучшими страховыми партнерами для наших клиентов: предлагать лучьшие продукты, лучшие цены и, конечно,
                                        лучший уровень обслуживания. Судя по оценкам, которые мы получаем от наших клиентов, у нас это получается.
                                        Мы будем рады,если и вы оцените нашу работу: вы можете позвонить в Центр контроля качества, отправить информацию через сайт или обратиться
                                        в любой из наших офисов. Мы работаем для вас и отвечаем для вас и отвечаем зв результат. И мы будем рады разделить наши успехи и
                                        достижения вместе с вами.
                                    </p>
                                </td>
                            </tr>
                        </table>
                        -->
                    </div>
                    <div id="second_layout_menu" class="col-xs-4">
                        <!--
                        <button id="layout_f_b">ПРОВЕРИТЬ СВОЙ ПОЛИС</button>
                        -->
                        <!--
                        <button id="layout-topmenu">ЧАСТНЫМ КЛИЕНТАМ</button>
                        -->
                        <!--
                        <ul id="layout_menu">
                            <li>
                                <a href="#">ЗЕЛЕНЫЕ КАРТЫ</a>
                            </li>
                        </ul>
                        -->
                        <ul class="nav nav-stacked" id="accordion1 layout_menu">

                            <li  class="panel"> <a id="layout-topmenu-gr" data-toggle="collapse" data-parent="#accordion1" href="#secondLink"><p style="margin-top: 10px;">ПРОВЕРИТЬ СВОЙ ПОЛИС</p></a>
                                <?php
                                //wp menu
                                wp_nav_menu( array(
                                    'menu' => 'check policy',
                                    //'depth' => 2,
                                    'container' => false,
                                    'menu_class' => 'collapse',
                                    'menu_id' => 'secondLink', ////ul id
                                    //Process nav menu using our custom nav walker
                                    'walker' => new wp_bootstrap_navwalker()) //libs/wp-bootstrap
                                );
                                ?>
                            </li>
                            
                            <li  class="panel"> <a id="layout-topmenu-b" data-toggle="collapse" data-parent="#accordion1" href="#firstLink"><p style="margin-top: 10px;">ЧАСТНЫМ КЛИЕНТАМ</p></a>
                                <?php
                                //wp menu
                                wp_nav_menu( array(
                                    'menu' => 'private clients',
                                    //'depth' => 2,
                                    'container' => false,
                                    'menu_class' => 'collapse',
                                    'menu_id' => 'firstLink', ////ul id
                                    //Process nav menu using our custom nav walker
                                    'walker' => new wp_bootstrap_navwalker()) //libs/wp-bootstrap
                                );
                                ?>
                            </li>
                            <li  class="panel"> <a id="layout-topmenu" data-toggle="collapse" data-parent="#accordion1" href="#thirdLink"><p style="margin-top: 10px;">КОРПОРАТИВНЫМ КЛИЕНТАМ</p></a>
                                <?php
                                //wp menu
                                wp_nav_menu( array(
                                    'menu' => 'corporate clients',
                                    //'depth' => 2,
                                    'container' => false,
                                    'menu_class' => 'collapse',
                                    'menu_id' => 'thirdLink', //ul id
                                    //Process nav menu using our custom nav walker
                                    'walker' => new wp_bootstrap_navwalker()) //libs/wp-bootstrap
                                );
                                ?>
                            </li>
                        </ul>
                        <?php $pagename = $post->post_name;
                        //echo $pagename;
                        echo wp_title();
                        if($pagename == 'green-card') {
                            echo 'ok';
                            ?>
                            <script>
                                $(document).ready(function () {
                                    console.log('test');
                                    $('#firstLink').collapse('show');
                                })
                            </script>
                            <?php
                        }
                        ?>
                        <?php
                        //$menu_slug = 'private clients';
                        $menus = get_registered_nav_menus();
                        $curent_menu_elem = array();
                        foreach ( $menus as $location => $description ) {
                            // echo $location . ': ' . $description . '<br />';
                            $menu_elements = wp_get_nav_menu_items ($location);
                            //if (isset($menu_elements)) {
                                foreach ($menu_elements as $row) {
                                    //array_push($curent_menu_elem,$row->title);
                                    $curent_menu_elem[$location][$row->title] = ''; //= $row->title;
                                }

                           // }

                        }
                        echo '<pre>';
                        print_r($curent_menu_elem);
                        echo '</pre>';
                        $curent_menu_page = $curent_menu_elem['corporate clients'];
                        foreach ($curent_menu_page as $key => $item) {
                            echo $key;
                        }





                        ?>





                        <!--
                        <button id="layout-bottommenu">КОРПОРАТИВНЫМ КЛИЕНТАМ</button>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <div id="call-b-bg" class="col-xs-12">
            <div style="padding: 30px;text-align: center" class="col-lg-8 center">
                <p style="font-size: 30px;color: white">
                    Один номер для любого вопроса <b>+7(473) 239 31 07</b>
                </p>
                <div class="row">
                    <div class="col-xs-6">
                        <a id="a-tech" href="#"><span id="technologi"></span>Обратный звонок</a>
                    </div>
                    <div class="col-xs-6">
                        <a id="a-map" href="#"><span id="map_b"></span>Обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News Section -->
    <!--
    <section>

        <div  style="min-height: 500px"  class="col-lg-5 col-lg-offset-1">
            <div class="col-xs-12">
                <p style="font-size: 30px">Новости</p>
            </div>
            <div class="col-xs-6">
                <button class="news-button">ПОДРОБНЕЕ >></button>
            </div>
            <div class="col-xs-6">
                <button class="news-button">ПОДРОБНЕЕ >></button>
            </div>
        </div>
        <div style="background: rgb(235,234,230);min-height: 500px" class="col-lg-6">
            <div class="col-lg-11">
                <div class="col-xs-12">
                    <p style="font-size: 30px">Полезная информация</p>
                </div>
                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6">
                        <button class="news-button">ПОДРОБНЕЕ >></button>
                    </div>
                    <div class="col-xs-6">
                        <button class="news-button">ПОДРОБНЕЕ >></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    -->

    <section>
        <div class="container">
            <!--
            <div style="text-align: center;padding: 10px" class="col-xs-12">
                <img id="ou-clients" src="./image/clients.png" alt="alt">
            </div>
            -->
            <div style="padding: 20px" class="col-lg-12">
                <div  class="col-lg-3 t-elign-c">
                    <img id="b-f-b" src="<?php bloginfo("template_directory");?>/image/b_people.png">
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-money" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">ВОПРОС<br>СПЕЦИАЛИСТУ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-tool" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СТРАХОВОЙ<br>СЛУЧАЙ</p></button>
                </div>
                <div class="col-lg-3 t-elign-c">
                    <button id="b-agent" style="border: none;background-color: inherit"><p style="text-align: right;font-family: 'Century Gothic';font-weight: 600;font-size: 12px;margin-right: 25px;margin-bottom: 0px">СВЯЗАТЬСЯ С<br>АГЕНТОМ</p></button>
                </div>
            </div>
        </div>
        <div id="orange-line" class="col-lg-12">

        </div>
    </section>






<?php endwhile; endif; ?>

<?php
get_footer();

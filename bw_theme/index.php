<!-- подключить меню из файла header.php -->
<?php get_header(  ); ?>

<!-- О нас -->
    <div class="about" id="about" style="background: url(<?= CFS()->get('background_white'); ?>) center 100% repeat-x,
    url(<?= CFS()->get('background_black'); ?>) center 100% repeat-x, #1d1d1d;">
        <div class="container">
            <div class="about__inner">
                <!-- cycle about card -->
                <?php
                $cards = CFS()->get('card');
                foreach ($cards as $row) {
                ?>
                    <div class="about__item">
                        <div class="about__year"><?= $row[ 'card_year' ] ?></div>
                        <div class="about__text"><?= $row[ 'card_text' ] ?></div>
                    </div>
                    <?php
                }
                    ?>

            </div>
        </div>
    </div>

    <!-- Участники -->
    <div class="team" id="team">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title"><?= CFS()->get('team_title'); ?></h2>
                <p class="block__text"><?= CFS()->get('team_description'); ?></p>
            </div>
            <!-- Карточки участников -->
            <div class="team__inner">


            <!-- Swiper  start-->
            <div class="swiper mySwiper">
            <!-- <div class="swiper-container"> -->
                <div class="swiper-wrapper">
                    <!-- <div class="swiper-slide"> -->

                    <?php
                $cards = CFS()->get('team_card');
                foreach ($cards as $row) {
                ?>
                <div class="swiper-slide">
                    <div class="team__item">
                    <img class="team__item-img" src="<?= $row[ 'team_img' ] ?>" alt="">
                    <h3 class="team__item-title"><?= $row[ 'team_name' ] ?></h3>
                    <p class="team__item-text"><?= $row[ 'team_post' ] ?></p>
                    <div class="team__icon-box">
                        <?php
                            if(!empty($row['team_github']['url'])) {
                                ?>
                            <a href="<?= $row['team_github']['url'] ?>" target="<?= $row['team_github']['target']?>"><i class="icon-github-circled-alt2"></i></a>
                                <?php
                            }
                                ?>
                        
                        <?php
                            if(!empty($row['team_whatsapp']['url'])) {
                                ?>
                            <a href="<?= $row['team_whatsapp']['url'] ?>" target="<?= $row['team_whatsapp']['target']?>"><i class="icon-whatsapp"></i></a>
                                <?php
                            }
                                ?>


                        <?php
                            if(!empty($row['team_vk']['url'])) {
                                ?>
                            <a href="<?= $row['team_vk']['url'] ?>" target="<?= $row['team_vk']['target']?>"><i class="icon-vkontakte"></i></a>
                                <?php
                            }
                                ?>                    
                                              
                    </div>
                    </div>
                </div>
                
                    <?php
                }
                    ?>
                
                </div>
                <!-- add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- Swiper  end   t-->
          

            </div>
        </div>
    </div>

    <!--   Услуги -->
    <div class="provide" id="provide">
        <div class="container">
            <div class="block__head inverse">
                <h2 class="block__title"><?= CFS()->get('provide_title'); ?></h2>
                <p class="block__text"><?= CFS()->get('provide_text'); ?></p>
            </div>
            <div class="provide__inner">

                <!-- start cycle provide_card -->
            <?php
            $cards = CFS()->get('provide_card');
            foreach ($cards as $row) {
            ?>
                <div class="provide__item">
                    <img src="<?= $row[ 'provide_card_image' ] ?>" alt="">
                    <h3 class="provide__item-title"><?= $row[ 'provide_card_title' ] ?></h3>
                    <p class="provide__item-text"><?= $row[ 'provide_card_text' ] ?></p>
                </div>
                <?php
            }
                ?>
                <!-- end cycle provide_card  -->
                
            </div>
        </div>
    </div> 
    <div class="contact" id="contact">
        <div class="container">
            <div class="block__head">
                <h2 class="block__title">Contac Us</h2>
                <p class="block__text">We know what we need to do</p>
            </div>
            <div class="contact__inner">
                <div class="contact__icon-box">
                    <div class="contact__item">
                        <i class="icon-phone"></i>
                        <div class="contact__text"><a href="tel:555222333">555-222-333</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-location"></i> 
                        <div class="contact__text"><a href="https://goo.gl/maps/ot9BCyYtQbSXoJYRA" target="_blank">Here is some address</a></div>
                    </div>
                    <div class="contact__item">
                        <i class="icon-mail-alt"></i>
                        <div class="contact__text"><a href="mailto:somemail@hotmail.com">somemail@hotmail.com</a></div>
                    </div>
                </div>
                <form action="" class="contact__form">
                    <input class="contact__name" type="text" placeholder="Full Name">
                    <input class="contact__email" type="email" placeholder="Email">
                    <input class="contact__number" type="number" placeholder="Number">
                    <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
                    <input type="submit" class="contact__button" value="Submit">
                </form>
            </div>
        </div>
    </div>

<!-- подключить подвал из файла footer.php -->
<?php get_footer(  ); ?>
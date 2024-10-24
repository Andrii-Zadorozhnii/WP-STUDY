<?php
/*
Template Name: Головна сторінка
*/

get_header();
?>
<main>

    <section class="side-by-side">
        <div class="container">
            <div class="side-by-side___wrapper">
                <div class="side-by-side__visual">
                    <span>(KK)</span>
                    <div class="side-by-side__image">
                        <img src="./wp-content/themes/klever/assets/images/img.png" alt="img" title="img">
                    </div>

                </div>
                <div class="side-by-side__content">
                    <div class="side-by-side__top">
                        <p class="side-by-side__label">
                            (Про компанію)
                        </p>
                        <div class="side-by-side__text">
                            <p>
                                KLEVER&KOMPAS® – виробник якісних товарів. Ми майстри створення комфортного простору для життя та відпочинку, де кожна деталь має своє значення.
                            </p>
                        </div>
                        <a href="/about/" class="side-by-side__link">
                            <span>Більше Про Нас</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none">
                                <rect width="27" height="27" fill="#284E47" rx="13.5" />
                                <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.089" d="m14.013 17.23 3.85-3.851m0 0-3.85-3.851m3.85 3.85H8.622" />
                            </svg>
                        </a>
                    </div>
                    <div class="side-by-side__bottom">
                        <h2 class="side-by-side__title section-title">
                            Якісно. Надійно. Інноваційно.
                        </h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="none">
                            <path fill="#284E47" fill-rule="evenodd" d="M12.632 29.534V6.793L5 0v22.815l7.632 6.719Zm1.66 1.563v-9.693L31.712 37H20.935l-6.643-5.903Zm0-9.762 6.983-5.739h10.438L19.58 26.05l-5.288-4.714Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="services_wrapper">
                <div class="services__top">
                    <div class="services__logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="78" height="106" fill="none">
                            <path fill="#284E47" fill-rule="evenodd" d="M22.818 84.61V19.46L.952 0v65.361L22.818 84.61Zm4.753 4.478v-27.77L77.481 106H46.605L27.57 89.088Zm0-27.966 20.006-16.44h29.904L42.723 74.626 27.57 61.122Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h2 class="services__title section-title">
                        Наші послуги
                    </h2>
                </div>
                <div class="services__list">
                    <div class="services__item">
                        <div class="services_image">
                            <img src="./wp-content/themes/klever/assets/images/img2.png" alt="img" title="img">
                        </div>
                        <div class="services__content">
                            <span class="services__number">01.</span>
                            <h3 class="service__name">
                                Девелопмент
                            </h3>
                            <p class="services__description">
                                Успішний девелопмент - це не лише про те, як правильно вкласти цеглини. Це про створення проєктів, які наповнюють простір життям та красою.
                            </p>
                            <a href="/development/" class="services__link">
                                <span>Детальніше</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" fill="none">
                                    <rect width="27" height="27" fill="#284E47" rx="13.5" />
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.089" d="m14.013 17.23 3.85-3.851m0 0-3.85-3.851m3.85 3.85H8.622" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>
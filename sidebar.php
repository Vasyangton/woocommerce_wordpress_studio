<?
/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' ); ?>
<?php
if ( ! is_active_sidebar( 'sidebar-widgets' ) ) {
	return;
}
?>


<div class="catalog second-catalog wrapper">
    <h2 class="title-parse">Высококачественные материалы для мастеров перманентного макияжа</h2>
    <h3>Инструменты, которые используют <br>професcионалы</h3>
    <p><a href="http://makeup-tattoo.net" class="catalog-link">Перейти на главную</a>
        </p>
    </div>
    <div class="catalog-buttons">
    <div class="catalog-buttons-up">
            <a href="http://makeup-tattoo.net/product-category/pigmenty-dlja-permanentnogo-makijazha/" class="catalog-hrefs"><button type="submit" class="catalog-six-btn"><img src="http://makeup-tattoo.net/wp-content/uploads/2022/07/make-up-3.png" alt="">Пигменты для<br>
                    перманентного макияжа</button></a><br>
            <a href="http://makeup-tattoo.net/product-category/apparaty-dlja-permanentnogo-makijazha-i-tatuirovki/" class="catalog-hrefs"><button type="submit" class="catalog-six-btn"><img src="http://makeup-tattoo.net/wp-content/uploads/2022/07/mask-group.png" alt="">Аппараты для<br>
                    перманентного макияжа и татуировок</button></a><br>
            <a href="http://makeup-tattoo.net/product-category/dopolnitelnoe-oborudovanie/" class="catalog-hrefs"><button type="submit" class="catalog-six-btn"><img src="http://makeup-tattoo.net/wp-content/uploads/2022/07/mask-group-1.png" alt="">Дополнительное<br>
                    оборудование</button></a></div>
    <div class="catalog-buttons-bottom">
            <a href="http://makeup-tattoo.net/product-category/rashodnye-materialy/" class="catalog-hrefs" style="margin: 0 2%;"><button type="submit" class="catalog-six-btn"><img src="http://makeup-tattoo.net/wp-content/uploads/2022/07/group-361.png" alt="">Расходные<br>
                    материалы</button></a><br>
            <a href="http://makeup-tattoo.net/product-category/soputstvujushhie-tovary/" class="catalog-hrefs" style="margin: 0 2%;"><button type="submit" class="catalog-six-btn"><img src="http://makeup-tattoo.net/wp-content/uploads/2022/07/mask-group-3.png" alt="">Сопутствующие<br>
                    материалы</button></a></div>
        
    </div>
    <div class="catalog-brovi">
    <?php echo do_shortcode( '[woof sid="auto_shortcode"]' ); ?>
    </div>
    <style>
        .catalog-buttons-bottom{
            margin-bottom: 2%;
        }
        .second-catalog {
            background-image: url('http://makeup-tattoo.net/wp-content/uploads/2022/06/second-catalog.png');
        }
        .active-btn {
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.21), rgba(0, 0, 0, 0.21)), radial-gradient(40.74% 105.28% at 52.37% 50%, #EEA436 0%, #FFD26D 100%) !important;
        }
       .catalog-brovi {
            display: none;
        }
      .catalog-osnovi {
            display: none;
        }
       @media(min-width: 320px) and (max-width: 490px) {
      .catalog-buttons-up,
            .catalog-buttons-bottom,
            .catalog-osnovi {
                display: grid !important;
                grid-template-columns: auto !important;
            }
          .osnova-button {
                width: 250px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
        @media (min-width: 491px) and (max-width: 1024px) {
            .catalog-buttons-up,
            .catalog-buttons-bottom,
            .catalog-osnovi {
                display: grid !important;
                grid-template-columns: auto auto !important;
                display: flex;
            justify-content: center;
            align-items: center;
            }
            a.catalog-hrefs {
                margin: 0 auto !important;
            }
            .osnova-button {
                width: 250px;
                height: 45px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .catalog-buttons-bottom{
                margin: 0 !important;
            }
        }
    </style>
    <script>
        var buttons = document.querySelectorAll('.catalog-hrefs'),
            title = document.querySelector('.title-parse'),
            catalog = document.querySelector('.second-catalog'),
            btns = document.querySelectorAll('.catalog-six-btn'),
            brovi = document.querySelector('.catalog-brovi'),
            choose = document.querySelectorAll('.catalog-choose');
        buttons[0].addEventListener('click', () => {
            sessionStorage.setItem('key', 1);
            sessionStorage.setItem('keyTwo', key);
        })
        buttons[1].addEventListener('click', () => {
            sessionStorage.setItem('key', 2);
        })
        buttons[2].addEventListener('click', () => {
            sessionStorage.setItem('key', 3);
        })
        buttons[3].addEventListener('click', () => {
            sessionStorage.setItem('key', 4);
        })
        buttons[4].addEventListener('click', () => {
            sessionStorage.setItem('key', 5);
        })
        
        var test = sessionStorage.getItem('key');
        if (test == 1) {
            title.innerHTML = 'Пигменты для перманентного макияжа';
            catalog.style.backgroundImage = 'url("http://makeup-tattoo.net/wp-content/uploads/2022/06/pigments.png")';
            btns[0].classList.add('active-btn');
            brovi.style.display = 'flex';
            sessionStorage.clear();
        } else if (test == 2) {
            title.innerHTML = 'Аппараты для перманентного макияжа и татуировок';
            catalog.style.backgroundImage = 'url("http://makeup-tattoo.net/wp-content/uploads/2022/06/apparats.png")';
            btns[1].classList.add('active-btn');
            sessionStorage.clear();
        } else if (test == 3) {
            title.innerHTML = 'Дополнительное оборудование';
            btns[2].classList.add('active-btn');
            sessionStorage.clear();
        } else if (test == 4) {
            title.innerHTML = 'Расходные материалы';
            btns[3].classList.add('active-btn');
            sessionStorage.clear();
        } else if (test == 5) {
            title.innerHTML = 'Сопутствующие материалы';
            btns[4].classList.add('active-btn');
            sessionStorage.clear();
        } else if (test == 6) {
            title.innerHTML = 'Отрисовка эскиза';
            btns[5].classList.add('active-btn');
            sessionStorage.clear();
        } 
        else {
            console.log('g');
        }
    </script>
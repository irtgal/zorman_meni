<template>
    <div id="wrapper">
        <h1 class="text-center main-title">Gostilna zorman</h1>
        <h2 class="text-center">CENIK</h2>

        <div id="menu">
            <button id="menu-close">
                <img alt="close-icon" src="images/close.png"/>
            </button>
            <h2 class="section-title text-orange link" data-url="alcohol-free">
                BREZALKOHOLNE PIJAČE
            </h2>
            <h2 class="section-title text-yellow link" data-url="warm-drinks">TOPLI NAPITKI</h2>
            <h2 class="section-title text-green link" data-url="beer">PIVA</h2>
            <h2 class="section-title text-red link" data-url="wines">VINA</h2>
            <h2 class="section-title text-orange link" data-url="spirit-drinks">
                ŽGANE PIJAČE
            </h2>
            <h2 class="section-title text-blue link" data-url="sale">AKCIJSKA PONUDBA</h2>
            <h2 class="section-title text-green link" data-url="meals">MALICE</h2>
        </div>

        <div id="alcohol-free" class="section">
            <h2 class="section-title">BREZALKOHOLNE PIJAČE</h2>
            <img
                alt="lemonade"
                class="alcohol-free-img"
                src="images/lemonade.png"
                width="200px"
            />
            <div class="section-content">
                <p class="item-name">
                    JABOLČNI SOK (0.1L) _ <span class="item-price">1.00</span>
                </p>
                <p class="item-name">
                    POMARANČNI SOK (0.1L) _ <span class="item-price">1.00</span>
                </p>
                <p class="item-name">GOSTI SOK (0.1L) _ <span class="item-price">1.00</span></p>
                <p class="item-name">
                    FRUCTAL SOK STEKLENICA (0.2L) _
                    <span class="item-price">2.20</span>
                </p>
                <p class="item-name">LEDENI ČAJ (0.33L) _ <span class="item-price">2.20</span></p>
                <p class="item-name">MULTISOLA (0.33L) _ <span class="item-price">2.20</span></p>
                <p class="item-name">RADENSKA (0.1L) _ <span class="item-price">0.50</span></p>
                <p class="item-name">
                    RADENSKA STEKLENICA (0.25L) _
                    <span class="item-price">1.80</span>
                </p>
                <p class="item-name">
                    COCA COLA, PEPSI (0.25L) _
                    <span class="item-price">2.20</span>
                </p>
                <p class="item-name">COCA COLA (0.1L) _ <span class="item-price">1.00</span></p>
                <p class="item-name">FANTA, ORA (0.25L) _ <span class="item-price">2.20</span></p>
                <p class="item-name">FANTA (0.1L) _ <span class="item-price">1.00</span></p>
                <p class="item-name">
                    SCHWEPPES, TONIK (0.25L) _
                    <span class="item-price">2.20</span>
                </p>
                <p class="item-name">COCKTA (0.25L) _ <span class="item-price">2.20</span></p>
                <p class="item-name">VODA (0.5L) _ <span class="item-price">1.50</span></p>
                <p class="item-name">
                    VODA Z OKUSOM (0.5L) _ <span class="item-price">2.00</span>
                </p>
                <p class="item-name">LIMONADA (0.4L) _ <span class="item-price">2.20</span></p>
                <p class="item-name">
                    LIMONADA Z OKUSOM (0.4L) _
                    <span class="item-price">2.60</span>
                </p>
                <p class="item-name">CEDEVITA (0.5L) _ <span class="item-price">1.80</span></p>
                <p class="item-name">RED BULL (0.25L) _ <span class="item-price">2.60</span></p>
            </div>
        </div>

        <div id="warm-drinks" class="section">
            <h2 class="section-title">TOPLI NAPITKI</h2>
            <img alt="coffe" class="warm-drinks-img" src="images/coffe.png" width="200px"/>
            <div class="section-content">
                <p class="item-name">KAVA _ <span class="item-price">1.40</span></p>
                <p class="item-name">KAVA S SMETANO _ <span class="item-price">1.60</span></p>
                <p class="item-name">KAVA Z MLEKOM _ <span class="item-price">1.50</span></p>
                <p class="item-name">MACCHIATO _ <span class="item-price">1.50</span></p>
                <p class="item-name">BREZKOFEINSKA KAVA _ <span class="item-price">1.60</span></p>
                <p class="item-name">
                    BEZKOFEINSKA KAVA S SMETANO _
                    <span class="item-price">1.80</span>
                </p>
                <p class="item-name">
                    BREZKOFEINSKA KAVA Z MLEKOM _
                    <span class="item-price">1.70</span>
                </p>
                <p class="item-name">BELA KAVA _ <span class="item-price">1.90</span></p>
                <p class="item-name">
                    BELA KAVA S SMETANO _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    BREZKOF. BELA KAVA S SMETANO _
                    <span class="item-price">2.40</span>
                </p>
                <p class="item-name">KAKAV _ <span class="item-price">1.80</span></p>
                <p class="item-name">KAKAV S SMETANO _ <span class="item-price">2.00</span></p>
                <p class="item-name">VROČA ČOKOLADA _ <span class="item-price">2.20</span></p>
                <p class="item-name">
                    VROČA ČOKOLADA S SMETANO _
                    <span class="item-price">2.40</span>
                </p>
                <p class="item-name">ČAJ _ <span class="item-price">1.50</span></p>
                <p class="item-name">
                    ČAJ Z LIMONO / ČAJ Z MLEKOM _
                    <span class="item-price">1.60</span>
                </p>
                <p class="item-name">ČAJ Z MEDOM _ <span class="item-price">1.80</span></p>
                <p class="item-name">ČAJ MED IN LIMONA _ <span class="item-price">1.90</span></p>
                <p class="item-name">MLEKO (0.1L) _ <span class="item-price">0.70</span></p>
                <p class="item-name">GROG _ <span class="item-price">4.00</span></p>
                <p class="item-name">KUHANO VINO _ <span class="item-price">1.20</span></p>
                <p class="item-name text-center text-yellow">
                    PON. - PET. MED 8:00 - 10:00 IN SOB. MED 9:00 - 11:00
                </p>
                <p class="item-name">
                    KAVA / Z MLEKOM / S SMETANO _
                    <span class="item-price">1.10</span>
                </p>
            </div>
        </div>

        <div id="beer" class="section">
            <h2 class="section-title">PIVA</h2>
            <img alt="beer" class="beer-img" src="images/beer-cut.png" width="150px"/>
            <div class="section-content">
                <p class="item-name">
                    LAŠKO / UNION (0.5L) _ <span class="item-price">2.50</span>
                </p>
                <p class="item-name">RADLER (0.5L) _ <span class="item-price">2.50</span></p>
                <p class="item-name">ČRNI RADLER (0.5L) _ <span class="item-price">2.50</span></p>
                <p class="item-name">
                    LAŠKO / UNION (0.33L) _ <span class="item-price">2.30</span>
                </p>
                <p class="item-name">
                    TOČENO UNION (0.5L) _ <span class="item-price">2.50</span>
                </p>
                <p class="item-name">
                    TOČENO UNION (0.3L) _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    TOČENO UNION (0.2L) _ <span class="item-price">1.60</span>
                </p>
                <p class="item-name">
                    TOČENO UNION (0.1L) _ <span class="item-price">1.20</span>
                </p>
                <p class="item-name">
                    NEFILTRIRANO TEMNO (0.5L) _
                    <span class="item-price">2.90</span>
                </p>
                <p class="item-name">
                    NEFILTRIRANO SVETLO (0.5L) _
                    <span class="item-price">2.90</span>
                </p>
                <p class="item-name">
                    SMILE (0.33L) _ <span class="item-price">2.50</span>
                </p>
                <p class="item-name">
                    HEINEKEN (0.4L)_ <span class="item-price">2.70</span>
                </p>
                <p class="item-name">
                    BREZALKOHOLNO PIVO (0.5L) _
                    <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    KOZEL SVETLO / TEMNO (0.5L) _
                    <span class="item-price">2.60</span>
                </p>
                <p class="item-name">
                    STAROPRAMEN (0.5L) _ <span class="item-price">2.50</span>
                </p>
            </div>
        </div>

        <div id="wines" class="section">
            <h2 class="section-title">VINA</h2>
            <img
                alt="wine"
                class="wines-img"
                src="images/wine-cut.png"
                width="150px"
            />
            <div class="section-content">
                <p class="item-name">
                    LISJAK BELO (0.1L) _ <span class="item-price">1.10</span>
                </p>
                <p class="item-name">
                    HALOŽAN (0.1L) _ <span class="item-price">1.20</span>
                </p>
                <p class="item-name">
                    CVIČEK (0.1L) _ <span class="item-price">1.10</span>
                </p>
                <p class="item-name">
                    CABERNET MERLOT (0.1L) _
                    <span class="item-price">1.10</span>
                </p>
            </div>
        </div>

        <div id="spirit-drinks" class="section">
            <h2 class="section-title">ŽGANE PIJAČE</h2>
            <img
                alt="whisky"
                class="spirit-drinks-img"
                src="images/whisky-cut.png"
                width="150px"
            />
            <div class="section-content">
                <p class="item-name">
                    CC (0.03L) _ <span class="item-price">2.60</span>
                </p>
                <p class="item-name">
                    BALLANTINES (0.03l) _ <span class="item-price">2.60</span>
                </p>
                <p class="item-name">
                    JACK DANIELS (0.03L) _ <span class="item-price">2.80</span>
                </p>
                <p class="item-name">
                    TEQUILA (0.03L) _ <span class="item-price">2.60</span>
                </p>
                <p class="item-name">
                    STOCK (0.03L) _ <span class="item-price"> 2.20</span>
                </p>
                <p class="item-name">
                    GIN (0.03L) _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    VODKA (0.03L) _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    RUM (0.03L) _ <span class="item-price">1.70</span>
                </p>
                <p class="item-name">
                    BACARDI (0.03L) _ <span class="item-price">2.50</span>
                </p>
                <p class="item-name">
                    VILJAMOVKA (0.03L) _ <span class="item-price">2.80</span>
                </p>
                <p class="item-name">
                    CYNAR (0.03L) _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    JAGERMEISTER (0.03L) _ <span class="item-price">2.60</span>
                </p>
                <p class="item-name">
                    UNDERBERG (0.02L) _ <span class="item-price">2.80</span>
                </p>
                <p class="item-name">
                    BOROVNIČKA (0.03L) _ <span class="item-price">1.70</span>
                </p>
                <p class="item-name">
                    JAMESON (0.03L) _ <span class="item-price">2.80</span>
                </p>
                <p class="item-name">
                    ČRNA VODKA (0.03L) _ <span class="item-price">2.20</span>
                </p>
                <p class="item-name">
                    LIMONCE (0.03L) _ <span class="item-price">1.80</span>
                </p>
                <p class="item-name">
                    TRAVARICA (0.03L) _ <span class="item-price">2.00</span>
                </p>
                <p class="item-name">
                    PELINKOVEC (0.03L) _ <span class="item-price">1.70</span>
                </p>
                <p class="item-name">
                    SADJEVEC (0.03L) _ <span class="item-price">1.70</span>
                </p>
            </div>
        </div>

        <div id="sale" class="section">
            <h2 class="section-title">AKCIJSKA PONUDBA</h2>
            <img
                alt="ice-cream"
                class="sale-img"
                src="images/ice-cream.png"
                width="100px"
            />
            <div class="section-content">
                <p class="item-name">
                    SLADOLED KEPICA _ <span class="item-price">1.40</span>
                </p>
                <p class="item-name">
                    TOAST _ <span class="item-price">1.50</span>
                </p>
                <p class="item-name">
                    DVA TOASTA _ <span class="item-price">2.50</span>
                </p>
                <p class="item-name">
                    SENDVIC S SUHO SALAMO _ <span class="item-price">3.50</span>
                </p>
                <p class="item-name">
                    ZORMAN BURGER _ <span class="item-price">6.50</span>
                </p>
                <p class="item-name">
                    ZORMAN BURGER S KROMPIRČKOM _
                    <span class="item-price">7.50</span>
                </p>
            </div>
        </div>

        <div id="meals" class="section">
            <h2 class="section-title">MALICE</h2>
            <img alt="meals" class="meals-img" src="images/meals-cut.png" width="180px"/>
            <div v-if="shouldShowMeals" class="section-content">
                <p class="item-name text-center text-light-green">
                    10:00 - 15:00 <br/>
                    Malice se dnevno spreminjajo
                </p>
                <!-- ITEMS FROM BE -->
                <!-- <p class="item-name">MALICA 1 _ <span class="item-price">6.00</span></p> -->
                <div v-for="category in categories" :key="category.id" class="category">
                    <p class="category-title text-light-green">
                        {{ category.name }}
                    </p>
                    <div class="category-content">
                        <p v-for="item in category.active_items" :key="item.id" class="item-name">
                            {{ item.name.toUpperCase() }}
                            <span v-if="item.description && item.description.length" class="description"
                            >&nbsp;({{ item.description }})</span
                            >
                            _
                            <span class="item-price">{{ category.price }}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div v-else>
                <p class="item-name text-center text-light-green">
                    Malice so na voljo od ponedeljka do sobote<br />
                    med 10. in 15. uro.
                </p>
            </div>
        </div>
        <div id="footer">
            <p>Vse cene so v EUR. DDV je vključen v cenah artiklov.</p>
            <p class="small">Gostilna Zorman, Valburga 29</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Client",
    // Your component's properties and methods go here
    data() {
        return {
            categories: {}
        };
    },
    computed: {
        shouldShowMeals() {
            return true;
            const now = new Date();
            const dayOfWeek = now.getDay(); // 0 is Sunday, 1 is Monday, etc.
            const isSunday = dayOfWeek === 0;
            const start = new Date(
                now.getFullYear(),
                now.getMonth(),
                now.getDate(),
                9,
                30,
                0
            );
            const end = new Date(
                now.getFullYear(),
                now.getMonth(),
                now.getDate(),
                15,
                0,
                0
            );
            const currentTime = now.getTime();
            const isBetweenHours =
                currentTime >= start.getTime() && currentTime <= end.getTime();
            return !isSunday && isBetweenHours;
        }
    },
    mounted() {
        this.getCategories();
    },
    methods: {
        getCategories() {
            this.$axios
                .get("/api/client/index")
                .then(response => {
                    this.categories = response.data;
                    console.log(this.categories);
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style>
@font-face {
    font-family: "BobbinBold";
    src: url("/fonts/bobbin_bold.woff");
    font-display: auto;
}

@font-face {
    font-family: "CollectEmAll";
    src: url("/fonts/collect_em_all_bold.woff");
    font-display: auto;
}

#wrapper {
    font-family: "BobbinBold";
    background-color: #292b2c;
    color: white;
    padding: 50px 25%;
}

.main-title {
    font-size: 3.5em;
}

#button-menu img {
    width: 20px;
}

/* MENU */
#menu {
    display: none;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: #888e91;
    z-index: 100;
    flex: 1;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    -webkit-animation: expand 1s;
}

#menu-close {
    all: unset;
    position: absolute;
    top: 20px;
    right: 10px;
    padding: 10px;
    -webkit-animation: fadein 2s;
}

#menu-close img {
    width: 25px;
}

#menu .link {
    -webkit-animation: fadein 1.5s;
    width: 80%;
    padding: 0 40px;
}

/* CONTENT */
.title-div {
    margin-top: 80px;
    text-align: center;
}

.title-h {
    font-size: 70px;
    margin-bottom: 0;
    font-family: "BobbinBold";
}

.section {
    position: relative;
    margin: 0 15px 50px 15px;
}

.section:last-of-type {
    margin-bottom: 100px;
}

.section-title {
    font-size: 40px;
    margin: 0;
    font-family: "BobbinBold";
    text-align: center;
}

.item-name {
    color: white;
    margin: 5px 0;
    padding: 0px;
    font-size: 15px;
    font-family: "CollectEmAll";
    z-index: 50;
}

.item-name .description {
    font-size: 0.8em;
}

#footer {
    color: #888e91;
    text-align: center;
    font-family: "CollectEmAll";
    font-weight: bold;
    font-size: 8px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30px;
    width: 100%;
}

#alcohol-free .section-title,
#alcohol-free .item-price {
    color: #d8826f;
}

#warm-drinks .section-title,
#warm-drinks .item-price {
    color: #f0ad4e;
}

#beer .section-title,
#beer .item-price {
    color: #6f8a5c;
}

#wines .section-title,
#wines .item-price {
    color: #df5357;
}

#spirit-drinks .section-title,
#spirit-drinks .item-price {
    color: #d8826f;
}

#meals .section-title,
#meals .item-price {
    color: #6f8a5c;
}

#sale .section-title,
#sale .item-price {
    color: #2596be;
}

/* IMAGES STYLES */
.alcohol-free-img {
    position: absolute;
    top: 120px;
    right: -20px;
    opacity: 0.3;
}

.warm-drinks-img {
    position: absolute;
    bottom: 50px;
    right: 0;
    opacity: 0.3;
}

.beer-img {
    position: absolute;
    right: 0;
    top: 30px;
    opacity: 0.3;
}

.wines-img {
    position: absolute;
    right: 0;
    top: 0;
    opacity: 0.3;
}

.spirit-drinks-img {
    position: absolute;
    right: -15px;
    top: 120px;
    opacity: 0.3;
}

.sale-img {
    position: absolute;
    right: 30px;
    top: 45px;
    opacity: 0.3;
}

.meals-img {
    position: absolute;
    right: 0px;
    bottom: 0px;
    opacity: 0.3;
}

.category-title {
    margin: 0;
    font-size: 1.3em;
    font-family: "CollectEmAll";
}

/* ANIMATIONS */
@keyframes fadein {
    0% {
        opacity: 0;
    }

    5% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

@keyframes fadeout {
    from {
        opacity: 1;
    }

    to {
        opacity: 0;
    }
}

@-webkit-keyframes expand {
    0% {
        height: 0px;
    }

    100% {
        height: 100%;
    }
}

/* HELPERS */
.hover {
    cursor: pointer;
    filter: brightness(120%);
}

.text-center {
    text-align: center;
}

.text-orange {
    color: #d3745f;
}

.text-yellow {
    color: #f0ad4e;
}

.text-green {
    color: #4a5c3d;
}

.text-light-green {
    color: #6f8a5c;
}

.text-red {
    color: #db3d42;
}

.text-blue {
    color: #1d7595;
}

@media only screen and (max-width: 900px) {
    #wrapper {
        padding: 20px 0;
    }
}

h1 {
    margin: 20px 0;
    font-size: 60px;
}

h2 {
    font-size: 40px;
    margin: 0;
    text-align: center;
}
</style>

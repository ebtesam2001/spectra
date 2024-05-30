<template>
    <section>
        <div class="a">
                <img src="/imgs/Group 42.svg" alt="" class="images">
            </div>
        <figure>
            <div class="text" data-aos="fade-right">
                <h2><span>Our </span>Team</h2>
                <p>company, which was founded in Aden to fulfill the needs Spectra for Trading (SGT) is a leading Yemeni
                    company, which was founded in Aden to fulfill the needs. . </p>
            </div>
            <img src="/imgs/Group 44.png" alt="Image" class="imgs">

            <div class="allcard">
                <swiper :slidesPerView="3.5" :spaceBetween="10" :loop="true"  :autoplay="{
                    delay: 1000,
                }" :modules="modules" class="mySwiper">
                    <swiper-slide v-for="team in teams" :key="team">
                        <div class="card"  >
                            <img :src="team.image" alt="" class="imgs" />
                            <div class="card-content">
                                <h2>{{team.name}} </h2>
                                <p>{{team.job}}</p>
                            </div>
                        </div>
                    </swiper-slide>

                </swiper>
                <!-- <div class="card">
                    <div class="card-content">
                        <h2>Ahmeed Saeed </h2>
                        <p>Technical Support</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h2>Ahmeed Saeed </h2>
                        <p>Technical Support</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h2>Ahmeed Saeed </h2>
                        <p>Technical Support</p>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-content">
                        <h2>Ahmeed Saeed </h2>
                        <p>Technical Support</p>
                    </div>
                </div> -->
            </div>
        </figure>
    </section>
</template>


<style scoped>
* {
    margin: 0;
    padding: 0;
}

section {
    padding: 2% 0 3%;
    height: 500px;
}
section  .a {
    margin-left:83%;
}

section figure {
    color: black;
    display: flex;
    height: 450px;
    justify-content: space-between;
    margin-top: -2%;
}

section figure .text {
    width: 360px;
    /* background-color: #3A9494; */
    margin-left: 3%;
    padding-top: 3%;
}

section figure .text p{
   margin-top: 5%;
}


section figure .imgs {
    width: 50px;
    height: 80px;
    margin-top: 14%;
    position: relative;
    margin-left: 15%;
}

section figure div h2 {
    color: var(--primary);
}

section figure div h2 span {
    border-bottom: 2px solid #3A9494;
    color: black;
}

section figure .allcard {
    display: flex;
    justify-content: space-around;
    width: 100%;
    overflow: hidden;
}

section figure .allcard .images{
    width: 120px;
    height: 100px;
    margin-left: 10%;
    z-index: 20px;
}

section figure .allcard .card {
    width: 200px;
    height: 300px;
    /* background-image: url('/imgs/cardimg.svg');
    background-size: cover;
    position: relative; */
    position: relative;
    z-index: 40px;
}

section figure .allcard .card .card-content {
    position: absolute;
    bottom: 0px;
    left: 0px;
    background-color: rgba(255, 255, 255, 0.7);
    width: 100%;
    padding: 20px;
    text-align: center;
    margin-left: 15%;
    border-bottom: 4px solid #3A9494;
}

section figure .allcard .card img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

section figure .allcard .card .card-content h2 {
    font-size: 16px;
}

section figure .allcard .card .card-content p {
    font-size: 8px;
}

section figure .allcard .cardri {
    /* position: relative; */
    width: 50px;
}

@media screen and (max-width: 1024px) {
    section {
    height: 700px;
}
section  .a img{
    width: 100px;
}
section figure {
    flex-wrap: wrap;
}
    section figure .text {
    width: 660px;
    margin-left: 15%;
}
section figure .allcard {
    width: 90%;
    margin-left: 5%;
    margin-top: -3%;
}
section figure .allcard .card {
    width: 250px;
    height: 350px;
}
}
@media screen and (max-width: 768px) {
    section {
    height: 750px;
}
section  .a img{
    width: 90px;
    margin-top: 20px;
}
    section figure .text {
    width: 600px;
    margin-left: 13%;
}
section figure .imgs {
    margin-top: 4%;
}
section figure .allcard {
    width: 100%;
    margin-left: 1%;
    flex-wrap: wrap;
    /* margin-top: -10%; */
}
section figure .allcard .card {
    width: 200px;
    height: 300px;
}
}

@media screen and (max-width:425px) {
    section {
    height: 500px;
}

section  .a img{
    width: 50px;
}
    section figure .text {
    width: 300px;
    margin-left: 20%;
    /* margin-bottom: 6%; */
}
section figure .imgs {
    width: 50px;
    height: 80px;
    margin-top: -15%;
    position: relative;
}
section figure .allcard {
    width: 100%;
    margin-left: 1%;
    margin-top: -30%;
}
section figure .allcard .card {
    width: 100px;
    height: 150px;
}

section figure .allcard .card .card-content {
    padding: 2px;
}

section figure .allcard .card .card-content h2 {
    font-size: 12px;
}


}
</style>




<script >

import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/pagination';

// import './style.css';
import { Autoplay } from 'swiper/modules';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        teams: {
            type: Array,
            default: []
        },
    },
    setup() {
        return {
            modules: [Autoplay],
        };
    },
};
</script>

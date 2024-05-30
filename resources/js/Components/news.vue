<template>
    <section>
        <Subtitle span="LATEST" h1="NEWS" />
        <div class="all">
            <img src="/imgs/Group 50 (1).svg" alt="" class="imgs">
            <div class="allcard" >
                <div class="card" v-for="news in news" :key="news"  data-aos="fade-up" data-aos-duration="3000">
                    <!-- <img src="public/imgs/pexels-pixabay-139398.jpg" alt="" class="imgss"> -->
                    <img :src="news.image" alt="">
                    <div class="text">
                        <h1>{{ news.name }}</h1>
                        <div class="textcalen">
                            <img src="/imgs/Vector.svg" alt="">
                            <h6> {{ news.date }}</h6>
                        </div>
                        <p> {{ news.description }}</p>
                        <!-- <router-link to="/news" class="btn">
                            <h2>Read more</h2>
                            <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">
                        </router-link> -->


                    </div>
                </div>
                <!-- <div class="card" data-aos="fade-up" data-aos-duration="3000">

                    <img src="public/imgs/pexels-pixabay-139398.jpg" alt="" class="imgss">

                    <div class="text">
                        <h1>ISO Contract</h1>
                        <div class="textcalen">
                            <img src="public/imgs/Vector.svg" alt="">
                            <h6>October 12, 2020</h6>
                        </div>
                        <p>Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government.</p>
                        <router-link to="/news" class="btn">
                            <h2>Read more</h2>
                            <img src="public/imgs/tabler-icon-arrow-rightt.svg" alt="">

                        </router-link>


                    </div>

                </div>
                <div class="card" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">

                    <img src="/imgs/pexels-pixabay-139398.jpg" alt="" class="imgss">

                    <div class="text">
                        <h1>ISO Contract</h1>
                        <div class="textcalen">
                            <img src="/imgs/Vector.svg" alt="">
                            <h6>October 12, 2020</h6>
                        </div>
                        <p>Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government.</p>
                        <router-link to="/news" class="btn">
                            <h2>Read more</h2>
                            <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">

                        </router-link>


                    </div>

                </div>
                <div class="card" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
                    <img src="/imgs/pexels-pixabay-139398.jpg" alt="" class="imgss">
                    <div class="text">
                        <h1>ISO Contract</h1>
                        <div class="textcalen">
                            <img src="/imgs/Vector.svg" alt="">
                            <h6>October 12, 2020</h6>
                        </div>
                        <p>Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government.</p>
                        <router-link to="/news" class="btn">
                            <h2>Read more</h2>
                            <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">

                        </router-link>


                    </div>

                </div> -->
            </div>
        </div>
    </section>
</template>


<style scoped>
* {
    margin: 0;
    padding: 0;
}

section {
    padding: 30px 0;
    border-top: 6px solid var(--primary);
    background-color: var(--background);
}

section .all {
    width: 100%;
    display: flex;
    padding: 50px;
}

section .all .imgs {
    margin-top: -40%;
    margin-right: -3%;
    width: 100px;
}

section .allcard {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 95%;
    flex-wrap: wrap;
}

section .allcard .card {
    width: 630px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    margin-bottom: 30px;
    height: 250px;
    border: 2px solid var(--primary);
}
section .allcard .card .imgss {
    width: 50%;
}

section .allcard .card .text {
    color: var(--primary);
    font-weight: bold;
    padding: 4%;
    /* background-color: #3A9494; */
}

section .allcard .card .text h1 {
    font-size: 24px;
}

section .allcard .card .text .textcalen {
    font-size: 15px;
    color: #919191;
    display: flex;
    margin: 4px 0;
}

section .allcard .card .text .textcalen img {
    margin-right: 4px;
}

section .allcard .card .text p {
    font-size: 16px;
    color: #000000;
    margin-top: 8%;
    /* width: 100px; */
    /* height:70px ; */
    overflow: hidden;
}

section .allcard .card .text .btn {
    display: flex;
    color: var(--primary);
    text-decoration: none;
    margin-top: 15%;
}

section .allcard .card .text .btn h2 {
    font-size: 16px;
}



@media (max-width: 1024px) {
    section .all {
        /* background-color: #3a9462; */
        padding-right: 50px;
    }

    section .allcard {
        width: 80%;
        padding-left: 60px;
    }
    /* section .allcard .card {
height: 200px;        margin-top: 10%;
    } */
}

@media (max-width: 768px) {

    section .allcard {
        width: 80%;
        padding-left: 20px;
    }

    section .allcard .card {
        /* flex-direction: column; */
        margin-top: 10%;
    }



    section .allcard .card .text p {
        margin-top: 2%;
    }

    section .allcard .card .text a {
        display: flex;
        /* margin-top: 10px; */
        margin-top: 2%;
        /* background-color: #919191; */
    }
}

@media (max-width: 425px) {
    section .all {
        /* background-color: #3a9462; */
        padding-right: 5px;
    }

    section .allcard {
        width: 80%;
        margin-left: 3%;
        /* background-color: aqua; */
    }

    section .all .imgs {
        display: none;

    }

    section .allcard .card {
        flex-direction: column;
        /* margin-top: 10%; */
    }
    section .allcard .card .imgss {
        width: 100%;
        height: 120px;
        background-color: #919191;
    }

    section .allcard .card .text p {
        display: none;
    }
}
</style>



<script>
import Subtitle from '@/Components/subtitle.vue'
export default {

    props: {
        // span: {
        //     type: String,
        //     default: ''
        // },
        // h1: {
        //     type: String,
        //     default: ''
        // },
        news: {
            type: Array,
            default: []
        }
    },
    components: {
        Subtitle,
    },
};
</script>

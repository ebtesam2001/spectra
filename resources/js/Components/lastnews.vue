<template>
    <section>
        <div class="all">
            <div class="card" data-aos="zoom-out-right">
                <!-- <img src="/imgs/Rectangle 31.png" alt="" class="imgss"> -->
                <img :src="activeNews.image" alt="">
                <div class="text">
                    <h1>{{ activeNews.name }}</h1>
                    <div class="textcalen">
                        <img src="/imgs/Vector.svg" alt="">

                        <h6>{{ activeNews.date }}</h6>
                    </div>
                    <p>{{ activeNews.description }}</p>



                </div>
            </div>
            <div class="allcard h-[500px]" data-aos="zoom-out-left">

                <div class="smallcard cursor-pointer" v-for="news in news" :key="news" >

                    <!-- <img src="/imgs/Rectangle 31.svg" alt="" class="imgs  "> -->
                    <img :src="news.image" alt="">

                    <div class="text">
                        <h1>{{ news.name }}</h1>
                        <div class="textcalen">
                            <!-- <img src="/imgs/Vector.svg" alt=""> -->
                            <img :src="news.path" alt="">
                            <h6>{{ news.date }}</h6>
                        </div>
                        <a class="btn" @click="showNews(news.id)" >
                            <h2>Read more</h2>
                            <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">

                        </a>


                    </div>

                </div>
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
    /* border-bottom: 6px solid var(--primary); */
}

section .all {
    width: 100%;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    height: auto;
    flex-wrap: wrap;
}

section .all .card {
    width: 630px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    margin-bottom: 30px;
    height: 630px;
    border: 2px solid var(--primary);
}

section .all .card .imgss {
    height: 300px;
    width: 100%;
    background-color: #000000;
}

section .all .card .text {
    color: var(--primary);
    font-weight: bold;
    padding: 4%;
    /* background-color: #3A9494; */
}

section .all .card .text h1 {
    font-size: 24px;
}

section .all .card .text .textcalen {
    font-size: 15px;
    color: #919191;
    display: flex;
    margin: 4px 0;
}

section .all .card .text .textcalen img {
    margin-right: 4px;
}

section .all .card .text p {
    font-size: 16px;
    color: #000000;
    margin-top: 3%;
}

section .all .allcard {
    width: 25%;
    height: 620px;
    flex-wrap: wrap;
    margin-top: -20px;
    overflow: auto;
    /* background-color: #a55454; */
}

section .all .allcard .smallcard {
    width: 100%;
    height: 100px;
    display: flex;
    /* justify-content: space-between; */
    border: 2px solid var(--primary);
    /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
    box-shadow: 10px 0 10px rgba(167, 164, 164, 0.19);
    margin-top: 10px;
}

section .all .allcard .smallcard .imgs {
    height: 97px;
}

section .all .allcard .smallcard .text {
    margin-left: 5%;
}

section .all .allcard .smallcard .text .textcalen {
    font-size: 15px;
    color: #919191;
    display: flex;
    margin: 4px 0;
}

section .all .allcard .smallcard .text .textcalen img {
    margin-right: 4px;
}

section .all .allcard .smallcard .text .btn {
    display: flex;
    color: var(--primary);
    text-decoration: none;
    /* margin-top: 20%; */
}

section .all .allcard .smallcard .text .btn h2 {
    font-size: 14px;
    text-transform: uppercase;
}

@media (max-width: 1024px) {

    section .all {
        width: 80%;
        margin-left: 100px;
    }

    section .all .allcard {
        width: 400px;
        height: 600px;
    }

    section .all .allcard .smallcard {
        width: 100%;
        /* height: 150px;  */
    }

    section .all .allcard .smallcard .text .btn {
        display: flex;
        color: var(--primary);
        text-decoration: none;
        margin-top: 10%;
    }
}

@media (max-width: 425px) {

    section .all .card {
        width: 600px;
        height: 720px;
    }

    section .all {
        margin-left: 50px;
    }

    section .all .allcard {
        height: 700px;
        width: 700px;
    }

    section .all .allcard .smallcard {
        width: 100%;
        height: 120px;
    }

    section .all .allcard .smallcard .imgs {
        height: 115px;
    }

    section .all .allcard .smallcard .text .btn {
        margin-top: 30%;
    }
}


@media (max-width: 375px) {
    section .all .allcard .smallcard .text .btn {
        margin-top: 20%;
    }
}
</style>



<script>
import Subtitle from '@/Components/subtitle.vue'
export default {
    props: {
        news: {
            type: Array,
            default: []
        }
    },
    data: function () {
        return {
            name: "business page",
            // activeNews: {
            //     id: this.news[0].id, name: this.news[0].name, image: this.news[0].image,
            //     date: this.news[0].date, description: this.news[0].description,
            // }
            activeNews:{}
        }
    },

    components: {
        Subtitle,
    },
    methods: {
        showNews(id) {

            this.activeNews = {};
            for (var i = 0; i < this.news.length; i++) {
                if (this.news[i].id == id) {
                        this.activeNews={id:this.news[i].id,name:this.news[i].name,image:this.news[i].image,
                    date:this.news[i].date,description:this.news[i].description,};
                }

            }
        }
    },
    created() {
        this.activeNews={id:this.news[0].id,name:this.news[0].name,image:this.news[0].image,
            date:this.news[0].date,description:this.news[0].description,};
    }
};
</script>

<template>
    <section>
        <div class="text"   data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <Subtitle span="LINE OF " h1="BUSINESS" />
            <p>company, which was founded in Aden to fulfill the needs Spectra for Trading (SGT) is a leading Yemeni
                company, which was founded in Aden to fulfill the needs. . </p>
            <a href="/business" class="btn"> Read more
            </a>
        </div>
        <div class="all">

            <div class="allcard" data-aos="fade-left">
                <div class="card" v-for="category in category" :key="category">
                    <div class="card-image">
                        <!-- <img src="public/imgs/Shopping basket with food.svg" alt="Card Image"> -->
                        <img :src="category.image" alt="">
                    </div>
                    <p>{{ category.name }}</p>
                </div>
                <!-- <div class="card">
                    <div class="card-image">
                        <img src="public/imgs/Hospital and medical supplies for first aid.svg" alt="Card Image">
                    </div>
                    <p>{{ Categories.name }}</p>
                </div>
                <div class="card">
                    <div class="card-image">
                        <img src="public/imgs/Microscope and chemistry flasks.svg" alt="Card Image">
                    </div>
                    <p>{{ Categories.name }}</p>
                </div> -->
            </div>
            <img src="/imgs/Group 50 (1).svg" alt="Image" class="imgs" data-aos="fade-up" data-aos-duration="2000">
        </div>

        <!--  -->
    </section>
</template>


<style scoped>
* {
    margin: 0;
    padding: 0;
}

section {
    color: black;
    display: flex;
    flex-direction: row;
    align-items: center;
    background-color: #3a949410;
    /* height: 650px; */
    justify-content: space-evenly;
    border-bottom: 6px solid var(--primary);
    /* height: 550px; */

}

section .text {
    width: 30%;
    display: flex;
    flex-direction: column;
    align-items: start;
}

section .text .btn {
    padding: 10px;
    text-transform: uppercase;
    background-color: var(--primary);
    width: 150px;
    display: flex;
    justify-content: center;
    color: var(--white);
    font-size: 15px;
    float: left;
    margin: 40px 0 0;
    text-decoration: none;
    color: var(--white);
}


section .text h2 {
    color: var(--primary);
    font-size: 48px;
}

section .text h2 span {
    border-bottom: 2px solid #3A9494;
    color: black;
}

section .all {
    width: 55%;
    margin-top: 8%;
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    /* align-items: center; */
}

section .all .imgs {
    width: 100px;
    /* margin-top: -7%;
    margin-left: 8%; */
    /* position: relative; */
    z-index: 9;
    /* margin-bottom: 3%; */
    margin: -7%  0 5% 8%;
}

section .allcard {
    z-index: 11;
    margin-left: 15%;
    display: flex;
    flex-direction: column;
}

section .allcard .card {
    width: 640px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    border-bottom: 3px solid #3A9494;
    align-items: center;
    margin-bottom: 11px;
}

section .allcard .card .card-image {
    width: 150px;
    height: 100%;
    background-color: #3A9494;
    display: flex;
    justify-content: center;
}

section .allcard .card p {
    font-size: 24px;
    color: var(--primary);
    font-weight: bold;
    margin: 7px;

}

@media(max-width: 1024px) {
    section {
        flex-wrap: wrap;
    }

    section .allcard .card {
        width: 400px;
    }

    section .imgs {
        width: 100px;
        margin-top: -10%;
        margin-left: 1%;
        /* position: relative; */
    }
}

@media(max-width: 768px) {
    section {
        flex-direction: column;
        align-items: center;
    }

    section .text {
        width: 70%;

    }


    section .all {
        width: 90%;
    }

    section .allcard {
        align-items: center;
        margin-left: 0;

    }

    section .allcard .card {
        flex-direction: column;
        width: 500px;
    }

    section .allcard .card .card-image {
        width: 100%;
        height: 100%;
        background-color: #3A9494;
        display: flex;
        /* justify-content: center; */
    }

    section .allcard .card p {
        font-size: 20px;
    }
}

@media(max-width: 425px) {
    section .all .imgs {
        width: 100px;
        /* margin-top: -13%; */
    }

    section .allcard .card {
        width: 200px;
    }
}
</style>

<script >
import Subtitle from '@/Components/subtitle.vue'

import Category from '@/Components/Category.vue'
export default {
    data: function () {
        return {
        }
    },
    props: {
        // span: {
        //     type: String,
        //     default: ''
        // },
        // h1: {
        //     type: String,
        //     default: ''
        // },

        category: {
            type: Array,
            default: []
        }

    },
    components: {
        Subtitle,
        Category,
    },
};

</script>

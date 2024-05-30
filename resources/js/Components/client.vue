<template>
    <section>
        <img src="/imgs/Group 67.svg" alt="" class="imgs" data-aos="zoom-out-left">
        <div class="allcard">
            <div class="product" v-for="client in clients" :key="client"  data-aos="zoom-out-down">
                <img :src="client.image" alt="">
                <div class="clip">
                    <h1><span>{{ client.firstname }}</span>{{ client.lastname }} </h1>

                </div>
            </div>

        </div>


        <img src="/imgs/Group 43.png" alt="" class="imgss">
    </section>
</template>


<style scoped>
*{
    padding: 0;
    margin: 0;
}
.active{
    background-color: #3A9494;
    color: #fff !important;
    padding: 3px;
    border-radius: 5px;
}
section {
    display: flex;
    flex-direction: column;
    align-items: start;
    /* height:850px; */
    height: auto;
    padding: 4% 10%;
    /* background-color: blue; */
}

section .text {
    align-items: start;
}

section .nav {
    background-color: var(--white);
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: flex;
    justify-content: space-evenly;
    margin-top: 12px;
    width: 100%;
    padding: 10px;
    /* background-color: #3A9494; */
    z-index: 88;
}

section .nav a {
    color: var(--primary);
    margin: 0 5px;
    text-decoration: none;
    font-size: 20px;
    cursor: pointer;
}
section .imgs {
   width: 100px;
   margin-top: -1%;
   z-index: 9;
   margin-left: 90%;
}
section .allcard {
    display: flex;
    justify-content: space-evenly;
    /* align-items: center; */
    width: 100%;
    margin-top: -2%;
    flex-wrap: wrap;
}

section .allcard .product {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
    width: 250px;
    border:1px solid var(--primary);
    height: 200px;
    margin-bottom: 20px;
}

section .allcard .product img {
    width: 100%;
    margin-top: -40px;
}

section .allcard .product .clip h1 span {
    border-bottom: 2px solid #3A9494;
}

section .allcard .product .clip a {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

section .allcard .product .clip a h2 {
    font-size: 16px;
    color: var(--primary);
    text-align: center;
}
section .allcard .product .clip a img {
    width: 20px;
    margin-top: 2px;
}

section .imgss {
   width: 100px;
   margin-left: 3.5%;
}

@media (max-width: 768px) {
    section .nav a {
        font-size: 15px;
}}

@media (max-width:465px) {
    section .nav a {
        font-size: 14px;
}
section .imgs {
   margin-left:70%;
}
section .allcard {
    margin-top: -8%;
}
}

@media (max-width:375px) {
    section .nav a {
        font-size: 12px;
}
}
</style>




<script >
import Subtitle from '@/Components/subtitle.vue'
export default {

    data: function () {
        return {
        }
    },
    props: {
        clients: {
            type: Array,
            default: []
        },
    },
    components: {
        Subtitle,
    },
};

</script>

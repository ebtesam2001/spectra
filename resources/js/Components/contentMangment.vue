<!-- <template>
    <section>
        <div class="a">
                <img src="/imgs/Group 42.svg" alt="" class="images">
            </div>
            <div class="text" data-aos="fade-right" v-for="contentMangment in contentMangments" :key="contentMangment">
                <h2><span>{contentMangment.key}} </span>{contentMangment.section}} </h2>
                <p>{contentMangment.content}}  </p>
            </div>
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



section  .text {
    width: 360px;
    /* background-color: #3A9494; */
    margin-left: 3%;
    padding-top: 3%;
}

section  .text p{
   margin-top: 5%;
}




section  div h2 {
    color: var(--primary);
}

section  div h2 span {
    border-bottom: 2px solid #3A9494;
    color: black;
}





@media screen and (max-width: 1024px) {
    section {
    height: 700px;
    flex-wrap: wrap;
}
    section  .text {
    width: 660px;
    margin-left: 15%;
}

}
@media screen and (max-width: 768px) {
    section {
    height: 750px;
}
    section  .text {
    width: 600px;
    margin-left: 13%;
}

@media screen and (max-width:425px) {
    section {
    height: 500px;
}

    section  .text {
    width: 300px;
    margin-left: 20%;
    /* margin-bottom: 6%; */
}
}


}
</style>




<script >

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        contentMangments: {
            type: Array,
            default: []
        },
    },
};
</script> -->

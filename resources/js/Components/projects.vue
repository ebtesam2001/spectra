<template>
    <section>
        <div class="allcard">
            <!--  -->
            <div class="card" v-for="project in projects" :key="project.id" data-aos="fade-up"
                data-aos-anchor-placement="top-bottom">
                <img :src="project.image" alt="">
                <div class="card-content">
                    <h2>{{ project.name }}name</h2>
                    <p>{{ project.description }}</p>
                </div>
            </div>

        </div>
        <a href="/project" class="btn" :id="btnclass" data-aos="fade-up" data-aos-duration="3000"> Read more
            <img src="/imgs/tabler-icon-arrow-right.svg" alt="">
        </a>
    </section>
</template>


<style scoped>
* {
    margin: 0;
    padding: 0;
}

section {
    margin-bottom: 15px;
}

section .allcard {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    width: 100%;
    margin-top: 4%;
    flex-wrap: wrap;
}

section .allcard .card {
    width: 300px;
    height: 300px;
    position: relative;
    border-bottom: 4px solid #3A9494;
    margin-top: 20px;
    margin-top: 4%;
}

section .allcard .card img {
    object-fit: cover;
    width: 100%;
    height: 100%;
    position: relative;

}

section .allcard .card .card-content {
    position: absolute;
    bottom: 0px;
    left: 0px;
    background-color: rgba(255, 255, 255, 0.7);
    width: 100%;
    padding-bottom: 33px;
    padding: 8px;
    /* padding-top: 10px; */
}

section .allcard .card .card-content h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: var(--primary);
}

section .allcard .card .card-content p {
    font-size: 16px;
    margin-top: 10px;
}

section .btn {
    padding: 10px;
    text-transform: uppercase;
    background-color: var(--primary);
    width: 150px;
    display: flex;
    align-items: center;
    color: var(--white);
    font-size: 15px;
    margin-top: 2%;
    margin-left: 10%;
    text-decoration: none;
    color: var(--white);
}



@media (max-width: 425px) {
    section .allcard .card {
        width: 300px;

    }
}
</style>




<script>
import Subtitle from '@/Components/subtitle.vue'
export default {
    data: function () {
        return {
            // name: "Home page",
        }
    },
    props: {
        projects: {
            type: Array,
            default: []
        },
        btnclass: {
            type: String,
            default: ''
        },
    },
    // components: {
    //     Subtitle,
    // },
    // created(){
    //     console.log(this.projects);
    // }
};
</script>

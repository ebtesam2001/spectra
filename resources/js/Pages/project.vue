<template>
    <Navbar />
    <Title span="OUR" h1="PROJECTS" />
    <Projects :projects="projects" btnclass="btnclass"/>
    <Footer />
</template>

<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import Projects from '@/Components/projects.vue'
import Footer from '@/Components/footer.vue'
export default {
    data: function () {
        return {
            name: "Project page",
            // projects:[
            //     {
            //         id: 1,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },
            //     {
            //         id: 2,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },
            //     {
            //         id: 3,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },

            //     {
            //         id: 4,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },

            //     {
            //         id: 5,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },

            //     {
            //         id: 6,
            //         img: "/imgs/Rectangle 12@2x.svg",
            //         h2: "AEquipping the ICU & Laboratory Department",
            //         p: "Equipping the ICU & Laboratory Department in Marib Military Hospital funded by government"
            //     },

            // ],

        }
    },
    props: {
        projects: {
            type: Array,
            default: []
        }
    },
    components: {
        Navbar,
        Title,
        Projects,
        Footer,
    },
};
</script>


<style >
.btnclass{
    display: none;
}
#btnclass{
    display: none;
}
</style>


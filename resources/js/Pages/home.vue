<template>
    <Navbar />
    <Header :herosections="herosections" />
    <Card />
    <Abouttitle span="About" h1="Us" />

        <About
        :direction="index % 2 === 0 ? 'rtl' : 'ltr'"
                :textdir="index % 2 === 0 ? 'ltr' : 'ltr'"
                :image="about.image"
                :keys=" about.key"
                :section=" about.section"
                :content=" about.content"
            />

    <Choose />
    <Team :teams="teams" />
    <Business :category="category"/>
    <Subtitle span="OUR" h1="PROJECTS" />
    <!-- <Category :category="category" /> -->
    <Projects :projects="projects" />
    <News :news="news" />
    <Footer />

</template>


<script>
import Navbar from '@/Components/navbar.vue'
import Header from '@/Components/header.vue'
import Card from '@/Components/card.vue'
import Abouttitle from '@/Components/abouttitle.vue'
import About from '@/Components/about.vue'
import Choose from '@/Components/choose .vue'
import Team from '@/Components/team.vue'
import Business from '@/Components/business.vue'
import Subtitle from '@/Components/subtitle.vue'
import Projects from '@/Components/projects.vue'
import News from '@/Components/news.vue'
import Footer from '@/Components/footer.vue'
import Category from '@/Components/Category.vue'
export default {
    data: function () {
        return {
            name: "Home page",
            // abouts: [
            //     {
            //         img: "/imgs/about.png",
            //         h2: "view",
            //         span: "Over",
            //         p: "Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the needs of the local market especially within southern governorates ,and provide various business operations through....."
            //     },

            // ],
            // projects: [
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

            // ],
        }
    },
    components: {
        Navbar,
        Header,
        Card,
        Abouttitle,
        About,
        Choose,
        Team,
        Business,
        Subtitle,
        Projects,
        News,
        Footer,
    },
    props: {
        herosections: {
            type: Array,
            default: []
        },
        about: {
            type: Object,
            default: {}
        },
        teams: {
            type: Array,
            default: []
        },
        projects: {
            type: Array,
            default: []
        },
        news: {
            type: Array,
            default: []
        },
        category: {
            type: Array,
            default: []
        }
    },
    created(){
        console.log(this.about);
    }
};
</script>


<style></style>

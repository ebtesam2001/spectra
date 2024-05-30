<template>
    <Navbar />
    <Title span="About" h1="Us" />
    <!-- <About v-for="(item, index) in about" :key="index" :direction="index % 2 === 0
        ? 'ltr' : 'rtl'" :textdir="index % 2 === 0 ? 'ltr' : 'ltr'"  btnclass="btnclass"/> -->
        <About
                v-for="(about, index) in about"
                :key="about.id"
                :direction="index % 2 === 0 ? 'ltr' : 'rtl'"
                :textdir="index % 2 === 0 ? 'ltr' : 'ltr'"
                :image="about.image"
                :keys=" about.key"
                :section=" about.section"
                :content=" about.content"
            />
        <!-- <About :about="about"/> -->
    <Footer />
</template>


<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import About from '@/Components/about.vue'
import Footer from '@/Components/footer.vue'
import about from '@/Components/about.vue';
export default {
    data: function () {
        return {
            name: "about page",
            // abouts: [
            //     {
            //         img: "/imgs/about.png",
            //         h2: "view",
            //         span: "Over",
            //         p: "Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the needs of the local market especially within southern governorates ,and provide various business operations through....."
            //     },
            //     {
            //         img: "/imgs/about.png",
            //         h2: "view",
            //         span: "Over",
            //         p: "Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the needs of the local market especially within southern governorates ,and provide various business operations through....."

            //     },

            // ],
        }
    },
    props: {
        btnclass:{
            type:String,
              default:''
          },
          about: {
            type: Array,
            default: []
        }
    },
    components: {
        Navbar,
        Title,
        About,
        Footer,
    },
    // created(){
    //     console.log(this.about);
    // }
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


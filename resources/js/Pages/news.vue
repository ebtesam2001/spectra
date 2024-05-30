<template>
    <Navbar />
    <Title span="LATEST" h1="NEWS" />
    <Lastnews :news="news"/>
    <Footer />
</template>

<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import Lastnews from '@/Components/lastnews.vue'
import Footer from '@/Components/footer.vue'
export default {
    data: function () {
        return {
            name: "business page",

        }
    },
    props: {
        news: {
            type: Array,
            default: []
        }
    },
    components: {
        Navbar,
        Title,
        Lastnews,
        Footer,
    },
};
</script>

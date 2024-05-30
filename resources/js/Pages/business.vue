<template>
    <Navbar />
    <Title span="LINE OF " h1="UBUSINESS" />
    <!-- <Category :pharmaces="pharmaces" :food="food" :medical="medical"/> -->
    <Category :categories="categories"/>

    <Footer />
</template>

<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import Category from '@/Components/Category.vue'
import Footer from '@/Components/footer.vue'
export default {
    data: function () {
        return {
            name: "business page",
            
        }
    },
    props: {
        categories: {
            type: Array,
            default: []
        }
    },
    components: {
        Navbar,
        Title,
        Category,
        Footer,
    },
};
</script>

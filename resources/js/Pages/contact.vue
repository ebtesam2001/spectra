<template>
    <Navbar />
    <Contact/>
    <Footer />
</template>

<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import Contact from '@/Components/contact.vue'
import Footer from '@/Components/footer.vue'
export default {
    data: function () {
        return {
            name: "business page",

        }
    },
    components: {
        Navbar,
        Title,
        Contact,
        Footer,
    },
};
</script>

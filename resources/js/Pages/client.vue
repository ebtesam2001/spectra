<template>
    <Navbar />
    <Title span="OUR" h1="CLIENTS" />
    <client :clients="clients"/>
    <Footer />
</template>

<script >
import Navbar from '@/Components/navbar.vue'
import Title from '@/Components/title.vue'
import client from '@/Components/client.vue'
import Footer from '@/Components/footer.vue'
export default {
    data: function () {
        return {
            name: "business page",
        }
    },
    props: {
        clients: {
            type: Array,
            default: []
        }
    },
    components: {
        Navbar,
        Title,
        client,
        Footer,
    },
};
</script>

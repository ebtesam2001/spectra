<template>
    <section>
        <div class="text">
            <Subtitle span="Main" h1="Products Category" />
        </div>
        <div class="nav" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <!-- Food Supplements and Cosmetics -->
            <!-- Medical devices, Appliances and Supplie -->
            <!-- Pharmaceuticals and Biopharmaceuticals -->
            <a v-for="category in categories" :key="category"
            @click="showcategory(category.id)" :class="active ==category.id  ? 'active' : ''">{{ category.name }}</a>
            <!-- <a @click="showmedical" :class="active == 2 ? 'active' : ''"></a>
            <a @click="showpharmace" :class="active == 3 ? 'active' : ''"></a> -->
        </div>
        <img src="/imgs/Group 67.svg" alt="" class="imgs">
        <div class="allcard"  data-aos="fade-right" data-aos-duration="1500">
            <div class="product" v-for="product in product" :key="product">
                <img :src="product.image" alt="">
                <div class="clip">
                    <h1>{{ product.name }}</h1>
                    <a class="btn">
                        <h2>Read more</h2>
                        <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">
                    </a>
                </div>
            </div>

        </div>

        <!-- <div class="allcard" v-else-if="isfood" data-aos="fade-right" data-aos-duration="1500">
            <div class="product" v-for="f in food" :key="f">
                <img :src="f.img" alt="">
                <div class="clip">
                    <h1><span>{{ f.span }}</span>{{ f.h1 }}</h1>
                    <a class="btn">
                        <h2>Read more</h2>
                        <img src="/imgs/tabler-icon-arrow-rightt.svg" alt="">
                    </a>
                </div>
            </div>

        </div>

        <div class="allcard" v-else-if="ismedical" data-aos="fade-right" data-aos-duration="1500">
            <div class="product" v-for="m in medical" :key="m">
                <img :src="m.img" alt="">
                <div class="clip">
                    <h1><span>{{ m.span }}</span>{{ m.h1 }}</h1>
                    <a class="btn">
                        <h2>Read more</h2>
                        <img src="public/imgs/tabler-icon-arrow-rightt.svg" alt="">
                    </a>
                </div>
            </div>

        </div> -->
        <img src="/imgs/Group 43.png" alt="" class="imgss">
    </section>
</template>


<style scoped>
* {
    padding: 0;
    margin: 0;
}

.active {
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
    border: 1px solid var(--primary);
    height: 200px;
    margin-bottom: 20px;
}

section .allcard .product img {
    width: 100%;
    /* height: 116px; */
    margin-top: -4px;
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
    margin-top: -2%;
}

@media (max-width: 768px) {
    section .nav a {
        font-size: 15px;
    }
}

@media (max-width:465px) {
    section .nav a {
        font-size: 14px;
    }

    section .imgs {
        margin-left: 70%;
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




<script>
import Subtitle from '@/Components/subtitle.vue'
export default {

    data: function () {
        return {
            ismedical: false,
            isfood: false,
            ispharmace: true,
            active: 1,
            id:1,
            product:[]
        }
    },
    props: {
        pharmaces: {
            type: Array,
            default: []
        },
        food: {
            type: Array,
            default: []
        },
        medical: {
            type: Array,
            default: []
        },
        categories: {
            type: Array,
            default: []
        }
    },
    components: {
        Subtitle,
    },
    methods: {
        showcategory(id) {
            this.product=[];
            for(var i=0;i<this.categories.length;i++){
                for(var x=0;x<this.categories[i].product.length;x++){
                if(this.categories[i].product[x].category_id == id){
                    this.product.push(this.categories[i].product[x]);
                }
            }
            }
            this.active = id
        },
    },
    created(){
                for(var x=0;x<this.categories[0].product.length;x++){
                if(this.categories[0].product[x].category_id == this.categories[0].id){
                    this.product.push(this.categories[0].product[x]);
                }
            }

    }
};

</script>

<template >
    <div class="header ">
        <div class="aa" v-for="i in [currentIndex]" :key="i">
            <img :src="currentImg.image" data-aos="fade-left"/>
        </div>
        <div class="bottom_icon">
            <img class="arrow_right arrow" src="/imgs/chevron-right.svg" @click="prev" />
            <img class="arrow" src="/imgs/chevron-right.svg" @click="next" />
        </div>
        <div class="text" v-for="i in [currentIndex]" :key="i" data-aos="zoom-out">
            <h3>{{ currentImg.key }} </h3>
            <h4>{{ currentImg.section }}</h4>
        </div>
    </div>
</template>

<style scoped>
.header {
    height: 100vh;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.header .aa {
    object-fit: cover;
    /* opacity: 0.4; */
    width: 100%;
    height: 100%;
}

.header .aa>img {
    object-fit: cover;
    /* position: relative; */
    height: 100%;
    width: 100%;
}

.header .bottom_icon {
    height: 10vh;
    position: absolute;
    left: 10%;
    top: 40%;
    width: 80vw;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-align: center;
}

.header .bottom_icon .arrow {
    background-color: var(--primary);
}

.header .bottom_icon .arrow_right {
    transform: rotate(180deg);
    background-color: var(--primary);
}

.header .text {
    position: absolute;
    left: 18%;
    top: 50%;
    width: 40vw;
    color: var(--black);
    display: flex;
    flex-direction: column;
    width:500px;
}

.header .text h3,
h4 {
    margin: 4px 0;
    text-transform: uppercase;
    font-size: 28px;
}



@media (max-width:768px) {

.header .text h3,
h4 {
    font-size: 20px;
}
}
@media (max-width:425px) {

.header .text {
    font-size:14px;
    width:300px;

}

}

</style>

<script>
export default {
    name: "Slider",
    data() {
        return {
            // images: [
            //     { h3: 'Food & food ', h4: 'supplement', img: '/imgs/home.png' },
            //     { h3: 'Medical devices,', h4: 'appliances and supplies', img: '/imgs/home1.svg' },
            //     { h3: 'Iso 9001 : 2015 certified &', h4: 'gdp autoed', img: '/imgs/image 1.svg' },
            //     { h3: 'pharmaceuticals and', h4: 'biopharmaceuticals', img: '/imgs/image 1.svg' },
            //     { h3: 'we do it all,', h4: 'for you', img: '/imgs/image 1.svg' },

            //     // "/imgs/home.png",
            //     // "/imgs/home1.svg",
            //     // "/imgs/top-view-cucumber-slices-with-apple-capsules 1 (2).svg",
            //     // "/imgs/home2.svg",
            //     // "/imgs/home1.svg",
            //     // "/imgs/home2.svg",
            // ],
            timer: null,
            currentIndex: 0,
            btnShow: true,
            menuShow: false,
        };
    },
    props: {
        // span: {
        //     type: String,
        //     default: ''
        // },
        // h1: {
        //     type: String,
        //     default: ''
        // },
        herosections: {
            type: Array,
            default: []
        }
    },

    mounted: function () {
        // this.startSlide();
    },
    methods: {
        startSlide: function () {
            this.timer = setInterval(this.next, 4000);
        },
        currentSlide1: function () {
            this.currentIndex = 0;
            // let d=document.getElementById("d1").style.backgroundColor=="white";
            // d.style. == "black";
        },
        currentSlide2: function () {
            this.currentIndex = 1;
        },
        currentSlide3: function () {
            this.currentIndex = 2;
        },
        next: function () {
            this.currentIndex += 1;
        },
        prev: function () {
            this.currentIndex -= 1;
        }

    },
    computed: {
        currentImg: function () {
            return this.herosections[Math.abs(this.currentIndex) % this.herosections.length];
        }
    },
};
</script>

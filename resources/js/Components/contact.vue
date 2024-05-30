<template>
    <section>
        <div class="left">
            <div class="text">
                <Subtitle span="Contact" h1="Us" />
            </div>
            <form data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <p data-aos="fade-up">company, which was founded. </p>
                <input type="text" value="Name">
                <input type="email" value="Email">
                <input type="text" value="Massage" class="msg">
                <input type="submit" @click="addcontact"  value="SEND" class="btn">
            </form>
        </div>

        <div class="right">
            <img src="public/imgs/Group 70.svg" alt="" class="imgs">
            <!-- <img src="public/imgs/OBJECTS.png" alt="" class="map"> -->
            <div class="bacg">
                <GoogleMMap />
            </div>


        </div>
    </section>
</template>


<style scoped>
* {
    margin: 0;
    padding: 0;
}

section {
    display: flex;
    justify-content: space-between;
    height: 800px;
    padding-top: 5%;
}

section .left {
    margin-top: 5%;
    margin-left: 5%;
}

section .left .text {
    /* align-items: start; */
    /* background-color: blue; */
    display: flex;
}

section .left form {
    display: flex;
    flex-direction: column;
    margin-top: -5%;
}

section .left form input {
    margin-top: 5%;
    width: 500px;
    height: 60px;
    color: #9E9E9E;
}
section .left form p{
    margin-top: 5%;
}
section .left form .msg {
    height: 170px;
    align-self: start;
}

section .left form .btn {
    background-color: var(--primary);
    color: var(--white);
}

section .right {
    margin-top: 4%;
    display: flex;
    flex-direction: column;
    width: 60%;
    align-items: end;

}

section .right .imgs {
    width: 120px;
}

section .right .bacg {
    width: 500px;
    height: 500px;
    background-color: var(--primary);
    margin-right: 7%;
    position: relative;
    margin-top: 8%;
}



@media(max-width: 1024px) {
    section {
        height: 700px;
    }

    section .left form input {
        width: 350px;
    }

    section .right {
        width: 50%;
    }

    section .right .bacg {
        width: 400px;
        height: 400px;
        margin-right: 10%;
        /* margin-top: -2%; */
    }

    section .right .imgs {
        width: 120px;
    }
}

@media(max-width: 768px) {
    section {
        padding-top: 10%;
    }

    section .left form input {
        width: 100%;
    }

    section .right .bacg {
        width: 400px;
        height: 400px;
        margin-right: 10%;
    }

    section .right .imgs {
        width: 90px;
    }
}

@media(max-width: 425px) {
    section {
        height: 1200px;
        flex-wrap: wrap;
    }

    section .left{
        margin-left: 10%;
        margin-top:10%;
    }
    section .left form p{
    margin-top: 3%;
}
    section .left form input {
        width: 350px;
    }
    section .right  {
        margin-left:50%;
    }
    section .right .bacg {
        width: 350px;
        height: 400px;
        margin-right: 5%;
    }

    section .right .imgs {
        width: 80px;
    }
}

@media(max-width: 375px) {
    section .left{
        margin-top:25%;
    }
    section .left form input {
        width: 300px;
    }

    section .right .bacg {
        width: 200px;
        height: 400px;
        margin-right: 5%;
    }
}
</style>



<script >
import Subtitle from '@/Components/subtitle.vue'

import GoogleMMap from '@/Components/googleMMap.vue'
import axios from 'axios';

export default {

    data() {
        return {
            search: '',
            arr_ar: [],
            arr_en: [],
            name: '',
            email: '',
            message: "",
            msg: false
        }
    },
    components: {
        Subtitle,
        GoogleMMap,
    },
    methods: {
        addcontact() {
            const form = new FormData();
            form.append("name", this.name);
            form.append("email", this.email);
            form.append("message", this.message);
            axios
                .post(route("addcontact.store"), form)
                .then((r) => {
                    this.msg = true;
                    this.name='';
                    this.email='';
                    this.message='';
                    setInterval(this.startSlide, 4000);
                })
                .catch((er) => {
                });

        },
        startSlide() {
            this.msg = false
        },
    }
};

</script>

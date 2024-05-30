<template>
    <section>
        <Subtitle span="WHY CHOOSING " h1="SPECTRA ?" />
        <div class="card" data-aos="zoom-in">
            <img src="/imgs/Group 50.svg" alt="" class="imgleft">
            <div class="all">
                <div class="continer" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="/imgs/num1.png" alt="" class="imggss">
                    <div class="withup ">
                        <h6><span>Overvie</span>w</h6>
                        <p>Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the
                            needs. </p>
                        <img src="/imgs/circle.png" alt=""  class="imggss">
                    </div>
                </div>

                <div class="continer" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="/imgs/num2.png" alt=""  class="imggss">
                    <div class="withup ">
                        <h6><span>Overvie</span>w</h6>
                        <p>Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the
                            needs. </p>
                        <img src="/imgs/circle.png" alt=""  class="imggss">
                    </div>
                </div>

                <div class="continer" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="/imgs/num3.png" alt=""  class="imggss">
                    <div class="withup ">
                        <h6><span>Overvie</span>w</h6>
                        <p>Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the
                            needs. </p>
                        <img src="/imgs/circle.png" alt=""  class="imggss">
                    </div>
                </div>

                <div class="continer" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="/imgs/num4.png" alt=""  class="imggss">
                    <div class="withup ">
                        <h6><span>Overvie</span>w</h6>
                        <p>Spectra for Trading (SGT) is a leading Yemeni company, which was founded in Aden to fulfill the
                            needs. </p>
                        <img src="/imgs/circle.png" alt=""  class="imggss">
                    </div>
                </div>



            </div>
            <div class="imgright">
                <img src="public/imgs/Group 42.svg" alt="">
            </div>

        </div>

    </section>
</template>

<style scoped>
* {
    padding: 0;
    margin: 0;
}

section {
    background-color: var(--background);
    padding: 30px 0;
    width: 100%;
    height: 650px;
}


section h1 span {
    border-bottom: 5px solid var(--primary);
    color: var(--black);
}

section .card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 400px;
}

section .card .imgleft {
    margin-top: -14%;
}

section .card .imgright {
    margin-top: 23%;
}

section .card .all {
    width: 1000px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-left: 7%;
    flex-wrap: wrap;
}

section .card .all .continer {
    width: calc((80% - 20px)/4);
    text-align: center;
    align-items: center;
    border: 1px solid var(--primary);
    margin-top: 12%;
    background-color: var(--white);

}


section .card .all .continer img {
    margin-top: -17px;
    margin-left: 15%;
}

section .card .all .continer .withup {
    width: 100%;
    align-items: center;
}

section .card .all .continer .withup h6 {
    font-size: 21px;
    color: var(--black);
    margin-bottom: 6px;
    /* padding-left:10px; */
}

section .card .all .continer .withup h6 span {
    border-bottom: 2px solid var(--primary);
    color: var(--black);
}

section .card .all .continer .withup p {
    font-size: 16px;
    color: var(--black);
    text-transform: capitalize;
}

section .card .all .continer .withup img {
    width: 40px;
    height: 40px;
    margin-top: 10px;
    margin-left: 40%;
}

@media(max-width: 1226px) {
    section .card .all {
        display: flex;
        flex-wrap: wrap;
    }

    section .card .all .continer img {
        margin-top: -13px;
        width: 100px;
    }

    section .card .all .continer .withup h6 {
        font-size: 19px;
        color: var(--black);
        margin-bottom: 6px;
    }

    section .card .all .continer .withup p {
        font-size: 13px;
        padding: 5px;
    }
}

@media(max-width: 768px) {
    section  {
        height: 650px;
    }
    section .card {
        height: 400px;
    }

    section .card .imgleft {
        width: 100px;
        margin-top: -25%;
    }

    section .card .imgright {
        margin-top: 2%;
        width: 10px;
        margin-right:10%;
    }

    section .card .imgright img {
        width: 40px;
    }

    section .card .all .continer {
        margin-top: 7%;
        /* height: 100px; */
        width: 200px;
    }

    section .card .all {
        width: 100%;
        margin-top: 10%;
        margin-right:10% ;
    }


    section .card .all .continer .withup h6 {
        font-size: 1rem;
    }

    section .card .all .continer .withup p {
        /* display: none; */
    }
}

@media(max-width: 425px) {
    section  {
        height: 750px;
    }
    section .card .imgleft {
        width: 90px;
        margin-top: 2%;
        margin-right: 60%;
    }

    section .card {
        flex-direction: column;
        height: 600px;
    }

    section .card .all {
        width: 100%;
        margin-top: -7%;
    }

    section .card .imgright {
        margin-left: 100%;
        margin-top: -5%;
    }
    section .card .all .continer  {
        width: 170px;
        margin-left: 1%;
        margin-top: 10%;
    }

    section .card .all .continer img {
        margin-top: -7px;
        width: 50px;
    }

    section .card .all .continer .withup h6 {
        font-size: 14px;
        margin-right: 4px;
    }
}

@media(max-width: 325px) {
    section  {
        height: 850px;
    }
    section .card .imgleft {
        width: 90px;
        margin-top: 2%;
        margin-right: 60%;
    }

    section .card {
        flex-direction: column;
        /* margin-right: 6%; */
    }

    section .card .all {
        width: 100%;
        margin-top: -7%;
    }

    section .card .imgright {
        margin-left: 100%;
        margin-top: -5%;
    }
    section .card .all .continer  {
        width: 170px;
        margin-left: 1%;
        margin-top: 10%;
    }

    section .card .all .continer img {
        margin-top: -7px;
        width: 50px;
    }

    section .card .all .continer .withup h6 {
        font-size: 14px;
        margin-right: 4px;
    }
}


</style>
<script>
import Subtitle from '@/Components/subtitle.vue'
export default {

    props: {
        span: {
            type: String,
            default: ''
        },
        h1: {
            type: String,
            default: ''
        },
    },
    components: {
        Subtitle,
    },
};
</script>


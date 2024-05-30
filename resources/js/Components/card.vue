<template>
    <section>
        <div class="blur">

    </div>
    <div class="all"  data-aos="zoom-out-up">
            <div class="continer ">
                <div class="borderleft">
                    <img src="/imgs/profile-2user.svg" alt="">
                    <h1>3</h1>
                    <p>Our Subsidiaries</p>
                </div>
            </div>
            <div class="continer">
                <img src="/imgs/group.svg" alt="">
                <div class="borderleft">
                    <h1>15</h1>
                    <p>OYears Of Experience</p>
                </div>

            </div>
            <div class="continer">
                <img src="/imgs/messages.svg" alt="">
                <div class="borderleft">
                    <h1>54</h1>
                    <p>Trusted Partners</p>
                </div>

            </div>
            <div class="continer ">
                <img src="/imgs/personalcard.svg" alt="">
                <h1 class="left">100+</h1>
                <p>Happy Clients</p>
            </div>


        </div>
    </section>
</template>


<style scoped>
section {
    width: 100%;
    height: 270px;
    display: flex;
    justify-content: center;
    top: 76%;
    z-index: 998;
    position: absolute;
}
.blur{
    background-color: #378a8ac0;
    filter: blur(6px);
    width: 900px;
    height: 270px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    position: relative;
}
section .all {
    background-color: #378a8a50;
  /* -webkit-filter: blur(3px); */
    width: 900px;
    height: 270px;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    position: absolute;
}

/* section .all::after{
filter: blur(8px);
} */

section .all .continer {
    padding: 20px 10px;
    position: relative;
    width: calc((100% - 30px) / 4);
    /* background-color: aquamarine; */
}

section .all .borderleft::after {
    content: "";
    position: absolute;
    top: 50px;
    right: 0;
    width: 2px;
    height: 65%;
    background-color: #FFF;
}

section .all .continer img {
    width: 100px;
    height: 90px;
    margin: 0 auto;
    display: flex;
}

section .all .continer h1 {
    display: flex;
    font-size: 4rem;
    margin: 10px 80px;
    color: var(--white);
}

section .all .continer .left {
    margin: 10px 50px;
}

section .all .continer p {
    display: flex;
    justify-content: center;
    font-size: 18px;
    margin: 2 20px;
    color: var(--white);
}

@media (max-width: 1124px) {
    section {
        top: 82%;
    }

    section .all {
        width: 900px;
        height: 200px;
    }

    section .all .continer h1 {
        font-size: 3rem;
    }

    section .all .continer p {
        font-size: 15px;
    }

    section .all .continer img {
        width: 80px;
        height: 60px;
    }

    section .all .borderleft::after {
        height: 47%;
    }
}

@media (max-width: 1024px) {
    .blur{
    height: 200px;
    width: 700px;
}
    section .all {
        flex-wrap: wrap;
    }

    section .all {
        width: 700px;
        height: 200px;
    }

    section .all .continer h1 {
        font-size: 2rem;
        margin: 10px 60px;
    }

    section .all .continer .left {
        margin: 10px 40px;
    }

    section .all .continer p {
        font-size: 13px;
    }
}


@media (max-width: 784px) {
    .blur{
    height: 150px;
    width: 500px;
}
    section .all {
        width: 500px;
        height: 150px;
    }

    section .all .continer h1 {
        font-size:30px;
        margin: 10px 30px;
    }

    section .all .continer .left {
        margin: 10px 10px;
    }

    section .all .continer p {
        font-size: 8px;
    }

    section .all .continer img {
        width: 60px;
        height: 40px;
    }

}

@media (max-width: 661px) {
    section .all {
        display: none;
    }
    .blur{
        display: none;
}



}
</style>

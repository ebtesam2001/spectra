<template>
    <section>
        <div :dir="direction">
            <figure>
                <img :src="image" alt="" class="imgs" />
                <div :dir="textdir" class="text">
                    <h2>
                        <span>{{ keys }}</span>
                        {{ section  }}
                    </h2>
                    <p>{{ content }}</p>
                    <!-- <router-link to="/about" :id="btnclass" class="btn">
                        Read more
                        <img
                            src="/imgs/tabler-icon-arrow-right.svg"
                            alt=""
                        />
                    </router-link> -->
                </div>
            </figure>
        </div>
    </section>
</template>

<style scoped>
section {
    height: 300px;
}

section figure {
    color: var(--black);
    display: flex;
    justify-content: space-between;
}

section figure div h2 span {
    border-bottom: 2px solid var(--primary);
    color: var(--black);
}

section figure .text {
    margin: 10px 60px;
}

section figure .text h2 {
    font-size: 30px;
}

section figure .text p {
    font-size: 20px;
}

section figure .text .btn {
    padding: 10px;
    text-transform: uppercase;
    background-color: var(--primary);
    width: 150px;
    display: flex;
    align-items: center;
    color: var(--white);
    font-size: 15px;
    float: right;
    text-decoration: none;
}

@media (max-width: 1024px) {
    section figure .text h2 {
        font-size: 30px;
    }

    section figure .text p {
        font-size: 20px;
    }
}

@media (max-width: 768px) {
    section {
        height: 600px;
    }

    section figure {
        flex-wrap: wrap;
        justify-content: center;
    }

    section figure .imgs {
        width: 500px;
        height: 300px;
    }

    section figure .text .btn {
        width: 130px;
    }

    section figure .text .btn img {
        width: 15px;
    }

    section figure .text h2 {
        font-size: 26px;
    }

    section figure .text p {
        font-size: 18px;
    }
}

@media (max-width: 425px) {
    section figure .imgs {
        width: 300px;
        height: 200px;
    }

    section figure .text .btn {
        width: 130px;
    }

    section figure .text .btn img {
        width: 15px;
    }

    section figure .text p {
        font-size: 16px;
    }
}
</style>

<script>
export default {
    data: function () {},
    props: {
        // content:{h6,h3,paragraph,img},
        // h2: {
        //     type: String,
        //     default: "",
        // },
        // span: {
        //     type: String,
        //     default: "",
        // },
        // p: {
        //     type: String,
        //     default: "",
        // },
        // img: {
        //     type: String,
        //     default: "",
        // },
        direction: {
            type: String,
            default: "rtl",
        },
        textdir: {
            type: String,
            default: "rtl",
        },
        btnclass: {
            type: String,
            default: "",
        },
        keys: {
            type: String,
            default: "",
        },
        content: {
            type: String,
            default: "",
        },
        section: {
            type: String,
            default: "",
        },
        image: {
            type: String,
            default: "",
        },
    },
    // created(){
    //     console.log(this.about);
    // }
};
</script>

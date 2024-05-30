
<template>
    <div class="title" data-aos="zoom-out-up">
            <h1><span>{{ span }}</span> {{h1}}</h1>
        </div>
</template>


<style scoped>
.title {
    text-align: center;
}

 .title h1 {
    font-size: 40px;
    text-transform: uppercase;
    font-weight: bolder;
    color: var(--primary);
}

.title h1 span {
    /* border-bottom: 5px solid #3A9494; */
    color: black;
    position: relative;
}
.title h1 span::after {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    border-bottom: 5px solid #3A9494;
}
@media (max-width: 768px) {
    .title h1 {
    font-size: 30px;
}
}
@media (max-width: 425px) {
    .title h1 {
    font-size: 20px;
}
.title h1 span::after {
    content: "";
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    border-bottom:3px solid #3A9494;
} 
}
</style>

<script>
export default {
    props:{
        span:{
            type:String,
            default:''
        },
        h1:{
            type:String,
            default:''
        },
    }
};
</script>
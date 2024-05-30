<template>
    <div class="first" data-aos="zoom-in-left">
            <h1><span>{{ span }}</span> {{h1}}</h1>
            <img src="public/imgs/Group 42.svg" alt="">
        </div>
</template>


<style scoped>
.first {
    margin-top:5.3%;
    padding: 1% 12% ;
    display: flex;
    justify-content: space-between;
    /* background-color: #3a949410; */
    border-bottom: 6px solid var(--primary);
}

 .first h1 {
    font-size: 40px;
    text-transform: capitalize;
    font-weight: bolder;
    color: #3A9494;
}

.first h1 span {
    border-bottom: 5px solid #3A9494;
    color: black;
}
@media (max-width: 1024px) {
    .first  {
        margin-top:7.6%;
    }
    
}

@media (max-width: 768px) {
    .first  {
        margin-top:10.1%;
    }
    .first img {
        width: 80px;

        
    }
    
}
@media (max-width: 425px) {
    .first  {
        margin-top:18.9%;
    }
    .first img {
        width: 50px;
    }
    .first h1 {
    font-size: 44px;
}}
@media (max-width: 375px) {
    .first  {
        margin-top:21%;
    }
    .first img {
        width: 50px;
    }
    .first h1 {
    font-size: 44px;
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
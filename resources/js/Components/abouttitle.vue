<template>
    <div class="first">
        <h1><span>About</span> Us</h1>
        <img src="/imgs/Group 42.svg" alt="">
    </div>
</template>
<style scoped>
.first {
    top: 0;
    padding: 10% 7% 0;
    display: flex;
    justify-content: space-between;
    margin-top: 3%;
}

.first h1 {
    font-size: 40px;
    text-transform: capitalize;
    font-weight: bolder;
    color: var(--primary);
}

.first h1 span {
    border-bottom: 5px solid var(--primary);
    color: var(--black);
}

@media (max-width: 768px) {
    .first img {
        width: 80px;
    }

}

@media (max-width: 425px) {
    .first h1 {
    font-size: 30px;
}

.first img {
        width:60px;
    }

}
</style>

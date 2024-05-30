<template>
    <div class="navbar" >
    <nav>
        <div class="logo">
            <img src='/imgs/logo-light-1 1.svg' alt="">
        </div>
        <div  class="menu-icon" @click="toggleMenu">☰</div>
        <ul>
            <li><a href="/" :class="path=='/'?'active':''"> Home</a></li>
            <li><a href="/about" :class="path=='/about'?'active':''"> ABOUT US</a></li>
            <li><a href="/project" :class="path=='/project'?'active':''"> OUR GROUP</a></li>
            <li><a href="/business" :class="path=='/business'?'active':''">Business</a></li>
            <li><a href="/client" :class="path=='/client'?'active':''">Clients</a></li>
            <li><a href="/news" :class="path=='/news'?'active':''">News</a></li>
            <li><a href="/contact" :class="path=='/contact'?'active':''">Contant Us</a> </li>
        </ul>
    </nav>
</div>
</template>


<script>
export default {
    name: 'Navbar',

    data (){
        return{
            path:window.location.href
        }
    },
    methods: {
        toggleMenu() {
            var menu = document.querySelector('ul');
            menu.classList.toggle('activeUL');
        }
    },
    created(){
        console.log(window.location.href)
    }

}
</script>



<style scoped>

body,
h1,
h2,
ul,
li {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
}
.active{
    background-color: var(--primary);
    height: 100%;
    display: flex;
    align-items: center;
    padding: 0 10px;
    color: #fff;
    position: relative;
}
.active:before {
    content: "+";
    display: block;
    width: 20px;
    height: 20px;
    position: absolute;
    top:0;
    left:40%;

}
.navbar{
position: relative;
top: 0;
left: 0;
z-index: 999;
}
/* Navbar styles */
nav {
    /* background-image: linear-gradient(to right, #ffffff, #3A949433); */
    background-color: #9b8d8d7e;
    /* padding: 10px; */
    height: 80px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    border-top: 3px solid var(--primary);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
}

nav .menu-icon {
    font-size: 30px;
    color: var(--primary);
    cursor: pointer;
    display: none;
}

nav ul {
    list-style: none;
    display: flex;
    height: 100%;

}

nav ul li {
    margin-right: 20px;
    /* padding: 20px; */
    display: flex;
    justify-content: center;
    align-items: center;
}

nav ul li a {
    text-decoration: none;
    color: #000;
    /* font-weight: bold; */
    font-size: 18px;
    text-transform: uppercase;
}

/* Media query for responsiveness */

@media screen and (max-width: 938px) {
    .active{
        background-color: transparent;
        color: #000;
    }
    .active:before {
    content: "";
}
    nav {
        justify-content: space-between;
        padding: 0 4%;
    }

    nav .menu-icon {
        display: block;
    }

    nav ul {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        height: auto;
        background-image: linear-gradient(to right, #ffffff, #0ea0a096);
        z-index: 99;
        animation: slideIn 0.5s ease-in-out;
    }

    nav ul li {
        margin: 0;
        text-align: center;
        margin-top: 30px;
    }

    nav ul.activeUL {
        display: flex;

    }
}


</style>


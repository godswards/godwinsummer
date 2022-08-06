<template>


        <nav class="navbar navbar-expand-lg bg-white ">
        <a class= "navbar-brand margin" href="#" style="color:black" >Godswards</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse design" id="navbarNav">
            <ul class="navbar-nav">


            <li class="nav-item whoops">
                <Link class="nav-link"  :class="{'selected': $page.component=='Home'}" href="/">Home</Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link" :class="{'selected': $page.component=='Price'}" href="/price">Laptops</Link>
            </li>

            <li class="nav-item">
                <Link class="nav-link" :class="{'selected': $page.component=='About'}" href="/about">About Us</Link>
            </li>
            <li class="nav-item">
                <Link class="nav-link" :class="{'selected': $page.component=='Contact'}" href="/contact">Contact Us</Link>
            </li>


            </ul>
        </div>
    </nav>

<section class="container p-4 rounded-3 my-5" >
    <slot />
    

</section>
<footer class="white text-center mt-5  bg-light">
    Copyright &copy; 2022. All rights reserved.
</footer>



</template>
<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
.white {
    
    padding: 30px;
}
/* section {
} */
h1 {
    color: white;
}
.margin {
    margin-left: 100px;
}

.selected {
    color: black;
    font-weight: bold;
}
.design {
    display: flex;
    justify-content: end;
}
h1 {
    color: white;
}
hr {
    color: white;
}


</style>
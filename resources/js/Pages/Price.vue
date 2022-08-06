<template>

    <h1 class="text-center">Laptop</h1>
    
    <div class="row d-flex justify-content-center align-content-center line">
        <div class="asd card" v-for="price in prices" :key="price.id">
            <div class="column card-header bg-danger text-center">
                <h4>${{ price.price }}</h4>
            </div>
            <div class="card-body">
                <h6>Brands</h6>
                <ul>
                    <li v-for="brand in price.brands" :key="brand.id">
                        {{ brand.name }} {{ brand.specs }}
                    </li><br>
                </ul>
               
            </div>
        </div>
    </div>



</template>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout,
    props: {
        prices: Array
    }
}
</script>

<style scoped>
.card {
    width: 375px;
}
.instruction {
    list-style: numbers;
}


h1 {
    color: white;
}
.asd {
    margin: 100px auto;
    background-color: rgba(255, 255, 255,0.6);
}
.line {
    margin: auto;
    width: 90%;
    /* border: 3px solid green; */
    padding: 10px;
}
hr {
    border-top: 20px dashed white;
}
</style>
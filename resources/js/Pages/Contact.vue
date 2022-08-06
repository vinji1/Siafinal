<template>
    <h1>Contact Us</h1>
    <hr>
    <div class="contact-body">

        <strong>Xbox Games Co.</strong><hr>
        #315 New Hope, United States <br>
        Telefax: 890-117-277 <br>
        Mobile: +63 950-440-5816
    
    </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default {
    layout: Layout

}


</script>

<style scoped>
.contact-body {
    padding: 5px;
    background-color:rgb(100, 98, 98);
    color:#fff;
    width: 300px;
    height: auto;
    text-align: center;
}
</style>
<template>
    <h1>Games</h1>
    <hr>

    <div class="d-flex justify-content-between">
        <div class="card mb-3" v-for="game in games" :key="game.id" style="width:45%;">
            <div class="card-header" style="background-color: red; color: #fff">
                <h2>{{ game.title }}</h2>
                <h5>{{ game.type }}</h5>
            </div>
            <div class="card-body">
                <h6>Game Details</h6>
                <ul v-for="game_detail in game.game_details" :key="game_detail.id">                  
                        <span style="font-weight: bold">Description of the game:</span> {{ game_detail.description }} <hr><span style="font-weight: bold">Game size:</span> {{ game_detail.game_size }}
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from 'vue'
import Layout from '../Shared/Layout.vue'

</script>


<script>
export default {
    layout: Layout,
    props: {
        games: Array
    }
}
</script>
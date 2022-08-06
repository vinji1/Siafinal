<template>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:red">
  <div class="container">
    <a class="navbar-brand" href="#">Xbox Games</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Game'}" href="/game">Game Details</Link>
        </li>
        <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'About'}" href="/about">About Us</Link>
        </li>
                <li class="nav-item">
            <Link class="nav-link" :class="{'selected': $page.component == 'Contact'}" href="/contact">Contact Us</Link>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container mt-5 p-4 rounded-4 shadow my-5" style="min-height: 800px;">
    <slot />
</section>
    <footer class="text-center my-3 text-dark">
    Copyright &copy; 2022. All rights reserved.
    </footer>
</template>

<script setup>
import {Link} from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section {
    background-color: rgb(246, 248, 245);
    opacity: 0.7;
}
.selected {
    color: rgb(2, 2, 2);
    border-bottom: 1px solid rgb(248, 246, 246);
}
</style>

<template>
    <div class="body">
	    <camo-navbar></camo-navbar>
	    <blog-list></blog-list>
         <router-view></router-view>
    </div>
</template>

<script>
    export default {
        mounted() {
        }
    }
</script>
<style>
.body {
	background-color:black;
}
</style>

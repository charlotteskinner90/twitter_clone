<template>
    <div id="app" class="app">
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: 'app'
    }
</script>

<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto');
	body {
		background: #0F2027;  /* fallback for old browsers */
		background: -webkit-linear-gradient(to top, #2C5364, #203A43, #0F2027);  /* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to top, #2C5364, #203A43, #0F2027); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		font-family: 'Roboto', sans-serif;
	}
	.container {
		max-width: 500px;
		width: 92%;
		margin: 0 auto;
	}
	.container h1 {
		color: #fff;
	}

	.tweet-container {
		width: 100%;
		display: inline-block;
	}
</style>

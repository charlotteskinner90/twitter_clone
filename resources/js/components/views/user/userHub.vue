<!--
    // This was generatd as part of the laravel/vue github repo
    // This is safe to remove if you do not require it.
    // laravel-vue-git-code
 -->

<template>
    <div>
        <userName></userName>
    </div>
</template>

<script>
    import userName from './userName';

	export default {
		name: "userHub",
        components: {userName},
        data () {
            return {
                menuOptions: [],
                navSlide: false,
                loggedIn: false
            }
        },
	}
</script>

<style scoped>

</style>

<template>
		<div>
			<likes></likes>
			<retweets></retweets>
		</div>
</template>

<script>
	import Retweets from "./retweets";
	export default {
		name: "likes",
		components: {Retweets}
	}
</script>

<style scoped>

</style>

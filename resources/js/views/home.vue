<template>
	<div class="container">
		<h1>Latest tweets</h1>
		<div class="tweet-container">
			<template v-for="tweet in tweets">
				<tweet v-bind:user_tweet="tweet"></tweet>
			</template>
		</div>
	</div>
</template>

<script>
	import tweet from '../components/tweets/tweet';

	export default {
		name: "home",
		components: {
			tweet
		},
		data () {
			return {
				tweets: []
			}
		},
		created() {
			let url = `/getTweets/`;
			axios.get(url)
				.then((response) => {
					this.tweets = JSON.parse(JSON.stringify(response.data));
				})
		}
	}
</script>

<style scoped>
</style>

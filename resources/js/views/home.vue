<template>
	<div class="tweet-container">
		<div class="tweet" v-for="tweet in tweets">
			<p>{{tweet.body}}</p>
		</div>
	</div>
</template>

<script>
	export default {
		name: "home",
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
	.tweet-container {
		max-width: 600px;
		width: 92%;
		margin: 0 auto;
	}
	.tweet {
		background-color: #fff;
		width: 500px;
		float: left;
		padding: 10px 15px;
		margin: 10px 0;
		border-radius: 4px;
	}
</style>

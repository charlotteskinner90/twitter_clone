<template>
	<div class="container">
		<h1>Tweets by @{{handle}}</h1>
		<router-link class="return-to-homepage" :to="{ name: 'home' }"> < Back to homepage</router-link>
		<div class="tweet-container">
			<template v-for="tweet in tweets">
				<tweet v-bind:user_tweet="tweet"></tweet>
			</template>
		</div>
	</div>
</template>


<script>
	import tweet from '../../components/tweets/tweet';

	export default {
		name: "profile",
		components: {
			tweet
		},
		data () {
			return {
				tweets: [],
				handle: this.$route.query.handle
			}
		},
		created() {
			let url = `/getTweets/${this.handle}`;
			axios.get(url)
				.then((response) => {
					this.tweets = JSON.parse(JSON.stringify(response.data));
				})
		}
	}
</script>

<style scoped>
	.container {
		max-width: 600px;
		width: 92%;
		margin: 0 auto;
	}
	.container h1 {
		color: #fff;
	}
	.return-to-homepage {
		color: #FFFFFF;
		text-decoration: none;
		margin-bottom: 10px;
	}
	.return-to-homepage:hover {
		text-decoration: underline;
	}
	.tweet {
		position: relative;
		background-color: #fff;
		width: 500px;
		float: left;
		padding: 20px 15px 10px;
		margin: 10px 0;
		border-radius: 4px;
		font-size: 14px;
	}
	.tweet-date {
		position: absolute;
		right: 15px;
		top: 10px;
	}
	.tweet-handle {
		position: absolute;
		left: 15px;
		top: 10px;
	}
</style>

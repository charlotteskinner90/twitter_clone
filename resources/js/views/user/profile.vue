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
	.return-to-homepage {
		color: #FFFFFF;
		text-decoration: none;
		margin-bottom: 10px;
	}
	.return-to-homepage:hover {
		text-decoration: underline;
	}
</style>

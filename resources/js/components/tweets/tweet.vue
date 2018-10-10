<template>
	<div class="tweet">
		<span class="tweet-handle">
			<router-link :to="{ name: 'profile', query: { handle: user_tweet.handle }}">@{{user_tweet.handle}}</router-link>
		</span>
		<i class="tweet-date" :title=user_tweet.updated_at>
			{{user_tweet.age}} ago
		</i>
		<p>{{user_tweet.body}}</p>
	</div>
</template>

<script>
	export default {
		name: "tweet",
		props: ['user_tweet'],
		data () {
			return {
				tweet: this.user_tweet
			}
		},
	}
</script>

<style scoped>
	.tweet {
		position: relative;
		background-color: #fff;
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

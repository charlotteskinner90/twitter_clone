<template>
    <div>
			<template v-for="user in users">
        <h1>{{user.first_name}} {{last_name}}</h1>
        <p>Age: {{user.age}}</p>
        <p><em>Email: {{user.email}}</em></p>
				<hr />
			</template>
    </div>
</template>

<script>

	export default {
		name: "userName",
        data () {
            return {
            	users: []
            }
        },
        created() {
            axios.get('/getUsers')
            .then((response) => {
                this.users = JSON.parse(JSON.stringify(response.data));
            })
        }
	}
</script>

<style scoped>

</style>

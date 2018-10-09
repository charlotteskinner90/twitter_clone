<!--
    // This was generatd as part of the laravel/vue github repo
    // This is safe to remove if you do not require it.
    // laravel-vue-git-code
 -->

<template>
    <div>
        <h1>{{firstName}} {{lastName}}</h1>
        <p>Age: {{age}}</p>
        <p><em>Email: {{email}}</em></p>
    </div>
</template>

<script>

	export default {
		name: "userName",
        data () {
            return {
                firstName: "Jane",
                lastName : "Doe",
                age      : 35,
                email    : "jdoe35@example.com"
            }
        },
        created() {
            axios.get('/getUser')
            .then((response) => {
                let result = JSON.parse(JSON.stringify(response.data));
                this.firstName = result.firstName;
                this.lastName  = result.lastName;
                this.age       = result.age;
                this.email     = result.email;
            })
        }
	}
</script>

<style scoped>

</style>

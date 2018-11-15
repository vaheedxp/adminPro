<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Users Component</div>

                    <div class="card-body">
                        <table class="table table-responsive">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Type</td>
                                <td>Bio</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="u in users">
                                    <td>{{ u.id }}</td>
                                    <td>{{ u.name }}</td>
                                    <td>{{ u.email }}</td>
                                    <td>{{ u.tyoe }}</td>
                                    <td>{{ u.bio }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            users: []
        }
    },
    methods: {
        loadUser() {
            axios.get("./api/user").then(({data})=>(this.users = data));
        },
        createUser() {
            this.form.post('api/user');
        }
    },
    created() {
        this.loadUser();
    }
}
</script>

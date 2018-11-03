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
                                <td>Modify</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="user in users" :key="user.id">
                                <td>{{user.id}}</td>
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
                users: {},
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },

        methods: {
            loadUsers() {
                axios.get('api/user').then(({data}) => (this.user = data.data));
            },
            creatUser() {
                this.form.post('api/user')
            }
        },

        created() {
            this.loadUsers();
        }
    }
</script>

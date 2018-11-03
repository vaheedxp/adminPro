<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Students Component</div>
                    <div class="card-body">
                        <table>
                            <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </thead>
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
                form: new form({
                    name : '',
                    email : '',
                    password : '',
                    type : '',
                    bio : '',
                    photo: ''
                })
            }
        },
        methods: {
            loadUsers() {
                axios.get("api/users").then(({ data }) => (this.users = data));
            }
        },
        created() {
            this.loadUsers();
        }
    }
</script>

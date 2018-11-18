<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <h6>Users Management</h6>
                        </div>
                        <div class="float-right">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUserModal"> <i class="fas fa-user-plus"></i> Add User</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm tabel-responsive">
                            <thead>
                            <tr>
                                <td><i class="fas fa-list"></i></td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Type</td>
                                <td>Register Date</td>
                                <td>Bio</td>
                                <td>Actions</td>
                            </tr>
                            </thead>
                            <tbody>
                                <tr v-for="u in users.data" :key="u.id">
                                    <td>{{ u.id }}</td>
                                    <td>{{ u.name }}</td>
                                    <td>{{ u.email }}</td>
                                    <td>{{ u.type | toUpperCase }}</td>
                                    <td>{{ u.created_at | changeDate }}</td>
                                    <td>{{ u.bio }}</td>
                                    <td>
                                        <a href="#"><i class="fas fa-edit c-green"></i></a>
                                        <a href="#"><i class="fas fa-trash c-red"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <pagination :data="users" @pagination-change-page="getResults" :show-disabled="true">
                            <span slot="prev-nav"><i class="fas fa-chevron-left"></i></span>
	                        <span slot="next-nav"><i class="fas fa-chevron-right"></i></span>
                        </pagination>
                    </div>
                </div>
            </div>
        </div>

    <!-- Create User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <form @submit.prevent="createUser" @keydown="form.onKeydown($event)">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name:</label>
                            <input v-model="form.name" type="text" name="name"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                            <has-error :form="form" field="name"></has-error>
                        </div>

                        <div class="form-group">
                            <label>Email:</label>
                            <input v-model="form.email" type="email" name="email"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                            <has-error :form="form" field="email"></has-error>
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input v-model="form.password" type="password" name="password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                            <has-error :form="form" field="password"></has-error>
                        </div>

                        <div class="form-group">
                            <label>Biography:</label>
                            <textarea v-model="form.bio" id="bio" name="bio" placeholder="Write your short bio (Optional)"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                            <has-error :form="form" field="bio"></has-error>
                        </div>

                        <div class="form-group">
                            <label>User Type:</label>
                            <select v-model="form.type" name="password"
                                class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                                    <option value="">Select User Role</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">Standard User</option>
                                    <option value="author">Author</option>
                                </select>
                            <has-error :form="form" field="password"></has-error>
                        </div>

                        <!-- <button :disabled="form.busy" type="submit" class="btn btn-primary">Log In</button> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    data() {
        return {
            form: new Form({
                name: '',
                email: '',
                password: '',
                type: '',
                bio: '',
                photo: '',
                created_at: ''
            }),
            users: {}
        }
    },
    methods: {
        getResults(page = 1) {
                axios.get('./api/users?page=' + page)
                .then(response => {
                    this.users = response.data;
                });
            },
        createUser() {
            this.form.post('api/users');
            this.loadUser();
        },
        loadUser() {
            axios.get("api/users").then(({data})=>(this.users = data));
        },
    },
    created() {
        this.loadUser();
    }
}
</script>

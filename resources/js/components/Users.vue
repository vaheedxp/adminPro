<template>
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <div class="float-left">
                                <h6>Users Management</h6>
                            </div>
                            <div class="float-right">
                                <button type="button" class="btn btn-primary btn-sm" @click="showAddModal()"> <i class="fa fa-user-plus"></i>
                                    Add User</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <td><i class="fa fa-list"></i></td>
                                        <td>Name</td>
                                        <td>Type</td>
                                        <td>Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="u in users.data" :key="u.id">
                                        <td>{{ u.id }}</td>
                                        <td>{{ u.name }}</td>
                                        <td>{{ u.type | toUpperCase }}</td>
                                        <td>
                                            <a href="#" @click="showEditModal(u)"><i class="fa fa-edit green"></i></a>
                                            <a href="#" @click="deleteUser(u.id)"><i class="fa fa-trash red"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <pagination :data="users" @pagination-change-page="getResults" :show-disabled="true" class="pagination pagination-sm float-right">
                                <span slot="prev-nav">«</span>
                                <span slot="next-nav">»</span>
                            </pagination>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Create User Modal -->
        <div class="modal" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="userModalLabel">{{ modalMode ? 'Edit User' : 'Add User'}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="modalMode ? updateUser() : createUser()" @keydown="form.onKeydown($event)">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input v-model="form.name" type="text" name="name" placeholder="User Full Name"
                                            class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input v-model="form.password" type="password" name="password" placeholder="Password (Min: 6 Character)"
                                            class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('password') }">
                                        <has-error :form="form" field="password"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label>Education:</label>
                                        <input v-model="form.education" type="text" name="education" placeholder="Education"
                                            class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('education') }">
                                        <has-error :form="form" field="education"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label>Location:</label>
                                        <input v-model="form.location" type="text" name="location" placeholder="Location"
                                            class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('location') }">
                                        <has-error :form="form" field="location"></has-error>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input v-model="form.email" type="email" name="email" placeholder="Email Address"
                                            class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('email') }">
                                        <has-error :form="form" field="email"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label>Job:</label>
                                        <input v-model="form.job" type="text" name="job" placeholder="Job Title" class="form-control form-control-sm"
                                            :class="{ 'is-invalid': form.errors.has('job') }">
                                        <has-error :form="form" field="job"></has-error>
                                    </div>
                                    <div class="form-group">
                                        <label>User Type:</label>
                                        <select v-model="form.type" name="type" placeholder="Select User Role" class="form-control form-control-sm"
                                            :class="{ 'is-invalid': form.errors.has('password') }">
                                            <option value="">Select User Role</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">Standard User</option>
                                            <option value="author">Author</option>
                                        </select>
                                        <has-error :form="form" field="password"></has-error>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Biography:</label>
                                        <textarea v-model="form.bio" id="bio" name="bio" placeholder="Write your short bio (Optional)"
                                            rows="5" class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                                        <has-error :form="form" field="bio"></has-error>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Notes:</label>
                                        <textarea v-model="form.notes" id="notes" name="notes" placeholder="Optional Notes (Optional)"
                                            rows="5" class="form-control form-control-sm" :class="{ 'is-invalid': form.errors.has('notes') }"></textarea>
                                        <has-error :form="form" field="notes"></has-error>
                                    </div>
                                </div>
                            </div>

                            <!-- <button :disabled="form.busy" type="submit" class="btn btn-primary">Log In</button> -->
                        </div>
                        <div class="modal-footer">
                            <button v-show="!modalMode" type="button" class="btn btn-success btn-sm" @click="resetForm()">Reset
                                Form</button>
                            <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
                            <button v-show="modalMode" type="submit" class="btn btn-primary btn-sm">Update</button>
                            <button v-show="!modalMode" type="submit" class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
    export default {
        data() {
            return {
                modalMode: false,
                form: new Form({
                    id: "",
                    name: "",
                    email: "",
                    password: "",
                    type: "",
                    bio: "",
                    job: "",
                    education: "",
                    location: "",
                    notes: "",
                    skills: "",
                    photo: "",
                    created_at: ""
                }),
                users: {}
            };
        },
        methods: {
            showAddModal() {
                this.modalMode = false;
                this.form.clear();
                this.form.reset();
                $("#userModal").modal("show");
            },
            showEditModal(user) {
                this.modalMode = true;
                this.form.clear();
                this.form.reset();
                $("#userModal").modal("show");
                this.form.fill(user);
            },
            loadUser() {
                axios.get("api/users").then(({
                    data
                }) => (this.users = data));
            },
            getResults(page = 1) {
                axios.get("./api/users?page=" + page).then(response => {
                    this.users = response.data;
                });
            },
            createUser() {
                this.$Progress.start();
                this.form
                    .post("api/users")
                    .then(result => {
                        $("#userModal").modal("hide");
                        toast({
                            type: "success",
                            title: "New User Added Successfully!"
                        });
                        this.$Progress.finish();
                        Fire.$emit("updateUser");
                    })
                    .catch(err => {
                        toast({
                            type: "warning",
                            title: "Sorry! Somting was wrong. The user was not created. Try again!"
                        });
                    });
            },
            updateUser() {
                this.$Progress.start();
                this.form
                    .put("api/users/" + this.form.id)
                    .then(result => {
                        Fire.$emit("updateUser");
                        $("#userModal").modal("hide");
                        swal("Updated!", "The User has been updated", "success");
                        this.$Progress.finish();
                    })
                    .catch(err => {
                        this.$Progress.fail();
                    });
            },
            deleteUser(id) {
                swal({
                    title: "Delete User",
                    text: "Are you sure to delete this user",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then(result => {
                    if (result.value) {
                        axios
                            .delete("api/users/" + id)
                            .then(result => {
                                swal("Deleted!", "The user has been deleted.", "success");
                                Fire.$emit("updateUser");
                            })
                            .catch(err => {
                                swal("Warning!", "Somting was wrong, try again.", "warning");
                            });
                    }
                });
            },
            resetForm() {
                this.form.reset();
            }
        },
        created() {
            this.loadUser();
            Fire.$on("updateUser", () => {
                this.loadUser();
            });
        }
    };

</script>

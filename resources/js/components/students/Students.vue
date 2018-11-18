<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <template v-if="addForm">
                    <form action="./api/students" method="POST" @submit.prevent="addStudent()">
                        <div class="card card-success">
                            <div class="card-header">Add New Student</div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="First name" v-model="student.firstname">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="Last name" v-model="student.lastname">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <input type="email" class="form-control form-control-sm" placeholder="Email" v-model="student.email">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control form-control-sm" placeholder="Username" v-model="student.username">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <input type="password" class="form-control form-control-sm" placeholder="Password" v-model="student.password">
                                        </div>
                                        <div class="col">
                                            <input type="password" class="form-control form-control-sm" placeholder="Confirm Password" v-model="student.confirmPassword">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col">
                                            <select name="collage" id="collage" class="form-control form-control-sm" v-model="student.collage">
                                                <option value="bcs">BCS</option>
                                                <option value="law">Law</option>
                                                <option value="economy">Economy</option>
                                                <option value="engineering">Engineering</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <div class="float-right">
                                    <button type="submit" class="btn btn-danger btn-sm" name="submit">Add</button>
                                    <button type="button" class="btn btn-warning btn-sm" @click.prevent="addForm = false">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </template>
                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <h6>Students Management</h6>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-info btn-sm" v-on:click="addForm = !addForm">Add <i class="fas fa-plus"></i></button>
                        </div>
                        <div class="float-right">
                            <!-- SEARCH FORM -->
                        <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" style="background-color: #f2f4f6; border: 0;">
                            <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit" style="background-color: #f2f4f6; border: 0; margin-right: 20px;">
                                <i class="fa fa-search"></i>
                            </button>
                            </div>
                        </div>
                        </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th class="c-pink"><i class="fas fa-list-ul"></i></th>
                                    <th class="c-pink"><i class="fas fa-user"></i> First Name</th>
                                    <th class="c-green">Last Name</th>
                                    <th class="c-orange"><i class="fas fa-at"></i> Email</th>
                                    <th class="c-indigo"><i class="fas fa-university"></i> Collage</th>
                                    <th class="c-red">Username</th>
                                    <th class="c-cyan">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="st in students.data" :key="st.id" @click="viewSt(st.id)">
                                    <td>{{ st.id }}</td>
                                    <td>{{ st.firstname }}</td>
                                    <td>{{ st.lastname }}</td>
                                    <td>{{ st.email }}</td>
                                    <td>{{ st.collage }}</td>
                                    <td>{{ st.username }}</td>
                                    <td>
                                        <a href="#" @click.prevent="viewSt(st.id)"><i class="fas fa-eye c-blue"></i></a>
                                        <a href="#" @click.prevent="editSt(st.id)"><i class="fas fa-pencil c-orange"></i></a>
                                        <a href="#" @click.prevent="deleteSt(st.id)"><i class="fas fa-trash c-red"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <pagination :data="students" @pagination-change-page="getResults" :show-disabled="true">
                            <span slot="prev-nav"><i class="fas fa-chevron-left"></i></span>
	                        <span slot="next-nav"><i class="fas fa-chevron-right"></i></span>
                        </pagination>
                    </div>
                </div>
                <template v-if="showInfo">
                    <div class="card card-info">
                        <div class="card-header">
                            <h6 class="float-left">Student Information</h6>
                            <a href="#" @click="showInfo = false"><i class="float-right fas fa-times" ></i></a>
                        </div>
                        <div class="card-body">
                            <label for="fname">{{ studentInfo.firstname }}</label>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                student: {
                    id: '',
                    firstname: '',
                    lastname: '',
                    email: '',
                    username: '',
                    password: '',
                    collage: ''
                },
                showInfo: false,
                addForm: false,
                students: {},
                studentInfo: {}
            }
        },

        created() {
            this.fetchStudents();
        },

        methods: {
            getResults(page = 1) {
                axios.get('./api/students?page=' + page)
                .then(response => {
                    this.students = response.data;
                });
            },
            fetchStudents() {
                axios.get("./api/students").then(({ data }) => this.students = data);
            },
            addStudent() {
                axios.post('./api/students', this.student).then((result) => {
                    this.fetchStudents();
                }).catch((err) => {
                    alert(err);
                });
            },
            viewSt(stid){
                this.showInfo = true;
                axios.get("./api/students/" + stid).then((result) => {
                    this.studentInfo = result.data;
                }).catch((err) => {
                    alert(err);
                });
            },
            editSt(stid){
                
            },
            deleteSt(stid){

            }
        }
    }

</script>

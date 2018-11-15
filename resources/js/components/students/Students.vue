<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">Students Component</div>
                <div class="card-body">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Collage</td>
                            <td>Username</td>
                        </tr>
                        </thead>
                        <tbody>
                            <tr v-for="st in students" :key="st.id">
                                <td>{{ st.firstname }}</td>
                                <td>{{ st.lastname }}</td>
                                <td>{{ st.email }}</td>
                                <td>{{ st.collage }}</td>
                                <td>{{ st.username }}</td>
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
            students: []
        }
    },

    created() {
        this.fetchStudents();
    },

    methods: {
        fetchStudents() {
            axios.get("./api/students").then(({ data }) => this.students = data);
        }
    }
}
</script>

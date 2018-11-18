<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <h6><i class="fas fa-user-tie c-blue"></i> Employees Management</h6>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-primary btn-sm">Add <i class="fas fa-user-plus"></i></button>
                            <button class="btn btn-danger btn-sm">Delete <i class="fas fa-user-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

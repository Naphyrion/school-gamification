<template>
    <div class="flex-initial p-1">
       <a class="btn btn-default btn-primary cursor-pointer" v-on:click="viewStudents()">{{classroom.name}}</a>
    </div>
</template>

<script>
export default {
    props: {
        classroom: {
            type: Object,
        },
    },

    methods: {
        viewStudents(){
            
            Nova.$emit('viewStudents', this.classroom.id);
        }
    },

    mounted() {
        //
       
    },
}
</script>

<style>
/* Scoped Styles */
</style>
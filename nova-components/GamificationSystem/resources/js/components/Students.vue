<template>
    <div>
        <loading-view v-if="gettingStudents" :loading="loading">
            <div class="flex card w-full p-2 m-2">
                <StudentCard v-for="student in students" :key="student.id" :student="student"></StudentCard>
            </div>
        </loading-view>
        <div v-if="!gettingStudents" class="card w-full text-center m-1 py-40">
            <p class="text-base text-80 font-normal">Selecciona un curso</p>
        </div>
    </div>
</template>

<script>
import StudentCard from './StudentCard'

export default {
    components:{
      StudentCard,  
    },
    data: () => ({
        loading: true,
        students: {},
        gettingStudents: false,
    }),

    methods:{
        getStudents(classroomId){
            this.gettingStudents = true;
            axios.get('/nova-vendor/gamification-system/classrooms/'+classroomId)
                .then((response)=>{
                    this.students = response.data.data.students;
                    this.loading = false;
                });
        },
    },
    mounted() {
        Nova.$on('viewStudents', (classroomId)=>{
            this.getStudents(classroomId);
        })
    },
}
</script>

<style>
/* Scoped Styles */
</style>
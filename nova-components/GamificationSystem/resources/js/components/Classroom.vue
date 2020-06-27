<template>
    <div>
        <h1 class="mb-3 text-90 font-normal text-2xl">Classrooms</h1>
        
        <div class="flex">
            <ClassroomButton v-for="classroom in classrooms" :classroom="classroom" :key="classroom.id"></ClassroomButton>
        </div>
      
        <Students></Students>
       
    </div>
</template>

<script>
import ClassroomButton from './ClassroomButton'
import Students from './Students'

export default {
    components:{
        ClassroomButton,
        Students,
    },
    data: () => ({
        classrooms: {},
    }),
    mounted() {
        axios.get('/nova-vendor/gamification-system/classrooms/')
            .then((response)=>{
                this.classrooms = response.data.data;
            });
    },
}
</script>

<style>
/* Scoped Styles */
</style>

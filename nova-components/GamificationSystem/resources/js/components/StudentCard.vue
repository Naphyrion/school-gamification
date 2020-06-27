<template>
    <div class="card w-1/6 p-2 bg-indigo-200 m-1 shadow-md hover:bg-indigo-400 cursor-pointer student-card">
        <div class="flex flex-row-reverse">
            <div class="flex items-center h-12 w-12 p-1 rounded-full bg-blue-400 border-2 border-blue-600">
                 <span class="text-center text-white text-xl w-full">{{student.points}}</span>
            </div>
           
        </div>
        <div class="w-full flex">   
            <img class="h-32 w-32 rounded-full m-auto border-8 border-blue-300 border-double" :src="storage + student.avatar" alt="">
        </div>
        <div class="p-2 text-sm w-full text-center student-name">{{student.name}}</div>
    </div>
</template>

<script>

export default {
    data: () => ({
        storage: '/storage/',
    }),
    components:{
        
    },
    props:{
        student:{
            type: Object
        },
    },
    mounted() {
     
    },
}
</script>

<style>
/* Scoped Styles */
.student-card{
    transition: 0.5s;
}
.student-card:hover .student-name{
    color: aliceblue;
}
</style>
<template>
    
    <div class="flex flex-row p-2">
        <div 
            class="bg-gray-100 border border-gray-200 m-1 p-1 rounded-lg w-32 h-32 overflow-hidden text-center"
            v-for="competence in competences" :key="competence.id"
        >
            <div class="flex flex-row-reverse">
                <div class="h-8 w-8 bg-green-400 border-2 border-green-600 rounded-full transform translate-y-2 flex items-center">
                    <span class="text-sm text-center w-full">{{competence.points}}</span>
                </div>
            </div>
            <img class="w-16 h-16 transform -translate-y-3 p-1" :src="'/storage/'+competence.image"/>
            <div class="text-sm">{{competence.name}}</div>
        </div>
    </div>
 
</template>

<script>
export default {

    props:{
        typeId: Number,
    },
    data: () => ({
       competences: {},
    }),
  
    mounted() {
       this.getCompetences(this.typeId)
      
    },
    methods: {
       getCompetences(id){
            axios.get('/nova-vendor/gamification-system/competences/by-category/'+ id)
            .then((response)=>{
                this.competences = response.data.data
            });
        },
    },
    watch:{
        typeId: function(newTypeId, oldTypeId){
            this.getCompetences(newTypeId)
        }
    }
}
</script>
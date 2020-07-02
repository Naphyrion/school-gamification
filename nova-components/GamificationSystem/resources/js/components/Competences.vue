<template>
    <div>
        <div class="flex flex-row p-2">
            <div 
                class="bg-indigo-600 text-white text-center p-1 my-2 border rounded-lg w-1/2"
                @click="clickHandled(competenceType.id)"
                v-for="competenceType in competenceTypes" :key="competenceType.id"   
            >
                    {{competenceType.name}}
            </div>
        </div>
        <competence-card :type-id="typeId" v-if="clicked"></competence-card>
    </div>
    

</template>

<script>
import CompetenceCard from './CompetenceCard'

export default {

    components: {
        CompetenceCard,
    },

    data: () => ({
      competenceTypes: {},
      typeId: null,
      clicked:false,
    }),
   
    mounted() {
        this.getCompetenceTypes()
    },
    methods: {
        getCompetenceTypes(){
            axios.get('/nova-vendor/gamification-system/competence-types/')
            .then((response)=>{
                this.competenceTypes = response.data.data
                this.clickHandled(this.competenceTypes[0].id)
            });
        },
        clickHandled(id){
            this.typeId = id
            this.clicked = true
        }
    },
}
</script>
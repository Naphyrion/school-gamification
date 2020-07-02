<template>
    <modal @modal-close="handleClose">
       <div class="bg-white rounded-lg shadow-xl p-2 overflow-hidden" style="width: 600px;">
           <h3 class="w-full text-center">competences</h3>
           <div class="flex flex-row p-2">
                <div class="bg-indigo-600 text-white text-center p-1 my-2 border rounded-lg w-1/2" v-for="competenceType in competenceTypes" :key="competenceType.id">
                        {{competenceType.name}}
                </div>
           </div>
           <div class="flex flex-row p-2">
               <competence-card>

               </competence-card>
           </div>
       </div>
    </modal>
</template>

<script>
import CompetenceCard from './CompetenceCard'

export default {

    components: {
        CompetenceCard,
    },

    data: () => ({
        competenceTypes: {},
    }),
    /**
     * Mount the component.
     */
    mounted() {
        this.getCompetenceTypes()
      
    },
    methods: {

        getCompetenceTypes(){
            axios.get('/nova-vendor/gamification-system/competence-types/')
            .then((response)=>{
                this.competenceTypes = response.data.data
            });
        },
        /**
         * Stop propogation of input events unless it's for an escape or enter keypress
         */
        handleKeydown(e) {
            if (['Escape', 'Enter'].indexOf(e.key) !== -1) {
                return
            }
            e.stopPropagation()
        },
        /**
         * Execute the selected action.
         */
        handleConfirm() {
            this.$emit('confirm')
        },
        /**
         * Close the modal.
         */
        handleClose() {
            this.$emit('close')
        },
    },
}
</script>
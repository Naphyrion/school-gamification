<template>
    <modal @modal-close="handleClose">
        <div class="bg-white rounded-lg shadow-xl p-2 overflow-hidden" style="width: 600px;">
            <h3 class="w-full text-center">competences</h3>
            <Competences></Competences> 
        </div>
    </modal>
</template>

<script>
import Competences from './Competences'

export default {

    components: {
        Competences,
    },

    data: () => ({
        competenceTypes: {},
    }),
    /**
     * Mount the component.
     */
    mounted() {
      
    },
    methods: {
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
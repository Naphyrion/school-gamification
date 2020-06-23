<router-link tag="h3" :to="{name: 'gamification-system'}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill="var(--sidebar-icon)" d="M3 1h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2H3c-1.1045695 0-2-.8954305-2-2V3c0-1.1045695.8954305-2 2-2zm0 2v4h4V3H3zm10-2h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2h-4c-1.1045695 0-2-.8954305-2-2V3c0-1.1045695.8954305-2 2-2zm0 2v4h4V3h-4zM3 11h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2H3c-1.1045695 0-2-.8954305-2-2v-4c0-1.1045695.8954305-2 2-2zm0 2v4h4v-4H3zm10-2h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2h-4c-1.1045695 0-2-.8954305-2-2v-4c0-1.1045695.8954305-2 2-2zm0 2v4h4v-4h-4z"/></svg>
    <span class="sidebar-label">
        Gamification System
    </span>
</router-link>
<ul class="list-reset mb-8">
           
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'players'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Players
                    </router-link>
                </li>
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'competences'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Competences
                    </router-link>
                </li>
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'competence-boards'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Competence Boards
                    </router-link>
                </li>
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'competence-types'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Competence Types
                    </router-link>
                </li>
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'achievements'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Achievements
                    </router-link>
                </li>
                <li class="leading-tight mb-4 ml-8 text-sm">
                    <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: 'tags'
                        }
                    }" class="text-white text-justify no-underline dim">
                        Tags
                    </router-link>
                </li>
        
        </ul>

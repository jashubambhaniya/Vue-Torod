<template>
	<div class="dashboard_header">
		<Header></Header>
	</div>
	<div class="container-fluid mar_topmob">
		<div class="menu_dashboard">
			<Sidebar></Sidebar>
		</div>
		<router-view></router-view>
	</div>
	<Footer></Footer>
</template>
<script setup>
import { useSlots, useAttrs } from 'vue'
import Header from '@/components/layouts/dashboard/Header.vue'
import Footer from '@/components/layouts/dashboard/Footer.vue'
import Sidebar from '@/components/layouts/dashboard/Sidebar.vue'
import {mapActions} from 'vuex'
/* export default {
    name:"default-layout",
    data(){
        return {
            user:this.$store.state.auth.user
        }
    },
    methods:{
        ...mapActions({
            signOut:"auth/logout"
        }),
        async logout(){
            await axios.post('/logout').then(({data})=>{
                this.signOut()
                this.$router.push({name:"login"})
            })
        }
    }
} */
</script>
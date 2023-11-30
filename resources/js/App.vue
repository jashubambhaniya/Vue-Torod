<template>
 	<RouterView />
	<vue-progress-bar></vue-progress-bar>
</template>

<style scoped>
	
</style>

<script>
	import { RouterLink, RouterView } from 'vue-router'

  export default {
	mounted() {
     	//  [App.vue specific] When App.vue is finish loading finish the progress bar
     	this.$Progress.finish();
	  	const toast = this.$swal.mixin({
			toast: true,
			title: 'General Title',
			position: 'top-right',
			showConfirmButton: false,
			timer: 3000,
			timerProgressBar: true,
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', this.$swal.stopTimer)
				toast.addEventListener('mouseleave', this.$swal.resumeTimer)
			}
		});
		window.toast = toast;
    },
    created() {
      //  [App.vue specific] When App.vue is first loaded start the progress bar
      this.$Progress.start();
      //  hook the progress bar to start before we move router-view
      this.$router.beforeEach((to, from, next) => {
        //  does the page we want to go to have a meta.progress object
        if (to.meta.progress !== undefined) {
          let meta = to.meta.progress;
          // parse meta tags
          this.$Progress.parseMeta(meta);
        }
        //  start the progress bar
        this.$Progress.start();
        //  continue to next page
        next();
      });
      //  hook the progress bar to finish after we've finished moving router-view
      this.$router.afterEach((to, from) => {
        //  finish the progress bar
        this.$Progress.finish();
      });
    },
  }
</script>
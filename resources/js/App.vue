<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
	<LanguageSwitcher />
 	<RouterView />
</template>

<style scoped>
	
</style>

<script>
  import LanguageSwitcher from "@/components/LanguageSwitcher.vue"
  import Tr from "@/i18n/translation"

  export default {
    components: { LanguageSwitcher },
    setup() {
      return { Tr }
    }
  }
</script>
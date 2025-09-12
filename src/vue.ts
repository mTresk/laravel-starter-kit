import { createApp } from 'vue'
import VueExample from '@/components/VueExample.vue'

const VueExampleInstance = createApp({
  components: {
    'component-example': VueExample,
  },
})

if (document.querySelector('#example-component')) {
  VueExampleInstance.mount('#example-component')
}

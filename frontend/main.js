import { createApp } from 'vue'
import api from './api'
import App from './App.vue'

api.init()

createApp(App).mount('#app')
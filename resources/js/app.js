import '../css/app.css'
import { createApp } from 'vue'
import axios from 'axios'
import App from './App.vue'

axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'

createApp(App).mount('#app')

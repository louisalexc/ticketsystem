import './bootstrap';
import '@fortawesome/fontawesome-free/js/brands';
import '@fortawesome/fontawesome-free/js/solid';
import '@fortawesome/fontawesome-free/js/fontawesome';
import Alpine from 'alpinejs'
import mask from '@alpinejs/mask'
import collapse from '@alpinejs/collapse'

Alpine.plugin(mask)
Alpine.plugin(collapse)

window.Alpine = Alpine
Alpine.start()

import { themeChange } from 'theme-change'
themeChange()
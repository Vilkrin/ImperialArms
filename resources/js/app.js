import './globals/theme.js'; /* By Sheaf.dev */ 

import Alpine from 'alpinejs';
import anchor from '@alpinejs/anchor'
 
Alpine.plugin(anchor)
window.Alpine = Alpine;
Alpine.start();
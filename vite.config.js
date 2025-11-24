import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Seu SCSS (agora com Bootstrap)
                'resources/scss/app.scss',
                // Seu JS principal (agora com a inicialização do Bootstrap/Popper)
                'resources/js/app.js',
                
                // === NOVO: Adiciona o CSS e JS do AdminLTE para compilação ===
                'node_modules/admin-lte/dist/css/adminlte.min.css',
                'node_modules/admin-lte/dist/js/adminlte.min.js',
            ],
            refresh: true,
        }),
    ],
});

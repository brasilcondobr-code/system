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
                
            ],
            refresh: true,
        }),
    ],
});

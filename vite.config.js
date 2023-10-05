import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    server: {
        host: "10.42.0.1", // Utilisez fs pour lire le fichier de l'adresse IP
        port: 3000, // Port par défaut, modifiez-le selon vos besoins
      },
});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export const paths = [
    'Modules/Core/resources/assets/sass/app.scss',
    'Modules/Core/resources/assets/js/app.js',
];

export default defineConfig({
    build: {
        outDir: '../../public/build-core',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-core',
            input: paths,
            refresh: true,
        }),
    ],
});




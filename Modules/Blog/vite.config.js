import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export const paths = [
    'Modules/Blog/resources/assets/sass/app.scss',
    'Modules/Blog/resources/assets/js/app.js',
];

export default defineConfig({
    build: {
        outDir: '../../public/build-blog',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-blog',
            input: paths,
            refresh: true,
        }),
    ],
});




import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

const paths = [
    'Modules/Posts/resources/assets/sass/posts-module.scss',
    'Modules/Posts/resources/assets/js/posts-module.js',
];

const config = defineConfig({
    build: {
        outDir: '../../public/build-posts',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        laravel({
            publicDirectory: '../../public',
            buildDirectory: 'build-posts',
            input: paths,
            refresh: true,
        }),
    ],
});

export {
    paths,
    config
}


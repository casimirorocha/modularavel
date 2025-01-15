import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import collectModuleAssetsPaths from './vite-module-loader.cjs';

async function getConfig() {
    const paths = [
		 'resources/sass/bootstrap.scss',
		 'resources/css/app.css',
		 'resources/js/app.js',
    ];

    const allPaths = await collectModuleAssetsPaths(paths, './Modules');

    return defineConfig({
        plugins: [
            laravel({
                input: allPaths,
                // refresh: true
                refresh: {
                    config: {
                        always: false
                    },
                    paths: [
                        './app/**',
                        './config/**',
							  	'./routes/**',
                        './resources/views/**',
                        './Modules/**'
                    ]
                },
            })
        ]
    });
}

export default getConfig();

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import VueI18nPlugin from '@intlify/unplugin-vue-i18n/vite'
import { resolve, dirname } from 'node:path'
import { fileURLToPath, URL } from 'node:url'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        vue(),
		VueI18nPlugin({
			runtimeOnly: false,
			  include: resolve(dirname(fileURLToPath(import.meta.url)), 'resources/js/i18n/locales/**'), // provide a path to the folder where you'll store translation data (see below)
		})
    ],
    publicDir: 'public',
    resolve: {
        alias: {
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
		  	'@': fileURLToPath(new URL('resources/js', import.meta.url))
		}
	  }
});

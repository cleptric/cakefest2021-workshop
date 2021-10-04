import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  plugins: [vue()],
  build: {
    emptyOutDir: false,
    outDir: './webroot/',
    manifest: true,
    rollupOptions: {
        input: {
            'main_js': './frontend/main.js',
            'main_css': './frontend/main.css',
        },
    },
  }
})
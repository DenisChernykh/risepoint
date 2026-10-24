import { resolve } from 'path';

export default {
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        styles: resolve(__dirname, 'assets/css/styles.css'),
        script: resolve(__dirname, 'assets/js/script.js'),
      },
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name].css',
      },
    },
  },
};

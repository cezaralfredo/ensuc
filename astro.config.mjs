import { defineConfig } from 'astro/config';

// https://astro.build/config
export default defineConfig({
  site: 'https://ensuc.com.br',
  output: 'static',
  build: {
    format: 'file',
    inlineStylesheets: 'always'
  },
});

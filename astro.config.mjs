import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  site: 'https://ensuc.com.br',
  output: 'static',
  build: {
    format: 'file' // generates /page/index.html or clean files
  },
  integrations: [sitemap()],
});

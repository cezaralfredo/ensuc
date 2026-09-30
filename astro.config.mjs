import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// https://astro.build/config
export default defineConfig({
  site: 'https://ensuc.com.br',
  output: 'static',
  build: {
    format: 'file',
    inlineStylesheets: 'always'
  },
  integrations: [
    sitemap({
      lastmod: new Date(),
      filter: (page) => !page.includes('/404'),
      changefreq: 'weekly',
      priority: 0.7,
      serialize(item) {
        // Prioridades diferenciadas por tipo de página
        if (item.url === 'https://ensuc.com.br/') {
          item.priority = 1.0;
          item.changefreq = 'daily';
        } else if (item.url.includes('/blog')) {
          item.priority = 0.8;
          item.changefreq = 'daily';
        } else if (item.url.includes('/artigo-')) {
          item.priority = 0.7;
          item.changefreq = 'monthly';
        } else if (item.url.includes('/privacidade') || item.url.includes('/lgpd')) {
          item.priority = 0.3;
          item.changefreq = 'yearly';
        } else {
          item.priority = 0.9;
          item.changefreq = 'weekly';
        }
        return item;
      },
    }),
  ],
});

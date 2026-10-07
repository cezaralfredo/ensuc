import fs from 'node:fs';
import path from 'node:path';

const distDir = path.resolve('dist');
const sitemapIndex = path.join(distDir, 'sitemap-index.xml');
const sitemapTarget = path.join(distDir, 'sitemap.xml');

if (fs.existsSync(sitemapIndex)) {
  fs.copyFileSync(sitemapIndex, sitemapTarget);
  console.log('✓ Copiado sitemap-index.xml -> sitemap.xml com sucesso!');
} else {
  console.warn('⚠️ sitemap-index.xml não encontrado em dist/');
}

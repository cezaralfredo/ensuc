import fs from 'node:fs';
import path from 'node:path';

const distDir = path.resolve('dist');
const sitemap0 = path.join(distDir, 'sitemap-0.xml');
const sitemapIndex = path.join(distDir, 'sitemap-index.xml');
const sitemapTarget = path.join(distDir, 'sitemap.xml');

// Copia o sitemap direto (urlset com todas as páginas) para sitemap.xml
if (fs.existsSync(sitemap0)) {
  fs.copyFileSync(sitemap0, sitemapTarget);
  console.log('✓ Copiado sitemap-0.xml (urlset com 36 páginas) -> sitemap.xml');
} else if (fs.existsSync(sitemapIndex)) {
  fs.copyFileSync(sitemapIndex, sitemapTarget);
  console.log('✓ Copiado sitemap-index.xml -> sitemap.xml');
} else {
  console.warn('⚠️ Nenhum sitemap encontrado em dist/');
}

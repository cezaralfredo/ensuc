import fs from 'node:fs';
import path from 'node:path';

const distDir = path.resolve('dist');
const publicDir = path.resolve('public');

const filesToSync = ['sitemap.xml', 'sitemap-0.xml', 'sitemap-index.xml'];

for (const file of filesToSync) {
  const src = path.join(publicDir, file);
  const dest = path.join(distDir, file);
  if (fs.existsSync(src)) {
    fs.copyFileSync(src, dest);
    console.log(`✓ Sincronizado ${file} (public -> dist)`);
  }
}

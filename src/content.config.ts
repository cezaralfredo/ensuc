import { defineCollection, z } from 'astro:content';
import { glob } from 'astro/loaders';

const blog = defineCollection({
  loader: glob({ pattern: '**/*.{md,mdx}', base: './src/content/blog' }),
  schema: z.object({
    title: z.string(),
    description: z.string(),
    datePublished: z.coerce.date(),
    dateModified: z.coerce.date().optional(),
    author: z.string().default('ENSUC Soluções Ambientais'),
    image: z.string().default('/og-image.png'),
    badge: z.string().optional(),
    category: z.string().optional(),
    readTime: z.string().default('4 min de leitura'),
    keywords: z.string().optional(),
  }),
});

export const collections = { blog };

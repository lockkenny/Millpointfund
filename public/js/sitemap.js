export default function handler(req, res) {

    res.statusCode = 200
    res.setHeader('Content-Type', 'text/xml')
      
      // Instructing the Vercel edge to cache the file
      res.setHeader('Cache-control', 'stale-while-revalidate, s-maxage=3600')
      
      // generate sitemap here
      const xml = `<?xml version="1.0" encoding="UTF-8"?>
      <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>https://millpointfund.com/</loc>
        <lastmod>2023-01-29T11:39:30+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
        </url>
    <url>
        <loc>https://millpointfund.com/insights</loc>
        <lastmod>2023-01-29T11:39:30+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
        </url>
    <url>
        <loc>https://millpointfund.com/terms</loc>
        <lastmod>2023-01-29T11:39:30+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
        </url>
    </urlset>`
  
    res.end(xml)
  }

  module.exports = {
    async rewrites() {
      return [
        {
          source: '/sitemap.xml',
          destination: '/api/sitemap',
        },
      ]
    },
  }
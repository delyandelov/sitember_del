
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($services as $service)
        <url>
            <loc>{{ env('APP_URL') }}/services/{{ $service->slug }}</loc>
            <lastmod>{{ $service->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>

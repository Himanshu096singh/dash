<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home') }}</loc>
        <lastmod>@if(isset($blog[0])) {{$blog[0]->updated_at->tz('UTC')->toAtomString()}} @else {{$categories[0]->updated_at->tz('UTC')->toAtomString()}} @endif</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('support') }}</loc>
        <lastmod>@if(isset($blog[0])) {{$blog[0]->updated_at->tz('UTC')->toAtomString()}} @else {{$categories[0]->updated_at->tz('UTC')->toAtomString()}} @endif</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.80</priority>
    </url>
    
    @foreach($categories as $list)
        <url>
            <loc>{{ url($list->slug) }}</loc>
            <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.80</priority>
        </url>
    @endforeach
    
    @foreach($categories as $list)
        @foreach($list->subcategory as $sublist)
            <url>
                <loc>{{ url($list->slug.'/'.$sublist->slug) }}</loc>
                <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
            </url>
        @endforeach
    @endforeach
   
   @foreach($blog as $list)
        <url>
            <loc>{{ url( $list->category->slug.'/'.$list->slug) }}</loc>
            <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.80</priority>
        </url>
    @endforeach


    @foreach($product as $list)
        <url>
            <loc>{{ url( $list->category->slug.'/'.$list->slug) }}</loc>
            <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.80</priority>
        </url>
    @endforeach
    
    @foreach($categories as $list)
        @if( count($list->error)>0 )
        <url>
            <loc>{{ url($list->slug.'/errors') }}</loc>
            <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.80</priority>
        </url>
        @endif
    @endforeach
    
        
    @foreach($staticpage as $list)
        <url>
            <loc>{{ url( $list->slug) }}</loc>
            <lastmod>{{ $list->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.65</priority>
        </url>
    @endforeach
    
</urlset>
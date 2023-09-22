<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "{{$setting->name}}",
  "image": "{{asset($setting->logo)}}",
  "@id": "{{route('home')}}",
  "url": "{{route('home')}}",
  "telephone": "{{ $setting->usmobile }}",
  "priceRange": "US",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
  },
  "sameAs": [
        "{{route('home')}}"] 
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "{{$setting->name}}",
  "alternateName": "{{$setting->name}}",
  "url": "{{route('home')}}",
  "logo": "{{asset($setting->logo)}}",
  "sameAs": [
        "{{route('home')}}"
        ]
}
</script>
<script type="application/ld+json">
    {
      "@context" : "https://schema.org",
      "@type" : "WebSite",
      "name" : "{{$setting->name}}",
      "alternateName" : "WPO",
      "url" : "{{route('home')}}"
    }
  </script>
@if(isset($meta) && isset($meta['type']) && $meta['type']=='blog')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BlogPosting",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": ""
          },
          "headline": "{{$blog->name}}",
          "description": "{{$blog->metadescription}}",
          "image": "{{asset($blog->image)}}",  
          "author": {
            "@type": "Person",
            "name": "{{$blog->user->name}}",
            "url": ""
          },  
          "publisher": {
            "@type": "Organization",
            "name": "{{$setting->name}}",
            "logo": {
              "@type": "ImageObject",
              "url":"{{asset($setting->logo)}}"
            }
          },
          "datePublished": "2023-04-05 09:37:24"
        }
    </script>
    @if(count($blog->faqs)>0)
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
                @foreach($blog->faqs as $index=>$list)
                {
                    "@type": "Question",
                    "name": "{{$list->question}}",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "{{strip_tags($list->answer)}}"
                    }
                }{{($index<count($blog->faqs)-1) ? "," : ""}}
                @endforeach
            ] 
        }
        </script>
    @endif
@endif

@if(isset($meta) && isset($meta['type']) && $meta['type']=='category')
    
    @if(count($category->faqs)>0)
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
                @foreach($category->faqs as $index=>$list)
                {
                    "@type": "Question",
                    "name": "{{$list->question}}",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "{{strip_tags($list->answer)}}"
                    }
                }{{($index<count($category->faqs)-1) ? "," : ""}}
                @endforeach
            ] 
        }
        </script>
    @endif
@endif

@if(isset($meta) && isset($meta['type']) && $meta['type']=='subcategory')
    
    @if(count($subcategory->faq)>0)
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
                @foreach($subcategory->faq as $index=>$list)
                {
                    "@type": "Question",
                    "name": "{{$list->question}}",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "{{strip_tags($list->answer)}}"
                    }
                }{{($index<count($subcategory->faq)-1) ? "," : ""}}
                @endforeach
            ] 
        }
        </script>
    @endif
@endif

@if(isset($meta) && isset($meta['type']) && $meta['type']=='product')
    
    <script type="application/ld+json">
        {
         "@context": "https://schema.org/", 
         "@type": "Product", 
         "name": "{{$product->name}}",
         "image": "{{asset($product->image)}}",
         "description": "{{$product->metadescription}}",
         "brand": {
            "@type": "Brand",
            "name": "{{$product->category->name}}"
         },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.5",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "18"
         }
        } 
    </script>
        
    @if(count($product->faqs)>0)
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "FAQPage",
          "mainEntity": [
                @foreach($product->faqs as $index=>$list)
                {
                    "@type": "Question",
                    "name": "{{$list->question}}",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "{{strip_tags($list->answer)}}"
                    }
                }{{($index<count($product->faqs)-1) ? "," : ""}}
                @endforeach
            ] 
        }
        </script>
    @endif
@endif
    
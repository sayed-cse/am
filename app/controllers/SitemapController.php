<?php
class SitemapController extends ControllerBase
{
    protected $domain = 'http://www.anikamachinery.com';
    public function initialize()
    {
        //for big files, to be on the safe side
        set_time_limit(0); 
    } 
    public function indexAction()
    { 
        $response = new Phalcon\Http\Response(); 
        $expireDate = new \DateTime();
        $expireDate->modify('+1 day'); 
        $response->setExpires($expireDate); 
        $response->setHeader('Content-Type', "application/xml; charset=UTF-8"); 
        $sitemap = new \DOMDocument("1.0", "UTF-8"); 
        $urlset = $sitemap->createElement('urlset');
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $urlset->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $urlset->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
         $baseUrl = $this->config->app->StaticBaseUri;
         $links = array(
          // Your links here.
            '/index','/products','/products/spares','/products/fujian','/products/deutz','/products/perkins','/products/cummins','/products/honda','/products/hyundai','/index/services','/index/aboutus','/index/contact'
        );
        $modifiedAt = new \DateTime();
        $modifiedAt->setTimezone(new \DateTimeZone('UTC'));        
        $comment = $sitemap->createComment(' Last update of sitemap ' . date("Y-m-dTH:i:s+00:00").' ');        
        $urlset->appendChild($comment);
//Common links for site
         foreach ($links as $link) {
            $url = $sitemap->createElement('url');
            $href = $this->domain.$link;
            $url->appendChild($sitemap->createElement('loc', $href));
            $url->appendChild($sitemap->createElement('changefreq', 'daily')); //Hourly, daily, weekly etc.
            //$url->appendChild($sitemap->createElement('lastmod', $modifiedAt->format('Y-m-dTH:i:s+00:00')));
            $url->appendChild($sitemap->createElement('priority', '0.5')); //1, 0.7, 0.5 ... 
            $urlset->appendChild($url);
        } 
        $sitemap->appendChild($urlset); 
        $response->setContent($sitemap->saveXML());
        return $response;
    }
}
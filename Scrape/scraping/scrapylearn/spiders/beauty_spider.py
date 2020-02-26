import scrapy

<<<<<<< HEAD
class PostSpider(scrapy.Spider):
    name = "beauty_spider"
    # autothrottle_enabled = True
    start_urls = ["https://www.theverge.com/tech"]
=======
>>>>>>> c15208ffb324deb761b34da5b3d741da46078020

class PostsBeautySpider(scrapy.Spider):

    name = "beauty_spider"

    start_urls = [
        'https://www.elle.com/beauty/makeup-skin-care/'
    ]

    def parse(self, response):
        for post in response.css('div.full-item'):
            yield {
                'title': post.css('div.full-item-content a.full-item-title::text').get(),
                'post_link': post.css('div.full-item-content a.full-item-title::attr(href).getall()').getall(),
                'image_link': post.css('a.full-time-image img.lazyimage::attr(src)'),
                'summary': post.css('div.full-item-content div.full-item-dek p::text').getall(),
                'date': post.css('div.full-item-metadata div.publish-date::attr(data-publish-date)').getall(),
                'author': post.css('div.full-item-content div.byline span.byline-name::text').getall() #this returns the data with \n\t
                #Remember to trim this part of the code
            }

        
        next_page = response.css('a.next-posts-link::attr(href)').get()
        if next_page is not None:
            next_page = response.urljoin(next_page)
            yield scrapy.Request(next_page, callback=self.parse)
import scrapy

class PostsBeautySpider(scrapy.Spider):

    name = "beauty_spider"

    start_urls = [
        'https://www.elle.com/beauty/makeup-skin-care/'
    ]

    def parse(self, response):
        for post in response.css('div.full-item'):
            yield {
                'title': post.css('div.full-item-content a.full-item-title::text').get(),
                'post_link': post.css('div.full-item-content a.full-item-title::attr(href)').get(),
                'image_link': 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/screen-shot-2020-01-16-at-10-42-33-am-1579189394.png?crop=1.00xw:0.401xh;0,0&resize=768:*', #post.css('a.full-item-image img.lazyimage::attr(src)').get(),
                'summary': post.css('div.full-item-content div.full-item-dek p::text').get(),
                'date': post.css('div.full-item-metadata div.publish-date::attr(data-publish-date)').get(),
                'author': post.css('div.full-item-content div.byline span.byline-name::text').get(), #this returns the data with \n\t
                'category': 'beauty'
                #Remember to trim this part of the code
            }

        
        # next_page = response.css('a.next-posts-link::attr(href)').get()
        # if next_page is not None:
        #     next_page = response.urljoin(next_page)
        #     yield scrapy.Request(next_page, callback=self.parse)
import scrapy

class PostSpider(scrapy.Spider):
    name = "the_verge_tech_spider"
    # autothrottle_enabled = True
    start_urls = ["https://www.theverge.com/tech"]


    def parse(self, response):
    #    page = response.url.split('/')[-1]
    #    filename = 'posts_%s' % page

    #    with open(filename, 'wb') as f:
    #        f.write(response.body) 

        for post in response.css("div.c-compact-river .c-compact-river__entry"):
            yield {
                'title': post.css("h2.c-entry-box--compact__title a::text").get(),
                'post_link': post.css("div a::attr(href)").get(),
                'image_link': post.css("div.c-entry-box--compact__image img::attr(src)").extract()[1],
                'date': post.css("time.c-byline__item::text").get(),
                'author': post.css("span.c-byline__author-name::text").get()
            }



        # next_page = response.css("a.next-posts-link::attr(href)").get()
        # if next_page is not None:
        #     next_page = response.urljoin(next_page)
        #     yield scrapy.Request(next_page, callback=self.parse)
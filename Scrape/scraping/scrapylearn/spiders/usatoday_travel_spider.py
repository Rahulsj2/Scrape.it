import scrapy

class PostSpider(scrapy.Spider):
    name = "usatoday_food_spider"
    # autothrottle_enabled = True
    start_urls = ["https://www.usatoday.com/travel/"]


    def parse(self, response):

        for post in response.css("div.gnt_m_flm a"):
            if post.css("div.gnt_m_flm_ft").get() is None:
                continue
            yield {
                'title': post.css("::text").get(),
                'post_link': "https://www.usatoday.com" + post.css("::attr(href)").get(),
                'image_link': post.css("img::attr(data-gl-src)").get(),
                'date': post.css("div.gnt_m_flm_ft::attr(data-c-dt)").get(),
                'author': "Unknown",
                'category': 'travel'
            }
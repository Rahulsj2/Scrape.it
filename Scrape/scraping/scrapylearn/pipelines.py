# -*- coding: utf-8 -*-

import mysql.connector

# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://docs.scrapy.org/en/latest/topics/item-pipeline.html


class ScrapylearnPipeline(object):

    def __init__(self):
        self.create_connection()
        self.create_table()

    def create_connection(self):
        self.mydb = mysql.connector.connect(
            host="153.92.6.148",
            user="u791583320_scrape_it",
            passwd="password1234567890",
            database="u791583320_scrape_it"
        )
        self.db_cursor = self.mydb.cursor()

    def create_table(self):
        self.db_cursor.execute("DROP TABLE IF EXISTS news")
        self.db_cursor.execute("""CREATE TABLE news(
            title varchar(300) not null,
            author varchar(300),
            date varchar(50),
            imagelink varchar(300),
            articlelink varchar(300),
            category varchar(10),
            gender ENUM('tech', 'beauty', 'travel', 'food', 'general') not null default 'general'
        )""")


    def store_db(self, item):
        sql = "INSERT INTO news (title, author, date, imagelink, articlelink, category) VALUES (%s, %s,%s, %s,%s,%s)"
        val = (item['title'], item['author'], item['date'], item['image_link'][1], item['post_link'], item['category'])
        self.db_cursor.execute(sql, val)
        self.mydb.commit()
    

    def process_item(self, item, spider):
        self.store_db(item)
        return item

# pip3 install Flask
from aiohttp import content_disposition_filename
from flask import Flask, render_template, redirect, request
from datetime import datetime
import os
import logging

app = Flask(__name__, static_url_path="", static_folder="static", template_folder="templates")
app.logger.setLevel(logging.INFO)

articles_folder = app.static_folder + "/articles"
admin_password = "patata"

class Article:

    @staticmethod
    def parse(article_file_name:str):
        parts = article_file_name.split(".")

        if len(parts) != 3:
            app.logger.warning(f"Format incorrecte [{article_file_name}]")
            return None

        if parts[2] != "txt":
            app.logger.warning(f"Extensió incorrecte [{article_file_name}]")
            return None

        try:
            timestamp = parts[0]
            title = parts[1]
            
            with open(articles_folder + "/" + article_file_name, "r") as f:
                content = f.read()

            return Article(
                timestamp = timestamp,
                title = title,
                content = content
            )

        except Exception as e:
            app.logger.warning(f"Error de parseig [{article_file_name}]: {e}")
            return None

    def __init__(self, timestamp, title, content):
        self.timestamp = timestamp
        self.title = title
        self.content = content

@app.route('/')
def bloc():
    articles_file_names = os.listdir(articles_folder)

    articles = []
    for article_file_name in articles_file_names:
        article = Article.parse(article_file_name)
        if article is not None:
            articles.append(article)

    return render_template('bloc.html', articles = articles)

@app.route("/add", methods=["GET"])
def add():
    return render_template('add.html')

@app.route("/add", methods=["POST"])
def add_form():
    # capturo dades del formulari
    formulari = request.form
    title = formulari.get("title", "").strip()
    content = formulari.get("content", "").strip()

    if title != "" and content != "":
        timestamp = datetime.now().isoformat(' ', 'seconds')
        article_file_name = f"{timestamp}.{title}.txt"
        with open(articles_folder + "/" + article_file_name, "w") as f:
            f.write(content)

    return redirect("/")

# Necessari per iniciar un servidor de proves
if __name__ == '__main__':
    app.run(host="0.0.0.0", debug=True)
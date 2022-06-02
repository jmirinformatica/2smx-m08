# pip3 install Flask
from flask import Flask, render_template
import os

app = Flask(__name__, static_url_path="", static_folder="static") #ruta relativa on hi ha el contingut estàtic (fotos)

@app.route('/')
def test1():
    return "<h1>Hola</h1>"

# @app.route('/')
# def test2():
#     directori = "./static"

#     imatges = os.listdir(directori)

#     html = ""
#     for imatge in imatges:
#         html = html + f"<img src='{imatge}'><br>"
#     return html

# @app.route('/')
# def test3():
#     directori = "./static"
#     imatges = os.listdir(directori)
#     return render_template("fotos.html", imatges=imatges)   

# Necessari per iniciar un servidor de proves
if __name__ == '__main__':
    app.run(host="0.0.0.0", debug=True)

# pip3 install Flask
from flask import Flask, request

app = Flask(__name__, static_url_path="", static_folder="static") #ruta relativa on hi ha el contingut estàtic (fotos)

@app.route('/')
def init():
    return """
    <form method="get" action="/suma">
        <input type="number" name="a">+<input type="number" name="b">
        <input type="submit" value="RESULTAT">
    </form>
    """

@app.route("/suma")
def suma():
    data = request.args
    a = int(data.get("a", 0))
    b = int(data.get("b", 0))
    resultat = a + b
    
    return f"""
        <p>{a} + {b} = {resultat}</p>
    """

# Necessari per iniciar un servidor de proves
if __name__ == '__main__':
    app.run(host="0.0.0.0", debug=True)
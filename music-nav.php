<nav class="bottom-bar center-y">
    <div class="container grow-1">
        <div id="music-data" class="container grow-1">
            <img class="album-img" src="img/uv-grid.jpg"/>
            <ul class="center-x col" style="text-align: left; margin: 0 12px;">
                <li><a class="white-text white-sub-hover" href="#">Titulo da Música</a></li>
                <li><a class="white-sub-hover" href="#">Artista</a></li>
            </ul>
            <div id="like-buttons" class="center-y">
                <i js_type="reference-tooltip" js_reference="heart" class="bi bi-heart"></i>
                <div class="tooltip" js_reference="heart" role="tooltip">Salvar na sua Biblioteca</div>
                <i js_type="reference-tooltip" js_reference="pip" class="bi bi-pip"></i>
                <div class="tooltip" js_reference="pip" role="tooltip">Picture in picture</div>
            </div>
        </div>
        <div class="container grow-1 center-x col">
            <nav class="music-buttons">
                <i js_type="reference-tooltip" class="bi bi-shuffle"></i>
                <div class="tooltip" js_reference="shuffle" role="tooltip">Ativar a ordem aleatória</div>
                <i js_type="reference-tooltip" class="bi bi-skip-start-fill"></i>
                <div class="tooltip" js_reference="start" role="tooltip">Voltar</div>
                <i js_type="reference-tooltip" class="bi bi-play-circle-fill"></i>
                <div class="tooltip" js_reference="play" role="tooltip">Play</div>
                <i js_type="reference-tooltip" class="bi bi-skip-end-fill"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Avançar</div>
                <i js_type="reference-tooltip" class="bi bi-repeat"></i>
                <div class="tooltip" js_reference="repeat" role="tooltip">Repetir</div>
            </nav>
            <div id="range-music" style="font-size: 10px;">
                01:52<input style="width: 416px;" type="range" value="70" min="0" max="100" id="range" oninput="rangenumber.value=value"/>05:44
            </div>
        </div>
        <div class="container grow-1 just-end">
            <div id="volume-buttons" class="center-y">
                <i js_type="reference-tooltip" class="bi bi-music-note-list"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Letra</div>
                <i js_type="reference-tooltip" class="bi bi-view-list"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Fila</div>
                <i js_type="reference-tooltip" class="bi bi-pc-display"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Conectar a um dispositivo</div>
                <i js_type="reference-tooltip" class="bi bi-volume-down"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Volume</div>
                <input style="width: 96px;" type="range" value="70" min="0" max="100" id="range" oninput="rangenumber.value=value"/>
                <i js_type="reference-tooltip" class="bi bi-arrows-angle-expand"></i>
                <div class="tooltip" js_reference="skip" role="tooltip">Tela Cheia</div>
            </div>
        </div>
    </div>
</nav>
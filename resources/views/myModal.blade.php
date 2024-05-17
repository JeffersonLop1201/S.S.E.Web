<div id="myModal" class="modal-cont-user">
    <div class="modal-content-user">
        <!-- Barra de Navegação -->
        <div class="desc-user-inform">

        </div>

        <div class="navbar">
            <a href="#" class="nav-item" id="btn-dados"
                onclick="toggleModalActive('dados'); toggleNavActive('btn-dados')">Dados</a>
            <a href="#" class="nav-item" id="btn-carteirinha"
                onclick="toggleModalActive('carteirinha'); toggleNavActive('btn-carteirinha')">Carteirinha</a>
            <a href="#" class="nav-item" id="btn-chat"
                onclick="toggleModalActive('chat'); toggleNavActive('btn-chat')">Chat</a>
            <a href="#" class="nav-item" id="btn-responsavel"
                onclick="toggleModalActive('responsavel'); toggleNavActive('btn-responsavel')">Responsável</a>
            <div class="line"></div>
        </div>
        <div class="modal-screen active cont-modal-inicio" id="inicio">

        </div>
        <div class="modal-screen cont-modal-user-dados" id="dados">

        </div>
        <div class="modal-screen cont-modal-user-carteirinha" id="carteirinha">

        </div>
        <!-- chat -->
        <div class="modal-screen cont-modal-user-chat" id="chat">
            
        </div>
        <!-- fim chat -->
        <div class="modal-screen cont-modal-user-responsavel" id="responsavel">

        </div>
    </div>
</div>
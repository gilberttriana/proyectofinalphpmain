<div class="grid">
    <style>
        img{
        width: 100%;
        height: auto;
        }
        @supports(object-fit: cover){
            img{
            height: 100%;
            object-fit: cover;
            object-position: center center;
            }
        }
    </style>
    <?php foreach($DATA as $anounce): ?>
        <div class="s12 m4 border-3 black-border">
            <img src="<?= $STATIC_ROOT ?>/img/home.jpg" alt="Home">
        </div>
        <div class="s12 m8 flex box justify-end border-3 black-border light-hover gray-1-bg">
            <p class="s12"><b>Precio: <span class="teal"><?= $anounce["Precio"]?></span></b></p>
            <p class="s12"><b>Tipo:</b> <?= $anounce["Tipo"]?></p>
            <p class="s12"><b>Ciudad:</b> <?= $anounce["Ciudad"]?></p>
            <p class="s12"><b>Dirección:</b> <?= $anounce["Direccion"]?></p>
            <p class="s12"><b>Código Postal:</b> <?= $anounce["Codigo_Postal"]?></p>
            <p class="s12"><b>Teléfono:</b> <?= $anounce["Telefono"]?></p>
            <a href="#!" class="button teal-bg white">Ver mas</a>
        </div>
    <?php endforeach ?>
</div>
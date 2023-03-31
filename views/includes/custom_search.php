<div class="s12 m4 l3 box light-hover gray-1-bg border-3 black-border">
    <h5 class="center-text">
        Realiza una búsqueda personalizada.
    </h5>
    <form action="" method="post" class="grid gap-1">
        <div class="s12">
            <label for="city">Ciudad</label>
            <select name="city" id="city">
                <?php foreach($CITIES as $city): ?>
                    <option value="<?= $city ?>"><?= $city ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="s12">
            <label for="type">Tipo</label>
            <select name="type" id="type">
                <?php foreach($TYPES as $type): ?>
                    <option value="<?= $type ?>"><?= $type ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="s12 grid gap-1">
            <p class="s12 center-text">
                <label for="slider">Rango de precio</label>
            </p>
            <p class="s6 center-text">
                <label for="min">Desde</label>
                <input type="number" step="1" name="min" id="min" >
                </p>
            <p class="s6 center-text">
                <label for="max">Hasta</label>
                <input type="number" step="1" name="max" id="max">
            </p>
            <div class="s12">
                <div id="slider"></div>
            </div>
        </div>
        <input
            type="submit"
            value="Buscar"
            name="custom_search"
            class="s12 button teal-bg white"/>
    </form>
</div>
<main class="add">
    <header>
        <h2>Adicionar Mascota</h2>
        <a href="<?=URL."/admin"?>" class="back"></a>
        <a href="<?=URL."/admin/sessionClose"?>" class="close"></a>
    </header>
    <figure class="photo-preview">
        <img src="<?= URL."/".$data["datos"]["photo"]?>" alt="">
    </figure>
    <form action="<?= URL?>/admin/upload/<?=$data['id']?>" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Nombre" value="<?=$data['datos']['name']?>">
        <?php
            if (isset($data['errors'])) {
                if (array_key_exists('name_errors', $data['errors'])) { ?>
                    <span class="login__error"><?= $data['errors']['name_errors'] ?></span>
            <?php
                }
            }
            ?>
        <div class="select">
            <select name="raza">
                <option value="">Seleccione Raza...</option>
                <?php
                foreach($data["race"] as $value){
                    if($value["name"] == $data['datos']['race']){
                    ?>
                    <option value="<?=$value["id"] ?>" selected><?=$data['datos']['race']?></option>
                    <?php
                    }else{
                    ?>
                    <option value="<?=$value["id"] ?>"><?=$value["name"] ?></option>
                    <?php
                    }
                } 
                ?>
                
            </select>
        </div>
            <?php
            if (isset($data['errors'])) {
                if (array_key_exists('raza_errors', $data['errors'])) { ?>
                    <span class="login__error"><?= $data['errors']['raza_errors'] ?></span>
            <?php
                }
            }
            ?>
        <div class="select">
            
            <select name="category">
                <option value="">Seleccione Categoría...</option>
                <?php
                foreach($data["category"] as $value){
                    if($value["name"] == $data['datos']['category']){
                        ?>
                        <option value="<?=$value["id"] ?>" selected><?=$data['datos']['category']?></option>
                        <?php
                        }else{
                        ?>
                        <option value="<?=$value["id"] ?>"><?=$value["name"] ?></option>
                        <?php
                        }
                    } 
                    ?>
               
            </select>
        </div>
            <?php
            if (isset($data['errors'])) {
                if (array_key_exists('category_errors', $data['errors'])) { ?>
                    <span class="login__error"><?= $data['errors']['category_errors'] ?></span>
            <?php
                }
            }
            ?>
            
        <div >
            <input class="fileNone" type="file" name="imague"  id="upload">
            <label id="fileStatus" class="upload" for="upload">Subir Imagen</label>
            <input type="hidden"  name="imagen_actual" value="<?=$data['datos']['photo']?>" >
        </div>

        <div class="select">
            <select name="genero">
                <option value="">Seleccione Genero...</option>
                <?php
                foreach($data["genero"] as $value){
                    if($value["name"] == $data['datos']['gender']){
                        ?>
                        <option value="<?=$value["id"] ?>" selected><?=$data['datos']['gender']?></option>
                        <?php
                        }else{
                        ?>
                        <option value="<?=$value["id"] ?>"><?=$value["name"] ?></option>
                        <?php
                        }
                    } 
                    ?>
            </select>
        </div>
            <?php
            if (isset($data['errors'])) {
                if (array_key_exists('genero_errors', $data['errors'])) { ?>
                    <span class="login__error"><?= $data['errors']['genero_errors'] ?></span>
            <?php
                }
            }
            ?>
        <button class="save">Guardar</button>
    </form>
</main>

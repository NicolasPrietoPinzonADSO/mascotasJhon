<main class="register__container">

    <section class="register">

        <div class="title">
            <h1 class="title__main">Recuperar contraseña</h1>
        </div>

        <form class="form" method="POST" action="<?= URL ?>/login/sendEmail">

            <div class="form__inputContainer">
                <input placeholder="Ingrese el correo asociado" id="email" type="text" class="form__input form-control " name="name"
                    value="" autocomplete="name" autofocus="">
                <?php
                if (isset($data['errors'])) {
                    if (array_key_exists('name_error', $data['errors'])) { ?>
                        <span class="login__error">
                            <?= $data['errors']['name_error'] ?>
                        </span>
                        <?php
                    }
                }
                ?>
            </div>
            <button>Enviar</button>
        </form>

    </section>

</main>
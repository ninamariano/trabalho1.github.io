<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CADASTRO</title>
</head>

<body> <!--inicio do body-->
    <div class="container"> <!-- class container dividindo a imagem do formulário-->
        <div class="form-image"> <!--div da imagem-->
            <img src="assets/img/undraw_online_resume_re_ru7s.s vg" alt="">
        </div>
        <div class="form"> <!-- div do formulário-->
            <form action="cadastracao.php" method="POST">
                <div class="form-header">
                    <div class="title"> <!-- titulo principal( no caso o cadastro embaixo)-->
                        <h1>Cadastre-se</h1> <!--nome do titulo-->
                    </div>
                </div>

                <div class="input-group"> <!--classe onde tera todos os inputs dentro do cadastro-->
                    <div class="input-box">
                        <label for="firstname">Primeiro Nome</label> <!--atrituto for faz tipo link emtre a label ao input.( Primeiro nome)-->
                        <input id="firstname" type="text" name="firstname" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="lastname">Sobrenome</label> <!--atrituto for faz tipo link emtre a label ao input.(sobrenome)-->
                        <input id="lastname" type="text" name="lastname" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label> <!--atrituto for faz tipo link emtre a label ao input.(email)-->
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label> <!--atrituto for faz tipo link emtre a label ao input.( celular)-->
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label> <!--atrituto for faz tipo link emtre a label ao input.( senha)-->
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label> <!--atrituto for faz tipo link emtre a label ao input.( confirma a senha)-->
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group"> <!--agrupar todos os inputs-->
                        <div class="gender-input"> <!--genero do atributo-->
                            <input id="female" type="radio" value="FEMININO" name="gender">
                            <label for="female">Feminino</label> 
                        </div>

                        <div class="gender-input"><!--genero do atributo-->
                            <input id="male" type="radio" value="MASCULINO" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input"><!--genero do atributo-->
                            <input id="others" type="radio" value="PREFIRO_NAO_DIZER" name="gender">
                            <label for="others">Prefiro não dizer</label>
                        </div>

                    </div>
                </div>

                <div class="continue-button">
                    <button class="botao" type="submit">Enviar</button> 
                </div>
            </form>
        </div>
    </div>
</body>

</html>
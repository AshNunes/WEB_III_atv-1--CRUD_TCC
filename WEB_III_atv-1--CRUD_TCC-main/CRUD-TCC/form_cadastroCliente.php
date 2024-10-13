<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP LINKS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="../CRUD-TCC/CSS/stryle_cadastro.css">

        <title>Formulário de Cadastro</title>
    </head>
    <body>
        <h3 class="titles">Cadastro de Aluno</h3>
        <form method="POST" action="cadastroCliente.php">
            <p> Nome:
                <div class="input-group flex-nowrap input">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" height="85%" viewBox="0 -960 960 960" width="48px" fill="#434343"><path d="M140-80q-24 0-42-18t-18-42v-480q0-24 18-42t42-18h250v-140q0-24 18-42t42.41-18h59.18Q534-880 552-862q18 18 18 42v140h250q24 0 42 18t18 42v480q0 24-18 42t-42 18H140Zm0-60h680v-480H570v30q0 28-18 44t-42.41 16h-59.18Q426-530 408-546q-18-16-18-44v-30H140v480Zm92-107h239v-14q0-18-9-32t-23-19q-32-11-50-14.5t-35-3.5q-19 0-40.5 4.5T265-312q-15 5-24 19t-9 32v14Zm336-67h170v-50H568v50Zm-214-50q22.5 0 38.25-15.75T408-418q0-22.5-15.75-38.25T354-472q-22.5 0-38.25 15.75T300-418q0 22.5 15.75 38.25T354-364Zm214-63h170v-50H568v50ZM450-590h60v-230h-60v230Zm30 210Z"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Nome:" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                 <!-- <input type="text" name="nome" required> -->
            </p>
            <p> Numero de Matricula:
                <div class="input-group flex-nowrap input">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#434343"><path d="M220-360v-192h-60v-48h108v240h-48Zm132 0v-110q0-15 9.5-24.5T386-504h98v-48H352v-48h146q15 0 24.5 9.5T532-566v76q0 15-9.5 24.5T498-456h-98v48h132v48H352Zm248 0v-48h132v-48h-92v-48h92v-48H600v-48h146q15 0 24.5 9.5T780-566v172q0 15-9.5 24.5T746-360H600Z"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Numero de Matricula:" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                 <!-- <input type="text" name="telefone" required>  -->
            </p>
            <p> Email:
                <div class="input-group flex-nowrap input">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#434343"><path d="M140-160q-24 0-42-18t-18-42v-520q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140-685v465h680v-465L480-462Zm0-60 336-218H145l335 218ZM140-685v-55 520-465Z"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Email:" aria-label="Username" aria-describedby="addon-wrapping">
                </div>
                 <!-- <input type="text" name="email" required>  -->
            </p>
            <p> Curso:
                <div class="input-group flex-nowrap input">
                    <span class="input-group-text" id="addon-wrapping">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px" fill="#434343"><path d="M560-574v-48q33-14 67.5-21t72.5-7q26 0 51 4t49 10v44q-24-9-48.5-13.5T700-610q-38 0-73 9.5T560-574Zm0 220v-49q33-13.5 67.5-20.25T700-430q26 0 51 4t49 10v44q-24-9-48.5-13.5T700-390q-38 0-73 9t-67 27Zm0-110v-48q33-14 67.5-21t72.5-7q26 0 51 4t49 10v44q-24-9-48.5-13.5T700-500q-38 0-73 9.5T560-464ZM248-300q53.57 0 104.28 12.5Q403-275 452-250v-427q-45-30-97.62-46.5Q301.76-740 248-740q-38 0-74.5 9.5T100-707v434q31-14 70.5-20.5T248-300Zm264 50q50-25 98-37.5T712-300q38 0 78.5 6t69.5 16v-429q-34-17-71.82-25-37.82-8-76.18-8-54 0-104.5 16.5T512-677v427Zm-30 90q-51-38-111-58.5T248-239q-36.54 0-71.77 9T106-208q-23.1 11-44.55-3Q40-225 40-251v-463q0-15 7-27.5T68-761q42-20 87.39-29.5 45.4-9.5 92.61-9.5 63 0 122.5 17T482-731q51-35 109.5-52T712-800q46.87 0 91.93 9.5Q849-781 891-761q14 7 21.5 19.5T920-714v463q0 27.89-22.5 42.45Q875-194 853-208q-34-14-69.23-22.5Q748.54-239 712-239q-63 0-121 21t-109 58ZM276-489Z"/></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Curso:" aria-label="Username" aria-describedby="addon-wrapping">
                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a value="TADS" class="dropdown-item" href="#">TADS</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul> -->
                </div>
            </p>
            <p> 
                <button class="btn btn-outline-light" type="submit">Cadastrar</button> 
            </p>
        </form>
    </body>
</html>
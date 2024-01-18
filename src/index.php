<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="styles/styles.css" rel="stylesheet">
    <title>Turnos</title>
</head>
<body>
    <nav></nav>

    <div class="spacing-10px">
        <h1 style="margin-bottom: 0px;">Banco Colombia</h1>
        <small class="text-muted">Aplicativo para la generación de turnos consecutivos, ordenados alfanuméricamente y según el tipo de atención a recibir.</small>
        <hr>
    </div>

    
    <div class="principal">
        <h3 class="d-flex justify-content-center z-1">Bienvenido</h3>
        <form action="" method="POST" accept-charset="utf-8" class="row g-3" autocomplete="off">
            <div class="form-group z-1">
                <label for="documento" class="form-label">Documento *</label>
                <div class="input-group">
                    <select id="t_documento" name="t_documento" class="form-select" required>
                        <option value="CC" selected>CC</option>
                        <option value="CE">CE</option>
                        <option value="TI">TI</option>
                        <option value="PP">PP</option>
                    </select>
                    <div class="col-8 z-1">
                        <input class="form-control t_documento" id="documento" name="documento" type="number" min="1" max="9999999999" required>
                    </div>
                </div>
                <small class="text-muted" id="validation_message"></small>
            </div>
            
            <div class="form-group z-1">
                <label class="form-label">¿Necesita atención preferencial?</label>
                <div class="d-flex justify-content-center">
                    <div class="form-check form-switch">
                        <input id="t_atencion" name="t_atencion" class="form-check-input" type="checkbox" onClick="switch_preferencial()">
                        <label class="form-check-label" for="t_atencion"><span id="preferencial"></span></label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center z-1">
                <button type="submit" name="submit" id="submit" class="btn btn-primary" onClick="togglePopup">Imprimir</button>
            </div>
        </form>
    </div>

    <script src=0/main.js></script>
    <?php require('0/main.php'); ?>

</body>
</html>

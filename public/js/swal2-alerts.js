document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('contact-button').addEventListener('click', function() {
        Swal.fire({
            title: 'Formulario de Contacto',
            html: `
                    <div class="card shadow-lg border-0 rounded-lg mt-4" id="contactForm">
                        <div class="card-body ff-Inter">
                            <form action="" method="POST">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input class="form-control" style="background: var(--background-1);" id="inputName" name="inputName" type="text" required/>
                                            <label for="inputName">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" style="background: var(--background-1);" id="inputEmail" name="inputEmail" type="text" required/>
                                            <label for="inputEmail">Correo electrónico</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input class="form-control" style="background: var(--background-1);" id="inputSubject" name="inputSubject" type="text" required/>
                                            <label for="inputSubject">Asunto</label>
                                        </div>
                                    </div>
                                </div>
                                <div id="formularioEscribir" class="mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" style="background: var(--background-1); height: 100px;" id="inputMessage" name="inputDescripcion"></textarea>
                                        <label for="inputMessage">Mensaje</label>
                                    </div>
                                </div>
                                <div class="mb-3 mt-4">
                                    <button class="btn btn-primary" type="submit" name="submit">Enviar mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                `,
            showConfirmButton: false,
            showCloseButton: true
        });
    });
});
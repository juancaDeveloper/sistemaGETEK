<div class="container">

    <div class="row">
        <div class="col-md-12 mt-5">

            <h1 class="text-center">Probaremos un Crud</h1>
            <hr style="background-color: black; color:black; height: 1px;">

        </div>

    </div>

    <div class="row">
        <div class="col-md-12 mt-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo Cliente
            </button>

            <!-- insertar Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Añadir Nuevo Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="" method="post" id="form">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" id="nombre" class="form-control" placeholder="Su nombre">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="Su email">
                                </div>


                            </form>

                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="add">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- editar  Modal -->

            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ediar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                             <input type="hidden" id="edit_modal_id" value="">
                            <form action="" method="post" id="edit_form">
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" id="edit_name" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" id="edit_email" class="form-control" >
                                </div>


                            </form>

                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary" id="editar">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>

    </div>

    <div class="row">
        <div class="col-md-12 mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Accion</td>
                    </tr>
                </thead>

                <tbody id="tbody">



                </tbody>

            </table>

        </div>

    </div>


</div>
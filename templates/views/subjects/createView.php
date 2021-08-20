<?php require_once INCLUDES . 'inc_header.php'; ?>

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container" id="kt_content_container">
        <?php echo Flasher::flash(); ?>
        <div class="row">
            <div class="col-md-6">
                <!--begin::Card-->
                <div class="card card-flush">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h3 class="card-title">Nueva Materia</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="subjects/store" id="subject-form" method="post">
                            
                            <?= insert_inputs() ?>

                            <div class="mb-10">
                                <label for="name" class="required form-label">Materia</label>
                                <input type="text" name="name" id="name" class="form-control form-control-solid" placeholder="Nombre de la materia" required/>
                            </div>

                            <div class="mb-5">
                                <label for="name" class="form-label">Descripción</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control form-control-solid" placeholder="Descripción de la Materia"></textarea>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" form="subject-form" type="submit">Guardar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php require_once INCLUDES . 'inc_footer.php'; ?>